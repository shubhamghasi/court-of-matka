<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
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
