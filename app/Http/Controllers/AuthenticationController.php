<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{

    public function home() {

        if(Auth::check()) {
            return view('partials.home');
        }

        return redirect()->route('index');

    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        
        Auth::attempt($credentials);

        return redirect()->route('admin.home');

    }

    public function logout()
    {
        
        Auth::logout();

        return redirect()->route('admin.home');

    }


}
