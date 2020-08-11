<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginPage(){
        return view('login');
    }

    function registerPage(){
        return view('register');
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/home');
        }
    }

    function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'member';
        $user->save();

        return redirect('/login');
    }
}
