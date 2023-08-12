<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\admin_dashboardController;



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
Route::get('/', [bookingController::class,'index']);

Route::get('/index', function () {
    return view('website.index');
});
Route::get('/about', function () {
    return view('website.about');
});


Route::get('/gallery', function () {
    return view('website.gallery');
});
Route::get('/icons', function () {
    return view('website.icons');
});
Route::get('/services', function () {
    return view('website.services');
});
Route::get('/single', function () {
    return view('website.single');
});
Route::post('/', [bookingController::class,'store']);

Route::get('/menu', [productController::class,'show2']);
Route::get('/productlist', [productController::class,'index1']);

// Route::get('/menu', [productController::class,'show2']);

// Route::get('/menu2', [productController::class,'inde']);


Route::get('/logout', [userController::class,'logout']);





Route::get('/contact',[contactController::class,'index']);
Route::post('/contact',[contactController::class,'store']);

Route::group(['middleware'=>['userafterlogin']],function(){

Route::get('/signin', [userController::class,'index']);

Route::post('/signin',[userController::class,'store']);
Route::get('/login', [userController::class,'login']);
Route::get('/loginauth', [userController::class,'loginauth']);
Route::post('/loginauth', [userController::class,'loginauth'])->middleware(["throttle:3,1"]);


});

Route::group(['middleware'=>['userbeforerlogin']],function(){



Route::get('/profile', [userController::class,'profile']);
Route::get('/editprofile/{id}', [userController::class,'editprofile']);
Route::post('/updateprofile/{id}',[userController::class,'update']);



});








  
/*---admin routes------*/
// Route::get('/admin_dashboard', function () {
//     return view('admin.index');
// });
Route::group(['middleware'=>['adminafterlogin']],function(){
Route::get('/admin_login',[adminController::class,'index']);
Route::post('/admin_login_auth',[adminController::class,'loginauth']);
});
Route::group(['middleware' =>['adminbeforerlogin']], function () {
            Route::get('/adminlogout',[adminController::class,'logout']);

            Route::get('/admin_dashboard',[admin_dashboardController::class,'index']);
            //Route::post('/admin_dashboard',[admin_dashboardController::class,'show']);





            Route::get('/mng_emp', function () {
                return view('admin.mng_emp');
            });
            Route::get('/mng_contact', function () {
                return view('admin.mng_contact');
            });
            Route::get('/typography', function () {
                return view('admin.typography');
            });
            // -----add  forms routes start-----//

        Route::get('/add_emp',[employeeController::class,'index']);
        Route::post('/add_emp',[employeeController::class,'store']);

        Route::get('/add_product',[productController::class,'index']);
        Route::post('/add_product',[productController::class,'store']);


        Route::get('/add_cat',[categorieController::class,'index']);
        Route::post('/add_cat',[categorieController::class,'store']);
            // -----add  forms routes end-----//

            //----update routes start-----//
        Route::get('/editproduct/{id}',[productController::class,'edit']);
        Route::post('/updateproduct/{id}',[productController::class,'update']);


        Route::get('/edit_cat/{id}',[categorieController::class,'edit']);
        Route::post('/update_cat/{id}',[categorieController::class,'update']);

        Route::get('/satus_user/{id}',[userController::class,'staus']);

        Route::get('/edit_emp/{id}',[employeeController::class,'edit']);
        Route::post('/update_emp/{id}',[employeeController::class,'update']);

            //----update routes end -----//


        // -----manage tabel routes start---//
        Route::get('/mng_user',[userController::class,'show']);
        Route::get('/view_user/{id}',[userController::class,'view']);

        Route::get('/mng_emp',[employeeController::class,'show']);
        Route::get('/mng_contact',[contactController::class,'show']);
        Route::get('/mng_user/{id}',[userController::class,'destroy']);
        Route::get('/mng_contact/{id}',[contactController::class,'destroy']);
        Route::get('/mng_emp/{id}',[employeeController::class,'destroy']);
        Route::get('/mng_booking',[bookingController::class,'show']);
        Route::get('/mng_booking/{id}',[bookingController::class,'destroy']);

        Route::get('/mng_product/{id}',[productController::class,'destroy']);
        Route::get('/mng_product',[productController::class,'show']);


        Route::get('/mng_cat/{id}',[categorieController::class,'destroy']);
        Route::get('/mng_cat',[categorieController::class,'show']);
        
   // -----manage tabel routes end---//
   // serching routes
   Route::post('serch_contact',[contactController::class,'serach']);


});
 


