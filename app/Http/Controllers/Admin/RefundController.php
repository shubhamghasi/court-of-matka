<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{
    //
    public function index()
    {
        $refundsCollection = Refund::with('user', 'predicted')->whereNull('deleted_at')->paginate(20);
        return view('admin.refund.index', compact('refundsCollection'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'market_id' => 'required|exists:markets,id',
            'bet_number' => 'required|exists:trends,id',
            'amount' => 'required|numeric|min:1',
        ]);

        $refund = Refund::create([
            'user_id' => Auth::User()->id,
            'market_id' => $request->market_id,
            'bet_number' => $request->bet_number,
            'amount' => $request->amount,
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'Refund request submitted successfully.',
            'data' => $refund
        ]);
    }

    public function destroy($id)
    {
        $refund = Refund::findOrFail($id);
        $refund->delete();

        return redirect()->back()->with('success', 'Refund request removed.');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        $refund = Refund::findOrFail($id);
        $refund->status = $request->status;
        $refund->save();

        return redirect()->back()->with('success', 'Refund status updated.');
    }
}
