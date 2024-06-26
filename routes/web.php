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

Route::get('/',[App\Http\Controllers\index::class,'index'] );

Auth::routes();
Route::get('/token-form',function (){return view('token-form');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/generate-token',[App\Http\Controllers\generatetoken::class,'index']);
