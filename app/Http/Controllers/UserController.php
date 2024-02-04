<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id)
            ->with('socialMedia.platform');
            
        return view('user.index', compact('user'));
    }
}
