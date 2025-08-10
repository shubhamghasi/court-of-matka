<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Market;
use App\Models\MatkaBet;
use App\Models\MatkaNumber;
use App\Models\NumberType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatkaBetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $numberTypes = NumberType::all();
        $markets = Market::all();

        return view('admin.matka.bets.create', compact('numberTypes', 'markets'));
    }

    public function getNumbers(Request $request)
    {
        $query = MatkaNumber::where('number_type_id', $request->number_type_id);

        if ($request->filled('panel_number')) {
            $query->where('number', $request->panel_number);
        }

        return response()->json($query->orderBy('number', 'ASC')->get());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'market_id' => 'required|integer|exists:markets,id',
            'number_type_id' => 'required|integer|exists:number_types,id',
            'bets' => 'required|array',
            'bets.*.number_id' => 'nullable|integer|exists:matka_numbers,id',
            'bets.*.amount' => 'nullable|numeric|min:1'
        ]);

        // Keep only bets with an amount
        $filteredBets = collect($request->bets)->filter(function ($bet) {
            return !empty($bet['amount']) && !empty($bet['number_id']);
        });

        // Validation: must have at least 1 bet, max 2 bets
        if ($filteredBets->count() === 0) {
            return back()->withErrors(['bets' => 'You must place at least one bet.'])->withInput();
        }
        // Store bets
        foreach ($filteredBets as $bet) {
            MatkaBet::create([
                'user_id' => Auth::id(),
                'market_id' => $request->market_id,
                'number_type_id' => $request->number_type_id,
                'number_id' => $bet['number_id'],
                'amount' => $bet['amount'],
            ]);
        }

        return redirect()->back()->with('success', 'Bets added successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
