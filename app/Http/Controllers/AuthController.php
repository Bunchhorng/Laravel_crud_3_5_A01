<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name'=> 'required|string|max:100',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = 'user';

        User::create($validated);
        return redirect()->route('auth.login')->with('message', 'registered successfully!');
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email|string',
            'password'=> 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('welcome')->with('message', 'Welcome back!');
        }

        return back()->withErrors([
            'email' => 'Incorrect email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')->with('message', 'You have been logged out.');
    }

}
