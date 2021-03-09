<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticulo;

class ArticuloController extends Controller
{
    public function administrar(){
        
        $articulos= Articulo::orderBy('id', 'desc')->paginate();

        return view('articulos.administrar', compact('articulos'));
    }

    public function cargar(){
        return view('articulos.formulario-carga');
    }

    public function store(StoreArticulo $request){
              
        $articulo = Articulo::create($request->all());

        return redirect()->route('articulos.administrar');
    }
  
    public function editar(Articulo $articulo){
       
        return view('articulos.formulario-modificacion', compact('articulo'));
    }

    public function actualizar(StoreArticulo $request, Articulo $articulo){
        
        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->precio = $request->precio;
        $articulo->imagen = $request->imagen;
        $articulo->condicion = 1;

        $articulo-> save();

        return redirect()->route('articulos.administrar');
    }
}
