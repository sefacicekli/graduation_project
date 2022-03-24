<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form()
    {
        return view('admin.login');
    }

    public function login()
    {
        $this->validate(request(), [
            'email' =>'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => request('email'), 'password' => request('password'), 'authorization'=> true]))
        {
            request()->session()->regenerate();
            return redirect()->intended('admin');
        }
        else
        {
            return back()
                ->with('message', 'Email or password is incorrect!')
                ->with('message_type', 'danger');
        }
    }

    public function signout()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('login');

    }
}
