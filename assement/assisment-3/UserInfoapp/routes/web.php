<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;

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
Route::post('/user',[user_controller::class,'store']);

// Route::get('/show',[user_controller::class,'show']);
// Route::post('/user',[user_controller::class,'store']);
// Route::post('/user',[user_controller::class,'store']);

