<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MatkaNumber;
use App\Models\NumberType;
use Illuminate\Http\Request;

class MatkaNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkaNumbers = MatkaNumber::with('type')->paginate(20);
        return view('admin.matka.numbers.index', compact('matkaNumbers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $numberTypesCollection = NumberType::all();
        return view('admin.matka.numbers.create', compact('numberTypesCollection'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $isPanel = strtolower($request->input('number_type_name')) === 'panel';

        $validated = $request->validate([
            'number_type_id' => 'required|exists:number_types,id',
            'number' => 'required|string|max:5000',
            'panel_number' => $isPanel ? 'required|string|max:5000' : 'nullable|string|max:5000',
        ]);

        if ($isPanel) {
            // Extract a single number
            $number = trim($validated['number']);

            // Validate only one number is provided
            $numberParts = array_filter(array_map('trim', explode(',', $number)));
            if (count($numberParts) > 1) {
                return back()->withErrors(['number' => 'Only one number is allowed when using panel numbers.'])->withInput();
            }

            // Extract panel numbers
            $panelNumbers = array_filter(array_map('trim', explode(',', $validated['panel_number'])));

            foreach ($panelNumbers as $panelNumber) {
                MatkaNumber::create([
                    'number_type_id' => $validated['number_type_id'],
                    'number' => $number,
                    'panel_number' => $panelNumber,
                ]);
            }
        } else {
            // Non-panel logic — multiple numbers allowed
            $numbers = array_filter(array_map('trim', explode(',', $validated['number'])));

            foreach ($numbers as $number) {
                MatkaNumber::create([
                    'number_type_id' => $validated['number_type_id'],
                    'number' => $number,
                    'panel_number' => null,
                ]);
            }
        }

        return redirect()->route('admin.matka.numbers.index')->with('success', 'Numbers added successfully.');
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
        $matkaNumber = MatkaNumber::with('type')->findOrFail($id);
        $numberTypesCollection = NumberType::all();

        return view('admin.matka.numbers.edit', compact('matkaNumber', 'numberTypesCollection'));
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
        $number = MatkaNumber::findOrFail($id);
        $number->delete();

        return redirect()->route('admin.matka.numbers.index')->with('success', 'Number deleted successfully.');
    }
}
