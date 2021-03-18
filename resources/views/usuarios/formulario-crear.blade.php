@extends('layouts.plantilla')

@section('estilo')
<style>
    *{box-sizing:border-box;}

form{
width:300px;
padding:16px;
border-radius:10px;
margin:auto;
margin-top: 30px;
background-color:#0221aa;
color: #ffffff;

}

form label{
width:72px;
font-weight:bold;

}

#cancel, #ok {
padding:8px;
margin: 10px;
border-radius:5px;
color:#0000a7;
background-color:#ffffff;
font-weight: bold;
flex-flow: row nowrap;
max-width: 40%;
}
#cancel {
color: #ff0000;
}
#cancel:hover, #ok:hover{
cursor:pointer;
}

textarea{
width:100%;
height:100px;
border:1px solid #f6f6f6;
border-radius:3px;
background-color:#f6f6f6;			
margin:8px 0;
/*resize: vertical | horizontal | none | both*/
resize:none;
display:block;
}
</style>
@endsection

@section('contenido')

<form action="{{route('usuario.store')}}" method="POST" name="f1">
    @csrf

    <div display="inline"id="btop">
        <a href="{{route('usuario.crear')}}">Registrarse</a>
        <a href="{{route('usuario.login')}}">Iniciar sesión</a>
    </div>
    
    <label>
        Nombre y Apellido: <br>
        <input type="text" name="name" placeholder="Nombre" value="{{old('name')}}" required>
    </label><br>

    <label>
        Correo: <br>
        <input type="email" name="email" placeholder="Correo" value="{{old('email')}}" required>
    </label><br>

    <label>
        Contraseña: <br>
        <input type="password" name="password" id="p1" placeholder="Contraseña" required>
    </label><br>

    <label>
        Repita la contraseña: <br>
        <input type="password" name="password2" id="p2" placeholder="Repita la contraseña" required>
    </label><br>

    
    <br><br>
    <div id="bbottom" display="inline">
        <input id="cancel" type="button" onclick="history.back()" name="Cancelar" value="Cancelar">
        <button id="ok" type="submit" onclick="return ComprobarClave()">Registrarse</button>
    </div>


</form>
	
@endsection