<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    //
    public function index()
    {
        return view('learning.index');
    }
    public function single($type,Request $request)
    {
        return view('learning.single',["types" => $type]);
    }
}
