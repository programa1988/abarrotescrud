
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agregar Producto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formularios-mejorado.css">
</head>
<body>
    <h1><center>Agregar producto</center></h1>
    <div class="xd">
    <form action="Registrar_producto.php" method="post">

        <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre_producto">

        <label for="usuario">Precio:</label>
            <input type="text" id="precio" name="precio">

        <label for="usuario">Stock:</label>
            <input type="text" id="stock" name="Stock">

        <label for="usuario">Categoria:</label>
            <input type="text" id="categoria" name="Categoria">

        <button type="submit" class="but">Registrar</button>


    
    </form>
    </div>
</body>
</html>


