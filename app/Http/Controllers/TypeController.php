<?php

namespace App\Http\Controllers;

use App\Models\NumberType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //
    public function index()
    {
        $typesCollection = NumberType::paginate(20);
        return view('admin.number_type.index', compact('typesCollection'));
    }

    public function create()
    {
        return view('admin.number_type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $type = new NumberType();
        $type->create([
            'name' => strtolower($request->name),
        ]);
        return redirect()->route('admin.number.type.index');
    }

    public function edit($id)
    {
        $typesCollection = NumberType::where('id', $id)->first();
        return view('admin.number_type.create', compact('typesCollection'));
    }

    public function update($id, Request $request)
    {
        // dd($id, $request->all());
        $type = NumberType::where('id', $id)->first();
        $request->validate([
            'name' => 'required',
        ]);
        $type->update([
            'name' => strtolower($request->name),
        ]);
        return redirect()->route('admin.number.type.index');
    }

    public function destroy($id)
    {
        $type = NumberType::where('id', $id)->first();
        $type->delete();
        return redirect()->route('admin.number.type.index');
    }
}
