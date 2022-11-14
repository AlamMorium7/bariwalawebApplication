<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/login',[RegisterController::class,'login'])->name('login')->middleware('AlreadyLoggedIn');
Route::get('/registration',[RegisterController::class,'registration'])->name('registration')->middleware('AlreadyLoggedIn');
Route::post('/registeruser',[RegisterController::class,'registeruser'])->name('registeruser');
Route::post('/loginuser',[RegisterController::class,'loginUser'])->name('loginuser');
Route::get('/dashboard',[RegisterController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[RegisterController::class,'logout']);
