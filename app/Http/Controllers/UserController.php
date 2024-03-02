<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('socialMedia.platform')->find(auth()->user()->id);
        return view('profile.index', compact('user'));
    }
}
