<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\MatkaBet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
