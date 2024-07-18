<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function(){
    return view('contact-us');
});

Route::get('/services', function(){
    return view('services');
});
Route::get('users', [UserController::class, 'index']);
Route::get('users/create', [UserController::class, 'create']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}/edit', [UserController::class, 'edit']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::resource('users', UserController::class);
