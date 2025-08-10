<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\MatkaBet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MatkaBetsController extends Controller
{
    //
    public function handleMatkaBet(Request $request)
    {
        $validated = $request->validate([
            'market_id' => 'required|integer|exists:markets,id',
            'bet_amount' => 'required|numeric|min:1',
            'bet_number' => 'required|string|max:10',
            'transaction_id' => 'required|string|max:100|unique:matka_bets,transaction_id',
            'number_type_id' => 'required',
            'user_upi' => 'required',
        ]);

        $market = Market::findOrFail($validated['market_id']);
        $now = Carbon::now()->format('H:i:s');

        if (
            $market->status != 1 ||
            $market->start_time > $now ||
            $market->end_time < $now
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Betting is closed for this market at this time.'
            ]);
        }

        $validated['user_id'] = Auth::id();

        $bet = MatkaBet::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Bet placed successfully.',
            'data' => $bet
        ]);
    }

    public function getMatkaBetList()
    {
        $matBetsCollection = MatkaBet::with(['user', 'market'])
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return view('admin.matka.betlist', compact(['matBetsCollection']));
    }

    public function fetchBets(Request $request)
    {
        $request->validate([
            'market'        => 'required|integer',
            'number_type'   => 'required|integer',
            'date'          => 'required|date',
            'panel_number'  => 'nullable|string'
        ]);

        $betsQuery = MatkaBet::select('number_id', DB::raw('SUM(amount) as total_amount'))
            ->with('number')
            ->where('market_id', $request->market)
            ->where('number_type_id', $request->number_type)
            ->whereDate('created_at', $request->date);

        // If panel_number is provided, filter related number table
        if (!empty($request->panel_number)) {
            $betsQuery->whereHas('number', function ($q) use ($request) {
                $q->where('number', $request->panel_number);
            });
        }

        $bets = $betsQuery
            ->groupBy('number_id')
            ->get();

        // Find highest total_amount
        $maxAmount = $bets->max('total_amount');

        // Add a flag to each bet
        $bets = $bets->map(function ($bet) use ($maxAmount) {
            $bet->is_highest = ($bet->total_amount == $maxAmount);
            return $bet;
        })
            ->sortBy(function ($bet) {
                return $bet->number->panel_number ?? $bet->number->number;
            })
            ->values();

        return response()->json([
            'success' => true,
            'data'    => $bets
        ]);
    }
}
