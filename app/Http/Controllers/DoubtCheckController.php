<?php

namespace App\Http\Controllers;

use App\Models\DoubtCheck;
use Illuminate\Http\Request;

class DoubtCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doubtRequests = DoubtCheck::with(['user', 'market', 'numberType'])->latest()->get();
        return view('admin.doubt.index', compact('doubtRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DoubtCheck $doubtCheck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DoubtCheck $doubtCheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DoubtCheck $doubtCheck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doubt = DoubtCheck::findOrFail($id);
        $doubt->delete();

        return redirect()->back()->with('success', 'Doubt request deleted.');
    }

    public function markAsResolved($id)
    {
        $doubt = DoubtCheck::findOrFail($id);
        $doubt->status = 'resolved';
        $doubt->save();

        return redirect()->back()->with('success', 'Doubt request marked as resolved.');
    }

    public function analyze($id)
    {
        $doubt = DoubtCheck::with(['user', 'market', 'numberType'])->findOrFail($id);

        // Step 1: Match in matka_bets
        $matkaMatches = \App\Models\MatkaBet::where('market_id', $doubt->market_id)
            ->where('number_type_id', $doubt->number_type_id)
            ->where('bet_number', $doubt->number)
            ->count();

        // Step 2: Match in number_amounts
        $amountMatches = \App\Models\NumberAmount::where('market_id', $doubt->market_id)
            ->where('number_type_id', $doubt->number_type_id)
            ->where('number', $doubt->number)
            ->count();

        // Calculate accuracy
        if ($matkaMatches || $amountMatches) {
            $totalMatches = $matkaMatches + $amountMatches;
            $accuracy = min(100, 70 + ($totalMatches * 5)); // cap at 100
        } else {
            $accuracy = 70;
        }

        // Save to DB
        $doubt->accuracy = $accuracy . '%';
        $doubt->status = 'analyzed';
        $doubt->save();

        return redirect()->back()->with('success', 'Prediction generated and accuracy saved.');
    }

    public function sendResult($id)
    {
        $doubt = DoubtCheck::with('user')->findOrFail($id);

        if (!$doubt->accuracy) {
            return back()->with('error', 'Please analyze the result before sending.');
        }

        $message = "Prediction Result for Number: {$doubt->number}\n\nEstimated Accuracy: {$doubt->accuracy}";

        // Save notification (or send mail optionally)
        \App\Models\Notification::create([
            'user_id' => $doubt->user_id,
            'message' => $message,
            'start_time' => now(),
            'end_time' => now()->addHours(2)
        ]);

        // Update status
        $doubt->status = 'resolved';
        $doubt->save();

        return back()->with('success', 'Result sent to user successfully.');
    }
}
