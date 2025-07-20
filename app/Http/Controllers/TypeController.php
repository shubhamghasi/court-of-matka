<?php

namespace App\Http\Controllers;

use App\Models\NumberType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //
    public function index(){
        $typesCollection = NumberType::paginate(20);
        return view('admin.number_type.index', compact('typesCollection'));
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required',
            ]);
            $type = new NumberType();
            $type->create([
                'name' => strtolower($request->name),
            ]);
            return redirect()->route('admin.number.type');

        }
        return view('admin.number_type.create');
    }
}
