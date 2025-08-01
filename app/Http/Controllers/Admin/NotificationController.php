<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

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
            'message' => 'required|string',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i',
        ]);

        Notification::create([
            'message' => $request->message,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
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
            'message' => 'required|string',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i',
        ]);

        $notification = Notification::findOrFail($id);
        $notification->update([
            'message' => $request->message,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
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
        $notifications = Notification::latest()->get(['message', 'start_time', 'end_time']);

        return response()->json([
            'notifications' => $notifications
        ]);
    }
}
