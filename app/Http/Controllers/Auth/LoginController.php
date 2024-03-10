<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth\login');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->only(['email','password']), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validate->fails()) return redirect()->route('login.index')->withErrors($validate);

        // success response
        if(Auth::attempt(["username" => $request['email'], 'password' => $request['password']],true)) {
            return redirect('/');
        }
        return false;
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(Login $login)
    {
                
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        Auth::logout();

        return redirect('/');
    }
}
