<!DOCTYPE html>
<html>
<head>
	<title>Cargar Artículo</title>
	<meta charset="utf-8">
    <style>
        *{box-sizing:border-box;}

form{
	width:300px;
	padding:16px;
	border-radius:10px;
	margin:auto;
	background-color:#0221aa;
    color: #ffffff;
    
}

form label{
	width:72px;
	font-weight:bold;
	
}

form input[type="text"],
form input[type="number"]{
	width:100%;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	
}


#cancel, #ok {
	padding:8px 16px;
    margin: 10px;
	border-radius:5px;
	color:#0000a7;
	background-color:#ffffff;
    font-weight: bold;
    flex-flow: row nowrap;
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
</head>
<body>
	
    <form action="{{route('articulos.store')}}" method="POST">
        <h2>Cargar Artículo</h2>
        @csrf
        
        <label>
            Nombre: <br>
            <input type="text" name="nombre" placeholder="Nombre del artículo" value="{{old('nombre')}}">
        </label>

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Descripción: <br>
            <textarea name="descripcion" rows="3" placeholder="Descripción del artículo, medida de la unidad" value="{{old('descripcion')}}"></textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Cantidad: <br>
            <input type="number" name="cantidad" placeholder="Cantidad de este artículo" value="{{old('cantidad')}}">
        </label>

        @error('cantidad')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Precio: $
            <input type="number" step="0.01" name="precio" placeholder="Precio por unidad" value="{{old('precio')}}">
        </label>

        @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Imagen: <br>
            <input type="text" name="imagen" placeholder="URL de la imagen" value="{{old('imagen')}}">
            {{-- <input type="file" name="" accept=".jpg,.png"> --}}
        </label>

        @error('imagen')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br><br>
        <input id="cancel" type="button" onclick="history.back()" name="Cancelar" value="Cancelar">
        <button id="ok" type="submit">Guardar datos</button>


    </form>
</body>
</html>