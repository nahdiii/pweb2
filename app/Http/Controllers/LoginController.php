<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('registrasi');
    }

    public function simpanRegistrasi(Request $request)
    {
        
       User::create([
        'name' => $request->namapengguna,
        'email' => $request->emailpengguna,
        'level' => 'mahasiswa',
        'password' => bcrypt($request->passwordpengguna),
       ]);

       return redirect ('login');
    }
}
