<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    //
   public function login(){
    return view('login');
   }

   public function registration(){
    return view('registration');
   }

   public function registeruser(Request $request){
    $request ->validate([
        
        "name"=>"required",
        "email"=>"required|email",
        "password"=>"required|min:5",
        "address"=>"required",
        "phone"=>"required|numeric|digits:10",
    ]);
   
   }

}
