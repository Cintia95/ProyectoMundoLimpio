@extends('layouts.plantilla')

@section('contenido')
	<div id="secundario">
	<h2>Proyecto final del curso:</h2>
	<h2>"De 0 a 100: programación Web Fullstack"</h2>
	<h3>Creado por:</h3>
	<h3>Andino Villalba, Rocío Belén</h3>
	<h3>Barrios, Mariana Victoria</h3>
	<h3>Vázquez, Judianna Yeltsian</h3>
	<h3>Wdoviak, Cintia Belen</h3>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	
	<div id="terciario">
		<form action="{{route('contactanos')}}" method="POST">
			@csrf
			<h2>Contáctanos</h2>
			<label>
				Nombre: <br>
				<input type="text" name="nombre" required>
			</label> <br>
			<label>
				Correo: <br>
				<input type="email" name="correo" required>
			</label> <br>
			<label>
				Mensaje: <br>
				<textarea name="mensaje" rows="4" required></textarea>
			</label>
			<button type="submit">Enviar mensaje</button>
		</form>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	@if (session('info'))
		<script>
			alert("{{session('info')}}");
		</script>
		
	@endif
@endsection