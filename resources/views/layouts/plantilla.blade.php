<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mundo Limpio</title>
    <link rel="icon" href="favicon.ico">
    
    <style>
body {
    margin: 0px;
    padding: 0px;
	background-image: url(fondo.jpg);
	background-size: cover;
}
/* h1 {
	font-size: 35px;
    color: #ffffff;  
	font-weight: 400; 
	text-align: center; 
	margin: 0 0; 
	overflow: hidden; 
	padding: 20px 0 10px 0; 
	} */
/* header{
	text-align: center; 
    border-radius: 15px 15px 15px 15px;  
	border: 2px solid #5878ca;
    background: #889ccf;
    position: sticky;
    top: 0;
} */
/* nav {
	font-weight: 400; 
	overflow: hidden; 
	padding: 10px 10px 20px 10px; 
} */
nav a {
    font-size: 18px;
    padding: 10px 15px;
}
a:link {text-decoration: none}
nav a:link {text-decoration: none; color: #ffffff }
nav a:hover {color: #ffffff; background: #4167c7; text-decoration: none }
nav a:visited {color: #ffffff;  text-decoration: none }

.btn {
    padding: 7px;
    border-radius: 5px;
    border: 1px solid #0221aa;
    background-color: #4167c7;
    color: #ffffff;
}
.botones {
    width: 25%;
    margin-right: 75%;
    display: flex;
    justify-content:flex-end;
}  

.btna {
    width: 35px;
    height: 35px;
    border-radius: 5px;
    border: 1px solid #171718;
    background-color: #7c7d80;
    color: #ffffff;
}  


h2 {
	text-align: center;
	color: #4167c7;
}

table {
  margin: 0 0 40px 0;
  width: 100%;
  max-width: 800px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.2);
  display: table;
  }
.table{
    display: flex;
    justify-content:center;
}
tr {
  display: table-row;
  background: #f6f6f6;
  }
td {
	text-align: center;
}

.active {
    font-weight: bold;
    background-color: #0221aa
}
/* #principal {
    width: 30%;
    float: left;
    padding: 0.5em;
    box-sizing: border-box;
} */
#secundario {
    width: 50%;
    margin: 5%;
    float: left;
    padding: 0.5em;
    background-color: #b7cafa;
    box-sizing: border-box;
}
#secundario h3 {
    color: #000e4b;
    text-align: center;
}
#terciario {
    background-color: #000e4b;
    margin: 5%;
    width: 30%;
    float: left;
    padding: 0.5em;
    box-sizing: border-box;
}
label {
    margin-left: 15%;
    margin-right: 15%;
    width: 70%;
    color: #ffffff;
}
input, textarea {
    margin: 5px;
    margin-left: 15%;
    margin-right: 15%;
    width: 70%;
}
button {
    margin-left: 30%;
    padding: 3px;
    background-color: #bad5fc;
    color: #000e4b;
    border: 0px;
    font-weight: bold;
}
#productos {
    display: flex;
    flex-flow: row wrap;
    margin: 100px;
}
.tarjeta {
    display: flex;
    width: 200px;
    height: 300px;
    justify-content: center;
    flex-direction: column;
    border: #0a33e9 2px solid;
    margin: 20px;
    padding: 5px;
} 
.tarjeta img {
    max-width: 50%;
    max-height: 50%;
}
.tarjeta img, .tarjeta h3, .tarjeta h4, .tarjeta p, .tarjeta #añadir {
    display:flex;
    justify-content: center;
    margin: 0px;
    padding: 0px;
    text-align: center;
    max-width:90%;
}
#añadir {
    display: block;
}
#añadir input{
    max-width: 30px;
    height: 30px;
    display: inline;
}
#añadir button{
   display: inline;
}
#btop, #bbottom {
    padding: 20px;
    text-align: center;
}
#btop a{
    margin: 0 10px;
    padding: 5px;
    background-color: #4167c7;

}
#btop a:link, #btop a:hover, #btop a:visited {text-decoration: none; color: #ffffff }

</style>
<link rel="icon" type="icon/png" href="https://i.pinimg.com/736x/29/f9/25/29f925004e1ec7b3f3dcefb540d7d6bf.jpg">
<link rel="stylesheet" type="text/css" href="{{ asset('Mundo.css') }}">
   @yield('estilo')
</head>

<body>
	<header class="header">
        <div class="container logo-nav-container">
			<a href="#"class="logo">Mundo Limpio</a>
			<nav class="navegation">
			<ul>
				<li><a href="{{route('inicio')}}" class="{{request()->routeIs('inicio') ? 'active' : ''}}">Inicio</li></a>
				{{-- <li><a href="#">Acerca</li></a> --}}
				<li><a href="{{route('articulos.administrar')}}" class="{{request()->routeIs('articulos.administrar') ? 'active' : ''}}">Productos</a>
					{{-- <ul>
						<li><a href="#">Promos</li></a>
						<li><a href="#">Hogar</li></a>
						<li><a href="#">Empresas</li></a>
					</ul> --}}
				</li>
				<li><a href="{{route('contactanos')}}" class="{{request()->routeIs('contactanos') ? 'active' : ''}}">Contactanos</li></a>
			</ul>
			</nav>
		</div>
        {{-- <h1>Artículos de limpieza Mundo Limpio</h1>
	    <nav>
			<a href="{{route('inicio')}}" class="{{request()->routeIs('inicio') ? 'active' : ''}}">Inicio</a>
			<a href="{{route('articulos.productos')}}" class="{{request()->routeIs('articulos.productos') ? 'active' : ''}}">Productos</a>
            <a href="/carrito">Carrito</a>
			<a href="{{route('articulos.administrar')}}" class="{{request()->routeIs('articulos.administrar') ? 'active' : ''}}">Administrar</a>
			<a href="{{route('usuario.login')}}" class="{{request()->routeIs('usuario.login') ? 'active' : ''}}">Iniciar sesión</a>	
        </nav> --}}
    </header>

    @yield('contenido')
    
    <footer>

    </footer>


</body>
<script type="text/javascript">
    function ConfirmDelete(){
        var respuesta = confirm("¿Está seguro que desea eliminar este artículo?");
        if (respuesta == true){
            return true;
        }
        else {
            return false;
        }
    }
    function ComprobarClave(){
        var p1 = document.getElementById('p1');
        var p2 = document.getElementById('p2');

        if (p1 == p2){
            return true;
        }else {
            return false;
        }
   
</script>
</html>