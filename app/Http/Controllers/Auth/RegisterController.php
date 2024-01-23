<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth\regist');
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
        // FullName,Username,Email,,Password,RetypePassword
        $validate = Validator::make($request->all(), [
            'FullName' => 'min:4|max:36|required',
            'Username' => 'min:4|max:18|required|unique:users,username',
            'Email' => 'email:rfs|required|unique:users,email',
            'Password' => 'required|min:8',
            'RePassword' => 'required|min:8|same:Password',
        ]);

        if($validate->fails()) return redirect()->route('register.index')->withErrors($validate);
        return response()->json([
            "status" => 201,
            "data" => $request->all(),
            "message" => "Register Berhasil"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
