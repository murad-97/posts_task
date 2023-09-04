<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
// return view("index");
// // print_r($user->user_info);
// });
Route::get('/',function(){
    return view("index");
});
Route::post('/regester',RegisterController::class . '@get');
Route::get('/login',function(){
    return view("login");
});
Route::get('/home',function(){
    return view("home");
});

Route::post('/login',UserController::class . '@index');
Route::get('/logout',UserController::class . '@destroy');


