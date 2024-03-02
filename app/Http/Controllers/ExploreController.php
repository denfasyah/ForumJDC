<?php

namespace App\Http\Controllers;

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
        return view('explore.index');
    }
}
