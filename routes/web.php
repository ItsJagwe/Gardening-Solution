<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Auth;



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


//admin dashboard
Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{
    Route::get('/',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');

//category dashboard
    Route::resource('/service', \App\Http\Controllers\ServiceController::class);
    Route::get('servicedelete/{id}',[ServiceController::class,'destroy']);
});


//frontend
Route::get('/index',[\App\Http\Controllers\Frontend\IndexController::class,'index'])->name('index');
Route::get('/services',[\App\Http\Controllers\Frontend\ServicesController::class,'show'])->name('show');
Route::get('/user',[\App\Http\Controllers\Frontend\UserController::class,'display'])->name('display');
Route::get('/about',[\App\Http\Controllers\Frontend\AboutController::class,'read'])->name('read');
