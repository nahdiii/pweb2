<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/pengguna/tambah/tampil',[HomeController::class, 'index']);


