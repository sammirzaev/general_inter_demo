<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserOnlineController extends Controller
{
    public function __invoke(User $user)
    {
        $user->status = 'online';
        $user->save();

        broadcast(new UserOnline($user));
    }

    public function broadcastAs()
    {
        return 'user-online';
    }
}
