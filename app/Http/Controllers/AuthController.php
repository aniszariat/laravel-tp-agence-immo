<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function doLogin(LoginRequest $request)
    {
        $cerdentials = $request->validated();
        if (Auth::attempt($cerdentials)) {
            //* regenrate new session Id for security issues
            $request->session()->regenerate();
            return redirect()->intended('admin.prperty.index');
        }
        return back()->withErrors([
            'email' => 'Identifiant incorrect'
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('status', 'utilisateur déconnecté!');
    }
}
