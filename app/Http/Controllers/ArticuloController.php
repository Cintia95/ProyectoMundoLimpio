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

    public function store(Request $request){
        $articulo = new Articulo();

        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->precio = $request->precio;
        $articulo->imagen = $request->imagen;
        $articulo->condicion = 1;

        $articulo-> save();
        return redirect()->route('articulos.administrar');
    }

    public function modificar($id){

        $articulo= Articulo::find($id);

        return view('articulos.formulario-modificacion', compact('articulo'));
    }
}
