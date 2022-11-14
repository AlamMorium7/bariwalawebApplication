<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Hash;
use Session;


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
        "email"=>"required|email|unique:user_models",
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

   //
   public function loginUser(Request $request){
    $request ->validate([             
        "email"=>"required|email",
        "password"=>"required|min:5|max:12",
    ]);
    //Eloquent query
    $user=UserModel::where('email','=',$request->email)->first();
    if($user){
        if(Hash::check($request->password,$user->password)){
            $request->session()->put('loginId',$user->id);
            return redirect('dashboard');
        }
        else{
            return back()->with('fail','Password does not matched.');
        }
    }
    else{
        return back()->with('fail','This email is not registered.');
    }
   }

   public function dashboard(){
    $data = array();
    if(Session::has('loginId')){
        $data = UserModel::where('id','=',Session::get('loginId'))->first();
    }
    return view('dashboard',compact('data'));
   }


   public function logout(){
    if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('login');
    }
    
   }

}
