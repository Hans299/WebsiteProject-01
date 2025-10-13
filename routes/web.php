<?php

use App\Http\Controllers\CmsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\SuperAdmin;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::middleware([SuperAdmin::class])->name('supervisor. ')->prefix('supervisor')->group(function(){
   
// });
//  Route::get('/Dashboard',[CmsController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
