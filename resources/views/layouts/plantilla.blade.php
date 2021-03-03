<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mundo Limpio Artículos de limpieza</title>
    <link rel="icon" href="favicon.ico">
    <style>
body {
	background-image: url(fondo.jpg);
	background-size: cover
}
h1 {
	font-size: 35px;
    color: #ffffff;  
	font-weight: 400; 
	text-align: center; 
	margin: 0 0; 
	overflow: hidden; 
	padding: 20px 0 10px 0; 
	}
header{
	text-align: center; 
    border-radius: 15px 15px 15px 15px;  
	border: 2px solid #5878ca;
    background: #889ccf;
}
nav {
	font-weight: 400; 
	overflow: hidden; 
	padding: 10px 10px 20px 10px; 
}
a {
    font-size: 18px;
    padding: 10px 15px;
}
a:link {text-decoration: none; color: #ffffff }
a:hover {color: #ffffff; background: #4167c7; text-decoration: none }
a:visited {color: #ffffff;  text-decoration: none }
    </style>
</head>

<body>
	<header>
        <h1>Artículos de limpieza Mundo Limpio</h1>
	    <nav>
			<a href="/">Inicio</a>
			<a href="/comprar">Productos</a>
            <a href="/carrito">Carrito</a>
			<a href="{{route('articulos.administrar')}}">Administrar</a>
			<a href="/login">Iniciar sesión</a>	
        </nav>
    </header>

    @yield('contenido')
    
    <footer>

    </footer>


</body>
</html>