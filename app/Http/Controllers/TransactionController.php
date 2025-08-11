<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    // Show form to create a new transaction (optional, if needed)
    public function create()
    {
        return view('transactions.create');  // create this view if needed
    }

    public function store(Request $request)
    {
        $request->validate([
            'upi_id' => 'nullable|string|max:255',
            'promo_code' => 'nullable|string|max:255',
            'transaction_id' => 'required|string|max:255',
            'upi_address' => 'required|string|max:255',
            'amount' => 'nullable|numeric|min:0',
        ]);

        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'upi_id' => $request->upi_id,
            'promo_code' => $request->promo_code,
            'transaction_id' => $request->transaction_id,
            'upi_address' => $request->upi_address,
            'amount' => $request->amount,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Transaction details submitted successfully.');
    }

    // Optional: List transactions of the authenticated user
    public function index()
    {
        $transactions = Transaction::with('user')->latest()->paginate(30);
        // dd($transactions);
        return view('admin.transactions.index', compact('transactions'));
    }

    public function changeStatus($id)
    {
        $transaction = Transaction::findOrFail($id);

        if ($transaction->status === 'pending') {
            $transaction->status = 'completed';
        } elseif ($transaction->status === 'completed') {
            $transaction->status = 'pending';
        }

        $transaction->save();

        return response()->json([
            'success' => true,
            'message' => 'Transaction status updated successfully.',
            'status' => $transaction->status
        ]);
    }

    public function allowUser($id)
    {
        $user = User::find($id);
        $user->update(['has_trends_access' => '1']);

        return response()->json([
            'success' => true,
            'message' => 'User has been allowed and given trends access successfully.'
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $transactions = Transaction::with('user')
            ->when($search, function ($query) use ($search) {
                $query->where('transaction_id', 'like', "%{$search}%")
                    ->orWhere('upi_address', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    });
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.transactions.partials.table', compact('transactions'))->render();
    }
}
