<!DOCTYPE html>
<html>
<head>
	<title>Editar Artículo</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Editar Artículo</h2>
    <form action="{{route('articulos.actualizar', $articulo)}}" method="POST">
        
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
        <button type="submit">Actualizar datos</button>


    </form>
</body>
</html>