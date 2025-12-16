<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formularios-mejorado.css">
</head>
<body>
    <h1 class="title">Registro</h1>
    <div class="xd">
        <form action="Registrar.php" method="post" class="form-container">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
            </div>

            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario">
            </div>

            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="clave" placeholder="Contraseña">
            </div>

            <div class="form-group centrar">
                <button type="submit" class="but">Registrarse</button>
            </div>
        </form>
    </div>
</body>
</html>
