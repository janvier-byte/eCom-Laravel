<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class UserController extends Controller
{
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
            {
                return "Username or Password is not matched";
            }
            else{
                $req->session()->put('user',$user);
                return redirect('/');
            }
    }
}
