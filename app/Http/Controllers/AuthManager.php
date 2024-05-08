<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{

    public function index(){
        return view("dashboard");
    }
    
    public function login(){
        if(Auth::check()){
            return redirect(route("dashboard"));   
        }
        return view('auth.login');
       
    }

    public function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){

            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
            return redirect(route("login"))->with("error", "Login Failed");
    }

    public function register(){
        if(Auth::check()){
            return redirect(route("dashboard"));
        }
        return view('auth.register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->save()){
            return redirect(route('login'))
                ->with("success","User created successfull");
        }
        return redirect(route('register'))->with("error", "Failed to create user");
    }

    public function logout (){
        Session::flush();
        Auth::logout();

        return redirect()->to(route('login'));
    }
}

