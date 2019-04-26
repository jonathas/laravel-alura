<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function form()
    {
        return view('login/form_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return 'logado';
        }
        return 'não existe';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
