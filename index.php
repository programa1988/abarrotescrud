
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Iniciar Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="sesion">
    <form action="validacion.php" method="post">
            <h1><center>Iniciar Sesión</center></h1>
        <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario">
        <label for="contraseña">Contraseña:</label>
            <input type="password" id="contra" name="clave">
            <button class="but" >Iniciar sesion</button>
            <input type="button" value="Registro" onclick="location.href='Registro.php'" class="but">
    </form>
    </div>
</body>
</html>


