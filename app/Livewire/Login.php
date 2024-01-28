<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    protected $rules = [
        'email' => 'required|email:rfs',
        'password' => 'required|min:8',
    ];
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
    public function login()
    {
        $this->validate();
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password]))  {
            // Sukses Log
            session()->regenerateToken();
            if(Auth::user()->email_verified_at === null) {
                return dd('need to verified email');
            }
            
            // return dd('sukses log + verified email');
            return redirect()->route('index');
        }
        // Gagal Log
        return dd(1);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
