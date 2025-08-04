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
        $cleaned_promo_code = trim(strtolower($request->code));
        $request->merge(['code' => $cleaned_promo_code]);
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
        $promoCode = trim(strtolower($request->input('promo')));
        
        $promo = Promo::where('code', $promoCode)->first();
        
        if (!$promo || $promo->expires_at < now() || !$promo->is_active) {
            return response()->json([
                'valid' => false,
                'message' => 'Invalid or expired promo code.'
            ]);
        }

        return response()->json([
            'valid' => true,
            'message' => 'Valid promo code.',
            'data' => $promo
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
