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
        // return User::findOrFail($id);
        return User::where('name','LIKE',"%$id%")->first();
    }

    public function ubahPengguna($id)
    {
        $usr= User::findOrFail($id);
        return view('ubah-pengguna', compact('usr'));

    }

    public function simpanUbahPengguna(Request $request, $id)
    {
        if($request->passwordpengguna){
            User::where('id', $id)->update([
                'name' => $request->namapengguna,
                'email' => $request->emailpengguna,
                'password' => bcrypt($request->passwordpengguna),
               ]);
    
               return redirect ('data-pengguna');
        }else
        if (!$request->passwordpengguna){
            User::where('id', $id)->update([
                'name' => $request->namapengguna,
                'email' => $request->emailpengguna,
               ]);
    
               return redirect ('data-pengguna');
        }
        

    }

    public function hapusPengguna($id)
    {
        $usr = User::findOrFail($id);
        $usr->delete();
        return back();
    }
}
