@extends('layouts.plantilla')

@section('contenido')

	<h2>Administrar Existencias</h2>
	<div class="botones"><a href="{{route('articulos.cargar')}}" class="btn">Cargar Artículo</a> </div>
	<br>
	<div class="table">
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
					<td><form action="{{route('articulos.editar', $articulo)}}" method="GET">
							<button type="submit" class="btna"><img src="https://www.flaticon.es/svg/vstatic/svg/1160/1160515.svg?token=exp=1615414001~hmac=b9d18a6f4179bf1d9cb77d51894f1317" height="25px"></button></form></td>
					<td>
						<form action="{{route('articulos.eliminar', $articulo)}}" method="POST">
							@csrf
							@method('PUT')
							<button type="submit" class="btna" onclick="return ConfirmDelete()"><img src="https://www.flaticon.es/svg/vstatic/svg/1214/1214926.svg?token=exp=1615414948~hmac=ac9006c6f6b2a3f41eaaabcef5ad8357" height="25px"></button>
						</form>
					</td>
				</tr>
			@endif
			
		@endforeach

	</table>
	</div>
	@if (session('info'))
		<script>
			alert("{{session('info')}}");
		</script>
		
	@endif
	
@endsection
