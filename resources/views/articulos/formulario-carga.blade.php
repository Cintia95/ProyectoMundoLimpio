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
            <input type="text" name="nombre" placeholder="Nombre del artículo">
        </label>
        <br>
        <label>
            Descripción: <br>
            <textarea name="descripcion" rows="3" placeholder="Descripción del artículo, medida de la unidad"></textarea>
            {{-- <input type="text" name="descripcion" placeholder="Ej: por 1 litro, aroma, etc"> --}}
        </label>
        <br>
        <label>
            Cantidad: <br>
            <input type="number" name="cantidad" placeholder="Cantidad de este artículo">
        </label>
        <br>
        <label>
            Precio: <br>
            <input type="number" step="0.01" name="precio" placeholder="Precio por unidad">
        </label>
        <br>
        <label>
            Imagen: <br>
            <input type="file" name="imagen" accept=".jpg,.png">
        </label>
        <br><br>
        <button type="submit">Guardar datos</button>


    </form>
</body>
</html>