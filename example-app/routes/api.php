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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
Route::get('/alluser',[App\Http\Controllers\TestingController::class, 'alluser']);
Route::get('/allproduct',[App\Http\Controllers\TestingController::class, 'index']);
Route::get('/deletetodo/{id}',[App\Http\Controllers\Apicontoller::class, 'destroy']);
Route::get('/edittodo/{id}',[App\Http\Controllers\Apicontoller::class, 'edit']);



// Route::get('/todo',[App\Http\Controllers\TestingController::class, 'todo']);





