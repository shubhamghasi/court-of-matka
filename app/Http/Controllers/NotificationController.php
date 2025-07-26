<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class NotificationController extends Controller
{
    public function getNotifications(): JsonResponse
    {
        $now = Carbon::now()->format('H:i:s'); // use full time format

        $notifications = Notification::where('start_time', '<=', $now)
            ->where('end_time', '>=', $now)
            ->get(['message', 'start_time', 'end_time']);

        return response()->json([
            'notifications' => $notifications
        ]);
    }
}
