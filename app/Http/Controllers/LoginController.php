<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function validasiAccount(Request $request)
    {
        
        $Result = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($Result))
        {
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect()->back()->with('fail','email or password is wrong');
    }
}
