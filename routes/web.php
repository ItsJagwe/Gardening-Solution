<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 



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


Auth::routes(['register'=>true]);

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');


//authentication
Route::get('user/auth',[\App\Http\Controllers\Frontend\UserController::class,'userAuth'])->name('user.auth');

//register
Route::post('user/register',[App\Http\Controllers\Frontend\IndexController::class,'registerSubmit'])->name('register.submit');

//admin dashboard
Route::group(['prefix'=>'admin','middleware'=>'auth','admin'],function()
{
    Route::get('/',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');
    
//category dashboard
    Route::resource('/service', \App\Http\Controllers\ServiceController::class);
    Route::get('servicedelete/{id}',[ServiceController::class,'destroy']);
});

//customer 
Route::group(['prefix'=>'customer','middleware'=>'auth','customer'],function()
{
    Route::get('/',[\App\Http\Controllers\AdminController::class,'customer'])->name('customer');
    Route::post('/update/{id}',[IndexController::class,'update'])->name('update');
    Route::post('/cpass/{id}',[IndexController::class,'cpass'])->name('cpass');

});


//User frontend
Route::get('/index',[\App\Http\Controllers\Frontend\IndexController::class,'index'])->name('index');
Route::get('/user',[\App\Http\Controllers\Frontend\IndexController::class,'user'])->name('user');
Route::get('/services',[\App\Http\Controllers\Frontend\ServicesController::class,'show'])->name('show');
Route::get('/about',[\App\Http\Controllers\Frontend\AboutController::class,'read'])->name('read');
Route::get('/chpass',[\App\Http\Controllers\Frontend\IndexController::class,'chpass'])->name('chpass');




