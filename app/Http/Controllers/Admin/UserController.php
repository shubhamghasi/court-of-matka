<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = User::where('role', '!=', 'admin');

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // Paginate results
        $usersCollection = $query->orderBy('created_at', 'desc')->paginate(20);

        // Keep search term in pagination links
        $usersCollection->appends($request->only('search'));

        return view('admin.user.index', compact('usersCollection'));
    }

    public function removeTrendsAccess()
    {
        User::where('role', '!=', 'admin')->update(['has_trends_access' => 0]);

        return redirect()->route('admin.user')
            ->with('success', 'Trends access removed from all users.');
    }
}
