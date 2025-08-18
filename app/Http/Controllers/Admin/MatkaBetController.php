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
    public function index(Request $request)
    {
        $bets = MatkaBet::with(['market', 'number_type'])
            ->whereNotNull('color');
        if ($request->filled('date')) {
            $bets->whereDate('created_at', $request->date);
        }
        $bets = $bets->orderByDesc('created_at')
            ->paginate(20);

        return view('admin.matka.bets.index', compact('bets'));
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
            'bet_date'        => 'nullable|date',
        ]);

        $createdAt = $request->filled('bet_date')
            ? \Carbon\Carbon::parse($request->bet_date)->format('Y-m-d H:i:s')
            : now();

        $exists = MatkaBet::with('user')
            ->where('user_id', Auth::id())
            ->whereHas('user', function ($q) {
                $q->where('role', '!=', 'admin');
            })
            ->where('market_id', $request->market_id)
            ->where('number_type_id', $request->number_type_id)
            ->whereDate('created_at', \Carbon\Carbon::parse($createdAt)->toDateString())
            ->exists();

        if ($exists) {
            $errorMessage = 'You have already placed a bet in this category.';
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'message' => $errorMessage], 422);
            }
            return back()->withErrors(['bets' => $errorMessage])->withInput();
        }

        // ✅ Store bets for both user & admin formats
        foreach ($request->bets as $betData) {
            $numberId = is_array($betData) ? ($betData['number_id'] ?? null) : $betData;
            $color    = is_array($betData) ? ($betData['color'] ?? null) : null;

            MatkaBet::create([
                'user_id'        => Auth::id(),
                'market_id'      => $request->market_id,
                'number_type_id' => $request->number_type_id,
                'number_id'      => $numberId,
                'color'          => $color,
                'created_at'     => $createdAt,
                'updated_at'     => now(),
            ]);
        }

        // ✅ Success response
        if ($request->ajax()) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Numbers selected successfully.'
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
    public function edit(Request $request, string $id)
    {
        $bet = MatkaBet::with('market', 'number_type', 'number')->findOrFail($id);

        // If GET request -> Show edit form
        if ($request->isMethod('get')) {
            $markets = Market::all();
            $numberTypes = NumberType::all();
            $numbers = MatkaNumber::all();

            return view('admin.matka.bets.edit', compact('bet', 'markets', 'numberTypes', 'numbers'));
        }

        // If POST request -> Update bet
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'color' => 'required|string|max:50',
                'market_id' => 'required|integer|exists:markets,id',
                'number_type_id' => 'required|integer|exists:number_types,id',
                'number_id' => 'required|integer|exists:matka_numbers,id',
            ]);

            $bet->update($validated);

            return redirect()->route('admin.matka.bets.index')
                ->with('success', 'Bet updated successfully!');
        }

        abort(405, 'Method Not Allowed');
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
        $bet = MatkaBet::findOrFail($id);

        $bet->delete();

        return redirect()->route('admin.matka.bets.index')
            ->with('success', 'Bet deleted successfully!');
    }
}
