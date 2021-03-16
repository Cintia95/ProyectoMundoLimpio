@extends('layouts.plantilla')

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
                            <button type="submit"><img src="https://www.flaticon.es/svg/vstatic/svg/3523/3523887.svg?token=exp=1615914261~hmac=7fea2b3d492c4557af65434258d5620f" height="25px"></button>
                        {{-- </form> --}}
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection