<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\AdminNotif;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $user = User::find(1);

        return response([
            'data' => $user->notifications
        ]);
    }

    public function send()
    {
        $user = User::find(1);
        $notif = [
            'message' => 'this is message'
        ];

        $user->notify(new AdminNotif($notif));

        return response([
            'data' => [
                'message' => 'send notification success'
            ]
        ]);
    }
}
