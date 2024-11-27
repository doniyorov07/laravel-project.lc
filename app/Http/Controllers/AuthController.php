<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function logout(){
        Auth::logout();
        return to_route('welcome');
    }

    function registerUser(RegisterRequest $request){
        $validated = $request->validated();
        $user = User::create($validated);
        Auth::login($user);
        return to_route('admin.dashboard');
    }

    function loginUser(LoginRequest $request){
        $validated = $request->validated();
       
        if(Auth::attempt($validated,request()->is_remember)){
            return to_route('admin.dashboard');
        }

        return to_route('login')->with('error',"The provided credentials do not match our recourds.");
    }
}
