<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;




Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/registrasi',[LoginController::class, 'register']);

Route::post('/simpan-registrasi',[LoginController::class, 'simpanRegistrasi'])->name('simpan-registrasi');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/',[HomeController::class, 'index']);

});