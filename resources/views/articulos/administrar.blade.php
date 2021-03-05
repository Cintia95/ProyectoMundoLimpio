@extends('layouts.plantilla')

@section('contenido')

	<h1>Administrar Existencias</h1>
	
	<a href="{{route('articulos.cargar')}}">Cargar Artículo</a> <br>
	
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
			@if ($articulo->condicion)
				<tr>	
					<td>{{$articulo->nombre}}</td>
					<td>{{$articulo->descripcion}}</td>
					<td>{{$articulo->cantidad}}</td>
					<td>{{$articulo->precio}}</td>
					<td>{{$articulo->imagen}}</td>
					<td><a href="{{route('articulos.editar', $articulo->id)}}">Editar</a><a href="">Borrar</a></td>
				</tr>
			@endif
			
		@endforeach

	</table>

	{{ $articulos->links() }}
@endsection
