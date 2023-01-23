<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PostController;

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
Route::middleware('guest')->group( function(){
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::get('/registrasi',[RegistrasiController::class,'index'])->name('regis');
    Route::post('/registrasi/validasi',[RegistrasiController::class,'newAccountValidasi'])->name('regis.validasi');
    Route::post('/login/validasi',[LoginController::class,'validasiAccount'])->name('validasi');
});

Route::middleware('auth')->group( function(){
    
});


Route::resource('/', PostController::class);
Route::resource('/search-friend',FriendController::class);