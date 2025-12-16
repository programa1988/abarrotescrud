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
    <title>Productos</title>
</head>
        <body>
<center>
<nav>
    <p class="e">Bienvenido, 
        <?php echo htmlspecialchars($_SESSION['nombre']); ?>
    </p>
    <a href="Clientes.php" value="Registro" class="a">Ir a clientes</a>
    <a href="Empleados.php" value="Registro" class="a">Ir a empleados</a>
    <a href="Menu.php" value="Productos" class="a">Ir a menu</a>
    <a href="agg_productos.php" value="Agregar productos" class="a">Agregar producto</a>
    <a href="Ventas.php" value="ventas" class="a">Ir a ventas</a>
    <a href="logout.php" class="a">Cerrar sesion</a>

</nav>
<h1>PRODUCTOS</h1>
    <div clas="table">
        <table id="tabla">
            <thead>
                <tr>
                    <th colspan="7" class="xd">Productos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Nombre del producto</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th class="mod">Modificar</th>
                    <th class="eli">Eliminar</th>
                </tr>
                <?php
                include("conexion.php");
                $query="SELECT* FROM productos";
                $resultado = $conexion -> query($query);
                while ($row = $resultado -> fetch_assoc()){
                ?> 
                <tr>
                    <td> <?php echo $row['Id_producto']; ?> </td>
                    <td> <?php echo $row['Nombre_producto']; ?> </td>
                    <td> <?php echo $row['Stock']; ?> </td>
                    <td> <?php echo $row['Precio']; ?> </td>
                    <td> <?php echo $row['Categoria']; ?> </td>
                    <td><a href="modificar_datos.php?Id_producto=<?php echo $row['Id_producto']; ?>" class="but">
                    Modificar</a>
                </td>
                
                <td> <a href="#" onclick="confirmar_eliminar(<?php echo $row['Id_producto']; ?>)" class="bot">Eliminar</a> </td>

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


