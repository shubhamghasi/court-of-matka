<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Market;
use App\Models\NumberAmount;
use App\Models\NumberType;
use Illuminate\Http\Request;

class NumberAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $numberAmountCollection = NumberAmount::get();
        return view('admin.numbers.index', compact('numberAmountCollection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $numberTypeCollection = NumberType::get();
        $marketsCollection = Market::get();
        return view('admin.numbers.form', compact('marketsCollection', 'numberTypeCollection'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'market_id' => 'required',
            'number_type_id' => 'required',
            'number' => 'integer|required',
            'amount' => 'numeric',
        ]);
        // dd($request->all());
        NumberAmount::create($validated);
        return redirect()->route('admin.manage.number.index');
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
        $numberTypeCollection = NumberType::get();
        $marketsCollection = Market::get();
        $numberAmountCollection = NumberAmount::where('id', $id)->first();
        return view('admin.numbers.form', compact('marketsCollection', 'numberTypeCollection', 'numberAmountCollection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'market_id' => 'required|exists:markets,id',
            'number_type_id' => 'required|exists:number_types,id',
            'number' => 'required|integer',
            'amount' => 'required|numeric',
        ]);

        $numberAmount = NumberAmount::findOrFail($id);
        $numberAmount->update($validated);

        return redirect()->route('admin.manage.number.index')
            ->with('success', 'Number amount updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $numberAmount = NumberAmount::findOrFail($id);
        $numberAmount->delete();

        return redirect()->route('admin.manage.number.index')
            ->with('success', 'Number amount deleted successfully.');
    }
}
