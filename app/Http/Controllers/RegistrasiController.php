<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.index');
    }

    public function newAccountValidasi(Request $request)
    {
        $validasiAccount = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:5'
        ]);

        if($validasiAccount['password'] != $request->confir)
        {
            return redirect()->route('regis')->with('password','password not same with confirmasi');
        } 

        User::create([
            'name' => 'NamePlayer'.mt_rand(00000,99999),
            'email' => $validasiAccount['email'],
            'gender' => null,
            'password' => bcrypt($validasiAccount['password'])
        ]);

        return redirect()->route('login');
    }
}
