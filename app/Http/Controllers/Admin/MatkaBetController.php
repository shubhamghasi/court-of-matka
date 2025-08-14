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
        $query = MatkaNumber::with('type')->where('number_type_id', $request->number_type_id);

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
            'market_id'       => 'required|integer|exists:markets,id',
            'number_type_id'  => 'required|integer|exists:number_types,id',
            'bets'            => 'required|array|min:1',
            'bets.*'          => 'integer|exists:matka_numbers,id',
            'bet_date'        => 'nullable|date',
        ]);

        $createdAt = $request->filled('bet_date')
            ? \Carbon\Carbon::parse($request->bet_date)->format('Y-m-d H:i:s')
            : now();

        // Make sure at least one number is selected
        if (count($request->bets) === 0) {
            return back()->withErrors(['bets' => 'Please select at least one number.'])->withInput();
        }

        foreach ($request->bets as $numberId) {
            MatkaBet::create([
                'user_id'        => Auth::id(),
                'market_id'      => $request->market_id,
                'number_type_id' => $request->number_type_id,
                'number_id'      => $numberId,
                'amount'         => null,
                'created_at'     => $createdAt,
                'updated_at'     => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Numbers selected successfully.');
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
