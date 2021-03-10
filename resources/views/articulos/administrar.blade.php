@extends('layouts.plantilla')

@section('contenido')

	<h2>Administrar Existencias</h2>
	
	<a href="{{route('articulos.cargar')}}" class="btn">Cargar Artículo</a> <br><br>
	
	<table>
		<tr>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Imagen</th>
			<th colspan="2">Acciones</th>
		</tr>
		@foreach ($articulos as $articulo)
			@if ($articulo->condicion)
				<tr>	
					<td>{{$articulo->nombre}}</td>
					<td>{{$articulo->descripcion}}</td>
					<td>{{$articulo->cantidad}}</td>
					<td>${{$articulo->precio}}</td>
					<td><img src="{{$articulo->imagen}}" height="40px"></td>
					<td><a href="{{route('articulos.editar', $articulo->id)}}" class="btn">Editar</a></td>
					<td><a href="" class="btn">Borrar</a></td>
				</tr>
			@endif
			
		@endforeach

	</table>

	{{ $articulos->links() }}
@endsection
