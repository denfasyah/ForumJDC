<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestController extends Controller
{
    //
    public function index(){
        return view('question.index');
    }
}
