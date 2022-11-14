<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Hash;


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
        "email"=>"required|email|unique:users",
        "password"=>"required|min:5|max:12",
        "address"=>"required",
        "phone"=>"required|numeric|digits:11",
    ]);
   $user=new UserModel();
   $user->name=$request->name;
   $user->email=$request->email;
   $user->password=Hash::make($request->password);
   $user->address=$request->address;
   $user->phone=$request->phone;
   $res = $user->save();
   if($res){
    return back()->with('success','You have registered successfully');
   }
   else{
        return back()->with('fail','Try again');
   }


   }

}
