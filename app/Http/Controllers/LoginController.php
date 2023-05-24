<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function postLogin(Request $request)
    {
        if(Auth::attempt([
                'email' => $request->email, 
                'password' => $request->password
            ])){

            return redirect('/');
        }
        else{
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
