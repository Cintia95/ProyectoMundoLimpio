<!DOCTYPE html>
<html>
<head>
	<title>Editar Artículo</title>
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
    margin: 10px 5px;
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
	
    <form action="{{route('articulos.actualizar', $articulo)}}" method="POST">
        <h2>Editar Artículo</h2> 
        @csrf

        @method('PUT')
        
        <label>
            Nombre: <br>
            <input type="text" name="nombre" value="{{old('nombre',$articulo->nombre)}}" placeholder="Nombre del artículo">
        </label>

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Descripción: <br>
            <textarea name="descripcion" rows="3" placeholder="Descripción del artículo, medida de la unidad">{{old('nombre',$articulo->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Cantidad: <br>
            <input type="number" name="cantidad" value="{{old('nombre',$articulo->cantidad)}}" placeholder="Cantidad de este artículo">
        </label>

        @error('cantidad')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Precio: <br>
            $<input type="number" step="0.01" name="precio" value="{{old('nombre',$articulo->precio)}}" placeholder="Precio por unidad">
        </label>

        @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <label>
            Imagen: <br>
            <input type="text" name="imagen" placeholder="URL de la imagen" value="{{old('imagen',$articulo->imagen)}}">
            {{-- <input type="file" name="imagen" accept=".jpg,.png"> --}}
        </label>

        @error('imagen')
            <br>
            <small>*{{$message}}</small>
            <br>    
        @enderror

        <br><br>
        <input id="cancel" type="button" onclick="history.back()" name="Cancelar" value="Cancelar">
        <button id="ok" type="submit" onclick="return ConfirmEdit()">Actualizar datos</button>


    </form>
</body>
<script>
     function ConfirmEdit(){
        var respuesta = confirm("¿Está seguro que desea guardar los cambios?");
        if (respuesta == true){
            return true;
        }
        else {
            return false;
        }
    }
</script>
</html>