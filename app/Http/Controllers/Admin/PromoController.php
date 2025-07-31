<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    //
    public function index()
    {
        $promos = Promo::latest()->paginate(10);
        return view('admin.promo.index', compact('promos'));
    }

    public function create()
    {
        return view('admin.promo.form');
    }

    public function store(Request $request)
    {
        $data = $this->validatePromo($request);
        Promo::create($data);

        return redirect()->route('admin.promo.index')->with('success', 'Promo code created successfully.');
    }

    public function edit(Promo $promo)
    {
        return view('admin.promo.form', compact('promo'));
    }

    public function update(Request $request, Promo $promo)
    {
        $data = $this->validatePromo($request, $promo->id);
        $promo->update($data);

        return redirect()->route('admin.promo.index')->with('success', 'Promo code updated successfully.');
    }

    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('admin.promo.index')->with('success', 'Promo code deleted successfully.');
    }

    public function check(Request $request)
    {
        $promo = $request->input('promo');

        $validPromos = ['SAVE10', 'DISCOUNT20', 'FREEDOUBT'];

        if (in_array(strtoupper($promo), $validPromos)) {
            return response()->json([
                'valid' => true,
                'message' => 'Promo code applied successfully!'
            ]);
        }

        return response()->json([
            'valid' => false,
            'message' => 'Invalid or expired promo code.'
        ]);
    }

    private function validatePromo(Request $request, $ignoreId = null)
    {
        return $request->validate([
            'code' => 'required|string|unique:promos,code,' . $ignoreId,
            'discount_amount' => 'nullable|numeric|min:0',
            'discount_percent' => 'nullable|integer|min:0|max:100',
            'max_uses' => 'nullable|integer|min:1',
            'expires_at' => 'nullable|date',
            'is_active' => 'required|boolean',
            'is_valid_on_trends' => 'required|boolean',
            'is_valid_on_doubt' => 'required|boolean',
        ]);
    }
}
