@extends('layouts.plantilla')

@section('contenido')

	<h1>Administrar Existencias</h1>
	
	<a href="{{route('articulos.cargar')}}">Cargar Artículo</a>
	
	<table>
		<tr>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Imagen</th>
			<th>Acciones</th>
		</tr>
		@foreach ($articulos as $articulo)
			@if ({{$articulo->condicion}})
				<td>{{$articulo->nombre}}</td>
				<td>{{$articulo->descripcion}}</td>
				<td>{{$articulo->cantidad}}</td>
				<td>{{$articulo->precio}}</td>
				<td>{{$articulo->imagen}}</td>
				{{-- botones modificar y borrar --}}
				<td></td>
			@endif<tr>
			</tr>
		@endforeach

	</table>

	{{ $articulos->links() }}
@endsection
