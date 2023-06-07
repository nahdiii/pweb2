<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;




Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/registrasi',[LoginController::class, 'register']);

Route::post('/simpan-registrasi',[LoginController::class, 'simpanRegistrasi'])->name('simpan-registrasi');
Route::post('/post-login',[LoginController::class, 'postLogin'])->name('post-login');
Route::get('/logout',[LoginController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/',[HomeController::class, 'index']);
    // Route::get('/not-found',[HomeController::class, 'notFound']);
    Route::get('/data-pengguna',[UserController::class, 'index'])->name('data-pengguna');
    Route::get('/hapus-pengguna/{id}',[UserController::class, 'hapusPengguna']);
    Route::get('/show-pengguna/{id}',[UserController::class, 'show']);
    Route::get('/ubah-pengguna/{id}',[UserController::class, 'ubahPengguna']);
    Route::post('/simpan-ubah-pengguna/{id}',[UserController::class, 'simpanUbahPengguna']);

});
