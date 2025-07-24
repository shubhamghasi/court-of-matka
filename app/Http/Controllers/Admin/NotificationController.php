<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->get();
        return view('admin.notifications.index', compact('notifications'));
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'message_part_1' => 'required|string|max:100',
            'message_part_2' => 'required|string|max:100',
            'location' => 'nullable|string|max:100',
            'active' => 'required|in:0,1',
        ]);

        Notification::create([
            'name' => $request->name,
            'message_part_1' => $request->message_part_1,
            'message_part_2' => $request->message_part_2,
            'location' => $request->location,
            'active' => $request->active,
        ]);

        return redirect()->route('admin.notifications.index')->with('success', 'Notification created');
    }

    public function edit($id)
    {
        $notification = Notification::findOrFail($id);
        return view('admin.notifications.create', compact('notification'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'message_part_1' => 'required|string|max:100',
            'message_part_2' => 'required|string|max:100',
            'location' => 'nullable|string|max:100',
            'active' => 'required|in:0,1',
        ]);
        $notification = Notification::findOrFail($id);
        $notification->update([
            'name' => $request->name,
            'message_part_1' => $request->message_part_1,
            'message_part_2' => $request->message_part_2,
            'location' => $request->location,
            'active' => $request->active,
        ]);

        return redirect()->route('admin.notifications.index')->with('success', 'Notification updated');
    }

    public function destroy($id)
    {
        Notification::findOrFail($id)->delete();
        return redirect()->route('admin.notifications.index')->with('success', 'Notification deleted');
    }

    public function getNotifications(): JsonResponse
    {
        $notifications = Notification::where('active', true)->get(['name', 'message_part_1', 'message_part_2', 'location']);

        return response()->json([
            'names' => $notifications->pluck('name')->unique()->values(),
            'actions' => $notifications->pluck('message_part_1')->unique()->values(),
            'items' => $notifications->pluck('message_part_2')->unique()->values(),
            'locations' => $notifications->pluck('location')->filter()->unique()->values(),
        ]);
    }
}
