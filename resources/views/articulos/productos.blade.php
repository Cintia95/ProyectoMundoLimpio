@extends('layouts.plantilla')

@section('estilo')

@endsection

@section('contenido')


    <div id="productos">
        @foreach ($articulos as $articulo)
            @if ($articulo->condicion)
                <div class="tarjeta" width="100px" height="150px">
                    <img src="{{$articulo->imagen}}">
                    <h4>{{$articulo->nombre}}</h4>
                    <p>{{$articulo->descripcion}}</p>
                    <h3>${{$articulo->precio}}</h3>
                    <div id="añadir">
                        {{-- <form action="{{route('articulos.añadir', $articulo)}}" method="POST"> --}}
                            <input type="number" name="cant">
                            <button type="submit"><img src="{{ asset('iconos/199-shopping-cart-1.png') }}" height="25px"></button>
                        {{-- </form> --}}
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection