<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Refund;
use App\Models\Trend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{
    //
    public function index()
    {
        $refundsCollection = Refund::with('user', 'predicted.type', 'predicted.market')->whereNull('deleted_at')->paginate(20);
        
        // dd($refundsCollection);
        return view('admin.refund.index', compact('refundsCollection'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bet_number' => 'required|exists:trends,id',
        ]);
        $trendsData = Trend::find($request->bet_number);
        $refund = Refund::create([
            'user_id' => Auth::User()->id,
            'trends_id' => $trendsData->id,
            'market_id' => $trendsData->market_id,
            'bet_number' => $trendsData->predicted_numbers,
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
