<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //  Procesar login
   
public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user && $user->password === $request->password) {

        auth()->login($user);

        if ($user->estatus !== 'A') {
            auth()->logout();
            return back()->withErrors([
                'email' => 'Usuario inactivo'
            ]);
        }

        if ($user->rol === 'A') {
            return redirect('/index');
        } else {
            return redirect('/index');
        }
    }

    return back()->withErrors([
        'email' => 'Credenciales incorrectas'
    ]);
}
//pa cerrar sesion
public function logout(Request $request)
{
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}

}