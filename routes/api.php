<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['auth:sanctum'])->post('karbaran/find',[App\Http\Controllers\karbaranController::class,'find']);
Route::middleware(['auth:sanctum'])->post('karbaran/destroy',[App\Http\Controllers\karbaranController::class,'destroy']);
Route::middleware(['auth:sanctum'])->get('karbaran/show',[App\Http\Controllers\karbaranController::class,'show']);
Route::middleware(['auth:sanctum'])->post('karbaran/add',[App\Http\Controllers\karbaranController::class,'users']);
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {return $request->user();});
