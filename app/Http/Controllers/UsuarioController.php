<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
