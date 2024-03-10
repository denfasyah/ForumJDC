<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Arr;

class Register extends Component
{
    public $fullname, $username, $email, $password, $rpassword;
    protected $rules = [
        'fullname' => 'required|min:4',
        'username' => 'required|min:6|unique:users,username',
        'email' => 'required|email:rfs|unique:users,email',
        'password' => 'required|min:8',
        'rpassword' => 'required|min:8|same:password',
    ];
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
    public function register()
    {
        $this->validate();
        $exceptValidate = Arr::except($this->validate(), 'rpassword');
        $exceptValidate['password'] = bcrypt($exceptValidate['password']);

        User::create($exceptValidate);

        return redirect()->route('explore');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
