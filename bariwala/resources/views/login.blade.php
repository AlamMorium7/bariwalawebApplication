@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" ></div>
            <h4 style="text-align:center">Login</h4>
            <form action="{{route("loginuser")}}" method="post">
                @if(Session::has('success'))
                <div class="alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert-danger">{{Session::get('fail')}}</div>
                @endif
                
                @csrf
                <div class="form-group">                                              
        </div>

        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email"  id="email"  placeholder="Enter email" value="{{old('email')}}">   
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror                     
           
        </div>
        <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" name="password"  id="password"  placeholder="Enter password" value="{{old('password')}}">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror                   

        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-2">Sign In</button>
        </div>

                </div>
               <br>
               <a href="registration">New User? Register Here</a> 
            </form>
        </div>

    </div>
</body>
</html>
@endsection