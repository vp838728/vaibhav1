<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galleriecontroller;

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

Route::get('/image_upload',[galleriecontroller::class,'index']);
Route::post('/image_upload',[galleriecontroller::class,'store']);
Route::get('/gallery',[galleriecontroller::class,'show']);





Route::get('/', function () {
    return view('image_upload');
});
