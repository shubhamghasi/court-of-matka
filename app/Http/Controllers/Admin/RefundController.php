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
        $refundsCollection = Refund::with('user')
            ->whereNull('deleted_at')
            ->orderByDesc('created_at')
            ->paginate(20);

        return view('admin.refund.index', compact('refundsCollection'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();

        $request->validate([
            'market_name' => 'required|string|max:255',
            'bet_number'  => 'required|string|max:50',
            'upi_address' => 'required'
        ]);

        $refund = Refund::create([
            'user_id'     => $user_id,
            'market_name' => $request->input('market_name'),
            'bet_number'  => $request->input('bet_number'),
            'status'      => 'pending',
            'upi_address' => $request->upi_address,
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
