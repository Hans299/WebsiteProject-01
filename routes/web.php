<?php

use App\Http\Controllers\beritaController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\contentController;
use App\Http\Controllers\testingController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\SuperAdmin;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::get('/landing',[contentController::class,'landing'])->name('landing');
Route::get('/testing',[testingController::class,'testing'])->name('testing');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route resource dipecah 1 per 1
Route::get('/berita',[beritaController::class,'index'])->name('berita');
Route::get('/berita/create',[beritaController::class,'create'])->name('berita.create');
Route::post('berita',[beritaController::class,'store'])->name('berita.store');
Route::get('/berita/{id}/edit',[beritaController::class,'edit'])->name('berita.edit');
Route::put('/berita/{id}',[beritaController::class,'update'])->name('berita.update');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::middleware([SuperAdmin::class])->name('supervisor.')->prefix('supervisor')->group(function(){
   Route::get('/user',[userController::class,'index'])->name('user');
   Route::get('/user/create',[userController::class,'create'])->name('user.create');
});
route::get('/contoh',function(){
    return view('content_create.blade');
});
// routes/web.php

// Pastikan 'prefix' dan 'name' menggunakan string, bukan array

