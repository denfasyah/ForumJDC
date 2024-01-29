<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
