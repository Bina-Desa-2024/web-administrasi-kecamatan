<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.masuk');
    }

    public function masuk(Request $request)
    {
        
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('Dashboard');
        }

        return back()->with('LoginError', 'Login gagal!');

        // $request->validate([
        //     'email'     => ['required', 'max:64', 'required_with:password', new LoginRule($request->password)],
        //     'password'  => ['required']
        // ]);

        // return redirect()->route('dashboard');
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home.index');
    }
}
