<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoubtCheck;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

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

    public function getAllNotificationOfUser()
    {
        $userId = Auth::user()->id;

        // Trend-based notifications
        $trendNotifications = \App\Models\Trend::with(['market', 'type'])
            ->where('user_id', $userId)
            ->whereNotNull('predicted_numbers')
            ->where('is_read', false)
            ->orderByDesc('created_at')
            ->get();

        // Doubt check notifications (admin-generated predictions)
        $doubtChecks = \App\Models\DoubtCheck::with(['market', 'numberType'])
            ->where('user_id', $userId)
            ->whereNotNull('accuracy')
            // ->where('is_read', false)
            ->orderByDesc('created_at')
            ->get();

        $unreadCount = $trendNotifications->count() + $doubtChecks->count();

        return view('notifications.index', compact('trendNotifications', 'doubtChecks', 'unreadCount'));
    }

    public function markAsRead($id)
    {
        $trend = \App\Models\Trend::where('user_id', Auth::id())
            ->where('id', $id)
            ->firstOrFail();

        $trend->is_read = true;
        $trend->save();

        return response()->json(['status' => true, 'message' => 'Marked as read']);
    }

    public function markDoubtAsRead($id): JsonResponse
    {
        $doubt = DoubtCheck::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $doubt->is_read = true;
        $doubt->save();

        return response()->json([
            'status' => true,
            'message' => 'Doubt marked as read.'
        ]);
    }
}
