<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\Users;

class UserController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
    }

    public function create(Request $request) {
        $datosVerificados = $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:8',
            'birthday' => 'required'
        ]);

    if(User::create($datosVerificados)) {
        return redirect('/');
    }
    
    return back()->wihtErrors([
        'email'=> 'Correo incorrecto',
        'password' => 'No es tu contraseña'
    ]);

    }
}
