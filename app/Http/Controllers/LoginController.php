<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request) : RedirectResponse
    {
        $request->session()->invalidate();

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);


        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'That email was not recogized.',
            'password' => 'That password was not incorrect.',

        ])->onlyInput('username');
    }
}
