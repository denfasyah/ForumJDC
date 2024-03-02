<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //
    public function index(Request $request)
    {
        $request->only("uid");
        if ($request->has("uid")) {
            return view("explore.single");
        }
        $explore = Explore::with('user')->get();
        return view('explore.index', compact('explore'));
    }
}
