<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function attemptLogin(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required| min:6'
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'))->with('success', 'Login successfull!');
        }
        return back()->withErrors([
            'username' => 'Invalid Credentials',
        ])->withInput();
    }

    public function register(){
        return view('pages.register');
    }

    public function attemptRegister(Request $request){
        $validated = $request->validate([
            'username' => 'required|unique:users|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required| min:6|confirmed',
        ]);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        Auth::login($user);
        return redirect()->intended(route('home'))->with('success', 'Register successfull!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->intended(route('login'))->with('success', 'Logout successfull!');
    }
}
