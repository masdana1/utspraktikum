<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
   public function login(){
    return view("login");
   } 

   public function register(){
    return view("register");
    }

    public function registeruser(Request $request){
      //  dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=>Str::random(60),
        ]);

        }
}