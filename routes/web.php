<?php

use App\Http\Controllers\beritaController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\contentController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\SuperAdmin;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::get('/landing',[contentController::class,'landing'])->name('landing');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/berita',[beritaController::class]);
Route::middleware([SuperAdmin::class])->name('supervisor.')->prefix('supervisor')->group(function(){
   Route::get('/user',[userController::class,'index'])->name('user');
});
// routes/web.php

// Pastikan 'prefix' dan 'name' menggunakan string, bukan array

