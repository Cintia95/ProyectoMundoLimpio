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
            <input type="text" name="nombre" value="{{$articulo->nombre}}" placeholder="Nombre del artículo">
        </label>
        <br>
        <label>
            Descripción: <br>
            <textarea name="descripcion" rows="3" placeholder="Descripción del artículo, medida de la unidad">{{$articulo->descripcion}}</textarea>
            {{-- <input type="text" name="descripcion" placeholder="Ej: por 1 litro, aroma, etc"> --}}
        </label>
        <br>
        <label>
            Cantidad: <br>
            <input type="number" name="cantidad" value="{{$articulo->cantidad}}" placeholder="Cantidad de este artículo">
        </label>
        <br>
        <label>
            Precio: <br>
            <input type="number" step="0.01" name="precio" value="{{$articulo->precio}}" placeholder="Precio por unidad">
        </label>
        <br>
        <label>
            Imagen: <br>
            <input type="file" name="imagen" accept=".jpg,.png" value="{{$articulo->imagen}}">
        </label>
        <br><br>
        <button type="submit">Actualizar datos</button>


    </form>
</body>
</html>