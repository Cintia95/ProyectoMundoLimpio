@extends('layouts.plantilla')

@section('contenido')
<main class="main">
	<div class="container">
		<h1>Bienvenidos</h1>
		<p> 
			Reducir el riesgo de exposición al COVID-19 al limpiar y desinfectar es una necesidad fundamental del hogar y de las empresas.
			Para desinfectar eficientemente un espacio y volverlo un lugar seguro, no hay un solo producto. Cada uno de estos, funciona mejor de acuerdo al lugar, el tipo de superficie, el nivel de exposición, entre otros.
			 Esto es lo que hace que Mundo Limpio brinde un servicio profesional diferencial que da tranquilidad a los usuarios de todos los espacios, utilizando los productos adecuados para el lugar correcto, aplicándolos en la dilución y mediante el procedimiento indicados.

		</p>
		<img src="{{ asset('Img.jpg') }}" alt="">
	</div>


	</main>
	<footer class="footer">
		<div class="container"></div>
		<p>Derechos reservados</p>

	</footer>
</body>
@endsection