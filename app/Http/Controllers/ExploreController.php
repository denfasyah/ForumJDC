<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //
    private $data_explore = [];
    public function index(Request $request)
    {
        $request->only("uid");
        if ($request->has("uid")) {
            return view("explore.single");
        }
        $explore = Explore::with('user')->get();
        return view('explore.index', compact('explore'));
    }

    public function create_explore(Request $request)
    {
        $this->data_explore = [
            "body" => $request['body'],
            "user_id" => $request['user_id']
    ];
        $create = Explore::create($this->data_explore);
        if($create) {
            return response()->json($create);
        }
        return 500;

        
    }
}
