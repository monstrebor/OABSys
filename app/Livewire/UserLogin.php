<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserLogin extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:5',
    ];


    public function loginUser()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            return redirect()->route('admin.home');
        } else {
            $this->addError('email', 'Invalid credentials, please try again.');
        }
    }

    public function render()
    {
        return view('livewire.user-login');
    }
}
