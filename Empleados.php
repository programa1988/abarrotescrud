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
    <title>Empleados</title>
</head>
        <body>
<center>
<nav>
    <p>Bienvenido, 
        <?php echo htmlspecialchars($_SESSION['nombre']); ?>
    </p>
    <a href="Clientes.php" value="Registro" class="a">Ir a clientes</a>
    <a href="Menu.php" value="Registro" class="a">Ir a menu</a>
    <a href="Productos.php" value="Productos" class="a">Ir a productos</a>
    <a href="agg_empleados.php" value="Agregar Empleados" class="a">Agregar empleado</a>
    <a href="Ventas.php" value="ventas" class="a">Ir a ventas</a>
    <a href="logout.php" class="a">Cerrar sesion</a>
</nav>
<h1>Empleados</h1>
    <div clas="table">
        <table id="tabla">
            <thead>
                <tr>
                    <th colspan="9" class="xd">Empleados</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <th>Id</th>
                    <th>Nombre de empleado</th>
                    <th>Apellido</th>
                    <th>RFC</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th class="mod">Modificar</th>
                    <th class="eli">Eliminar</th>
                    <th class="mid">Imprimir</th>

                </tr>
                <?php
                include("conexion.php");
                $query="SELECT* FROM empleados";
                $resultado = $conexion -> query($query);
                while ($row = $resultado -> fetch_assoc()){
                ?>
                <tr>
                    <td> <?php echo $row['Id_empleado']; ?> </td>
                    <td> <?php echo $row['Nombre']; ?> </td>
                    <td> <?php echo $row['Apellido']; ?> </td>
                    <td> <?php echo $row['RFC']; ?> </td>
                    <td> <?php echo $row['Telefono']; ?> </td>
                    <td> <?php echo $row['Direccion']; ?> </td>
                    <td><a href="modificar_empleados.php?Id_empleado=<?php echo $row['Id_empleado']; ?>" class="but">Modificar</a></td>
                
                <td> <a href="#" onclick="confirmar_elimin(<?php echo $row['Id_empleado']; ?>)" class="bot">Eliminar</a> </td>

                <td><a href="Constancia.php?Id_empleado=<?php echo $row['Id_empleado']; ?>"> Constancia </a></td>

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


