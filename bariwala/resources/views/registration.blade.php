@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" ></div>
            <h4 style="text-align:center">Registration</h4>
            <form action="{{route("registeruser")}}" method="post">
                @csrf
                <div class="form-group">
                    
                  
        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter name">
            
               
            
        </div>
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email"  placeholder="Enter email">
           
               
           
        </div>
        <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"  placeholder="Enter password">
           
               
           
        </div>
        <div class="form-group">
            <label for="address">Address</label><br>
            <input type="text" name="address" id="address"  placeholder="Enter address">
           
           
            
        </div>
        <div class="form-group">
            <label for="phone">Contact</label><br>
            <input type="number" name="phone" id="phone"  placeholder="Enter contact no">
            
           
           
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-2">Sign up</button>
        </div>

                </div>
                <br>
                <a href="login">Already registered? login Here</a>
            </form>
        </div>

    </div>
</body>
</html>
@endsection