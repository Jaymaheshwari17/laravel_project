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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/about','about');
// Route::view('/todoexample','todoexamle'); 

Route::get('/allproduct',[App\Http\Controllers\TestingController::class, 'index']);
Route::get('/sendmail',[App\Http\Controllers\TestingController::class, 'sendmail']);
Route::get('/email-test',[App\Http\Controllers\TestingController::class, 'emailtest']);
Route::get('/todo/{id?}',[App\Http\Controllers\TodolistController::class, 'show']);
Route::post('/savetododata',[App\Http\Controllers\TodolistController::class, 'store']);
Route::get('/edittodo/{id}',[App\Http\Controllers\TodolistController::class, 'edit']);
Route::post('/updatetodo/{id}',[App\Http\Controllers\TodolistController::class, 'update']);

// Route::get('/deletetodo/{id}',[App\Http\Controllers\TodolistController::class, 'destroy']);


Route::get('/viewtodoapi',[App\Http\Controllers\Apicontoller::class, 'loadview']);
// Route::get('/deleteapicall',[App\Http\Controllers\Apicontoller::class, 'deleteapi']);

Route::resource('/todoapi',App\Http\Controllers\Apicontoller::class);

Route::view('/addnewprod','addnewprod');
// Route::get('email-test', function(){
    //     $details['email'] = 'sumitmaheshwari1705@gmail.com';
    //     dispatch(new App\Jobs\SendEmailJob($details));
    
    //     // $details = ['email' => 'recipient@example.com'];
    //     // SendEmail::dispatch($details);
    //     dd('done');
    //     });
    
    
    Route::prefix('admin')->group(function () {
        // Route::get('/dashboard', function () {
            //     dd("inside admin dashboard");
            //     // Matches The "/admin/users" URL
            // });
            Route::view('/dashboard','admin.dashboard');
            
            Route::view('/alluser','admin.alluser');
            // Route::view('/todo','admin.todo');
        Route::view('/collective','admin.collective');
        
        
    Route::view('/laravelmacro','admin.laravelmacro');


});



