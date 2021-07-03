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
Auth::routes(['register'=>false]);


Route::get('/','App\Http\Controllers\FrontendController@login')->name('login.form');
Route::post('/login-submit','App\Http\Controllers\FrontendController@loginsubmit')->name('login.submit');
Route::get('/logout','App\Http\Controllers\FrontendController@logout')->name('logout');



Route::group(['middleware'=>['user']], function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});