<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\MatkaBet;
use App\Models\NumberType;
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
            ->paginate(30);
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

        $user = $request->user();
        $requestedDate = \Carbon\Carbon::parse($request->date)->toDateString();
        $todayDate = now()->toDateString();

        if ($requestedDate === $todayDate && !$user->has_trends_access) {
            return response()->json([
                'success' => false,
                'requires_payment' => true,
                'message' => 'You need to purchase access to view today\'s trends.'
            ], 403);
        }

        $numberTypeName = NumberType::find($request->number_type)->name ?? '';
        $panel_requested = stripos($numberTypeName, 'panel') !== false;

        $betsQuery = MatkaBet::select('number_id', DB::raw('SUM(amount) as total_amount'))
            ->with('number')
            ->where('market_id', $request->market)
            ->where('number_type_id', $request->number_type)
            ->whereDate('created_at', $requestedDate);

        if (!$panel_requested && !empty($request->panel_number)) {
            $betsQuery->whereHas('number', function ($q) use ($request) {
                $q->where('number', $request->panel_number);
            });
        }

        $bets = $betsQuery
            ->groupBy('number_id')
            ->get();

        if ($bets->isEmpty()) {
            return response()->json([
                'success' => true,
                'data'    => [],
                'panel_requested' => $panel_requested
            ]);
        }

        $bets->transform(function ($b) {
            $b->total_amount = (float) $b->total_amount;
            return $b;
        });

        $maxAmount = $bets->max('total_amount');

        if ($maxAmount <= 0) {
            $bets = $bets->map(function ($bet) {
                $bet->category = 'green';
                return $bet;
            })->sortBy(function ($bet) {
                return $bet->number->panel_number ?? $bet->number->number;
            })->values();

            return response()->json([
                'success' => true,
                'data'    => $bets,
                'panel_requested' => $panel_requested
            ]);
        }

        $t1 = $maxAmount / 3.0;
        $t2 = 2 * $maxAmount / 3.0;
        $t3 = $maxAmount;

        $bets = $bets->map(function ($bet) use ($t1, $t2, $t3) {
            $a = $bet->total_amount;
            $d1 = abs($a - $t1);
            $d2 = abs($a - $t2);
            $d3 = abs($a - $t3);

            if ($d1 <= $d2 && $d1 <= $d3) {
                $bet->category = 'green';
            } elseif ($d2 <= $d1 && $d2 <= $d3) {
                $bet->category = 'yellow';
            } else {
                $bet->category = 'red';
            }

            return $bet;
        })->sortBy(function ($bet) {
            return $bet->number->panel_number ?? $bet->number->number;
        })->values();

        return response()->json([
            'success' => true,
            'data'    => $bets,
            'panel_requested' => $panel_requested
        ]);
    }
}
