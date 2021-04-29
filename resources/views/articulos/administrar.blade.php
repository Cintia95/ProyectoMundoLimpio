@extends('layouts.plantilla')

@section('contenido')
	<h2> </h2><br><br>
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
							<button type="submit" class="btna"><img src="{{ asset('iconos/066-edit-1.png') }}" height="25px"></button></form></td>
					<td>
						<form action="{{route('articulos.eliminar', $articulo)}}" method="POST">
							@csrf
							@method('PUT')
							<button type="submit" class="btna" onclick="return ConfirmDelete()"><img src="{{ asset('iconos/223-trash.png') }}" height="25px"></button>
						</form>
					</td>
				</tr>
			@endif
			
		@endforeach

	</table>
	</div>
	@if (session('info'))
		<script>
			function ConfirmDelete(){
        		var respuesta = confirm("¿Está seguro que desea eliminar este artículo?");
        		if (respuesta == true){
            		return true;
        		}
        		else {
            		return false;
        		}
    		}
		</script>
		
	@endif
	
@endsection
