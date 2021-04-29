<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function crear(){
        return view('usuarios.formulario-crear');
    }

    public function store(Request $request){
              
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->permisos = 0;

        $user->save();

        return redirect()->route('usuario.login');
    }

    public function login(){
        return view('usuarios.login');
    }

    public function log(Request $request){
        $credentials = request()->only('email', 'password');

        If (Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect()->route('inicio');
        }
        return redirect()->route('usuario.login');
    }

    public function contactanos(){
        return view('contactanos');
    }
}
