<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(auth()->user()->level == "admin"){
            $usr = User::all();
            return view('data-pengguna', compact('usr'));
        }
        return view('notFound');
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function hapusPengguna($id)
    {
        $usr = User::findOrFail($id);
        $usr->delete();
        return back();
    }
}
