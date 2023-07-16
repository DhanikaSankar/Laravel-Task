<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function saveRegister(AuthRequest $request){
       $input = $request->validated();

       User::create([
        'name'      => $input['name'],
        'mobile'    => $input['mobile'],
        'place'     => $input['place'],
        'email'     => $input['email'],
        'password'  => $input['password'],
       ]);

        return view('auth.login');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/dashboard')->with('success','Login Successfully');
            // return view('user.dashboard');
        }
        return redirect()->route('login')->with('error','Invalid Email or Password.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

}
