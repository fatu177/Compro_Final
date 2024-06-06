<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard.index'));
        }
        return back()->withErrors(['email' => 'Invalid Email', 'password' => 'Invalid Password']);
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();



        return redirect()->route('login');
    }
}
