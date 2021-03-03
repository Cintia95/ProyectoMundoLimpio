<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function administrar(){
        
        $articulos= Articulo::paginate();

        return view('articulos.administrar', compact('articulos'));
    }

    public function cargar(){
        return view('articulos.formulario-carga');
     }

    public function modificar($id){
        return view('articulos.formulario-modificacion', compact('id'));
    }
}
