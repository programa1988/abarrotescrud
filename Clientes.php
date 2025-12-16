<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/tablas-mejorado.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Clientes</title>
</head>
        <body>
<center>
<nav>
    <p>Bienvenido, 
        <?php echo htmlspecialchars($_SESSION['nombre']); ?>
    </p>
    <a href="Menu.php" value="Registro" class="a">Ir a menu</a>
    <a href="Empleados.php" value="Registro" class="a">Ir a empleados</a>
    <a href="Productos.php" value="Productos" class="a">Ir a productos</a>
    <a href="agg_cliente.php" value="Agregar cliente" class="a">Agregar cliente</a>
    <a href="Ventas.php" value="ventas" class="a">Ir a ventas</a>
    <a href="logout.php" class="a">Cerrar sesion</a>
</nav>
<h1>Clientes</h1>
    <div clas="tablo">
        <table id="tabla">
            <thead>
                <tr>
                    <th colspan="7" class="xd">Clientes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- En esta parte iran solo los nombres que apareceran-->
                    <th>Id</th>
                    <th>Nombre del clientes</th>
                    <th>Apellido</th>
                    <th>RFC</th>
                    <th>Telefono</th>
                    <th class="mod">Modificar</th>
                    <th class="eli">Eliminar</th>
                </tr>
                <?php
                /*En esta se hace la conexion de la tabla de la base de datos*/
                include("conexion.php");
                $query="SELECT* FROM clientes";
                $resultado = $conexion -> query($query);
                while ($row = $resultado -> fetch_assoc()){
                ?>
                <tr>
                    <!-- En esta parte se ponen lo que los nombres de cada columna de la base de datos que se mostraran en la pantalla de la pagina -->
                    
                    <td> <?php echo $row['Id_cte']; ?> </td>
                    <td> <?php echo $row['Nombre']; ?> </td>
                    <td> <?php echo $row['Apellido']; ?> </td>
                    <td> <?php echo $row['RFC']; ?> </td>
                    <td> <?php echo $row['Telefono']; ?> </td>
                    <td><a href="modificar_clientes.php?Id_cte=<?php echo $row['Id_cte']; ?>" class="but">
                    Modificar</a>
                </td>
                
                <td> <a href="#" onclick="confirmar_elimina(<?php echo $row['Id_cte']; ?>)" class="bot">Eliminar</a> </td>

                </tr>
                <?php
                
                }
                ?>
            </tbody>
        </table>
    </div>
</center>
        </body>
</head>


