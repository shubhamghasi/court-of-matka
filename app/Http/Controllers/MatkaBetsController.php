<?php

namespace App\Http\Controllers;

use App\Models\MatkaBet;
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
            'transaction_id' => 'required|string|max:100|unique:matka_bets,transaction_id'
        ]);

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
