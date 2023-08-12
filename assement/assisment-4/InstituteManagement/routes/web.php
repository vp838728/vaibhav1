<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\bookcontroller;



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
Route::get('/index', function () {
    return view('admin.index');
});
Route::get('/about-student', function () {
    return view('admin.about-student');
});
Route::get('/add-courses', function () {
    return view('admin.add-courses');
});Route::get('/add-departments', function () {
    return view('admin.add-departments');
});

Route::get('/add-holiday', function () {
    return view('admin.add-holiday');
});

Route::get('/add-professor',[teachercontroller::class,'index']);
Route::post('/add-professor',[teachercontroller::class,'store']);
Route::get('/all-professors',[teachercontroller::class,'show']);
Route::get('/all-professors/{id}',[teachercontroller::class,'destroy']);
Route::get('/edit-professors/{id}',[teachercontroller::class,'edit']);
Route::post('/update-professors/{id}',[teachercontroller::class,'update']);

Route::get('/add-student',[studentcontroller::class,'index']);
Route::post('/add-student',[studentcontroller::class,'store']);
Route::get('/all-students',[studentcontroller::class,'show']);
 Route::get('/all-students/{id}',[studentcontroller::class,'destroy']);
Route::get('/edit-student/{id}',[studentcontroller::class,'edit']);
Route::post('/update-student/{id}',[studentcontroller::class,'update']);

Route::get('/add-book',[bookcontroller::class,'index']);
Route::post('/add-book',[bookcontroller::class,'store']);
Route::get('/all-book',[bookcontroller::class,'show']);
 Route::get('/all-book/{id}',[bookcontroller::class,'destroy']);
Route::get('/edit-book/{id}',[bookcontroller::class,'edit']);
Route::post('/update-book/{id}',[bookcontroller::class,'update']);




Route::get('/add-student', function () {
    return view('admin.add-student');
});
Route::get('/all-departments', function () {
    return view('admin.all-departments');
});
Route::get('/all-holiday', function () {
    return view('admin.all-holiday');
});






Route::get('/edit-courses', function () {
    return view('admin.edit-courses');
});
Route::get('/edit-departments', function () {
    return view('admin.edit-departments');
});

Route::get('/edit-professor', function () {
    return view('admin.edit-professor');
});

Route::get('/edit-student', function () {
    return view('admin.edit-student');
});

Route::get('/event-management', function () {
    return view('admin.event-management');
});




Route::get('/index-2', function () {
    return view('admin.index-2');
});
Route::get('/index-3', function () {
    return view('admin.index-3');
});
Route::get('/map-jqvmap', function () {
    return view('admin.map-jqvmap');
});
Route::get('/page-forgot-password', function () {
    return view('admin.page-forgot-password');
});
Route::get('/page-login', function () {
    return view('admin.page-login');
});
Route::get('/page-register', function () {
    return view('admin.page-register');
});
Route::get('/professor-profile', function () {
    return view('admin.professor-profile');
});
Route::get('/staff-profile', function () {
    return view('admin.staff-profile');
});
Route::get('/widget-basic', function () {
    return view('admin.widget-basic');
});







