<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $marketsCollection = Market::whereNull('deleted_at')->get();
        return view('admin.market.index', compact('marketsCollection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.market.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'status' => 'required|in:0,1',
        ]);

        Market::create($validated);

        return redirect()->route('admin.market.index')->with('success', 'Market created successfully');
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
        $market = Market::findOrFail($id);
        return view('admin.market.create', compact('market'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $market = Market::findOrFail($id);

        $validated = [
            "name" => $request->name,
            "start_time" => $request->start_time,
            "end_time" => $request->end_time,
            "status" => $request->status
        ];
        $market->update($validated);

        return redirect()->route('admin.market.index')->with('success', 'Market updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $market = Market::find($id);
        if ($market) {
            $market->delete();
            return redirect()->route('admin.market.index');
        }
    }

    public function setMarketsToInactive()
    {
        $userObj = Auth::user();

        if (!$userObj || $userObj->role !== "admin") {
            abort(403, 'Unauthorized action.');
        }

        Market::query()->update(['status' => "0"]);

        return redirect()->route('admin.market.index')->with('success', 'All markets have been deactivated.');
    }

    public function setMarketsToActive()
    {
        $userObj = Auth::user();

        if (!$userObj || $userObj->role !== "admin") {
            abort(403, 'Unauthorized action.');
        }

        Market::query()->update(['status' => "1"]);

        return redirect()->route('admin.market.index')->with('success', 'All markets have been activated.');
    }
}
