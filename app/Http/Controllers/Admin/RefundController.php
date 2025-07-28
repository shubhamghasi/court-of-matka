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
        $refundsCollection = Refund::with('user', 'market', 'numberType')
            ->whereNull('deleted_at')
            ->orderByDesc('created_at')
            ->paginate(20);
        // dd($refundsCollection);
        return view('admin.refund.index', compact('refundsCollection'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'market_id'   => 'required|exists:markets,id',
            'number_type' => 'required|exists:number_types,id',
            'bet_number'  => 'required|string|max:50',
            'upi_address' => 'required|string|max:255',
        ]);

        $refund = Refund::create([
            'user_id'     => Auth::id(),
            'market_id'   => $request->market_id,
            'number_type' => $request->number_type,
            'bet_number'  => $request->bet_number,
            'upi_address' => $request->upi_address,
            'status'      => 'pending',
        ]);

        if (!$refund) {
            return response()->json([
                'message' => 'Something went wrong. Please try again.',
                'status'  => false,
            ], 500);
        }

        return response()->json([
            'message' => 'Refund request submitted successfully.',
            'status'  => true,
            'data'    => $refund,
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
