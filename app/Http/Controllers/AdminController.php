<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function usersPage(){
        $users = User::all();
        $auth = Auth::check();
        $current_user = Auth::user();
        if($current_user != null)
            $role = $current_user->role;
        else $role = null;
        return view('users', ['users'=>$users, 'auth' => $auth, 'role' => $role]);
    }

    function deleteUser(Request $request){
        User::find($request->id)->delete();
        return redirect()->back();
    }
}
