<?php

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


Auth::routes(['register'=>true]);

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');

//admin dashboard
Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{
    Route::get('/',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');

});