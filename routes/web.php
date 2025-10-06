<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('/user',userController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
