
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agregar Cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formularios-mejorado.css">
</head>
<body>
    <h1><center>Agregar cliente</center></h1>
    <div class="xd">
    <form action="Registrar_clientes.php" method="post">

        <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">

        <label for="usuario">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido">

        <label for="usuario">RFC:</label>
            <input type="text" id="RFC" name="RFC">

        <label for="usuario">Telefono:</label>
            <input type="text" id="Telefono" name="Telefono">

            <button type="submit" class="but">Registrar</button>


    
    </form>
    </div>
</body>
</html>


