<!DOCTYPE html>
<html>
<head>
	<title>Cargar Artículo</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cargar Artículo</h2>
    <form action="{{route('articulos.store')}}" method="POST">
        
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
            Precio: <br>
            $<input type="number" step="0.01" name="precio" placeholder="Precio por unidad" value="{{old('precio')}}">
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
        <button type="submit">Guardar datos</button>


    </form>
</body>
</html>