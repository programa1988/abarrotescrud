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
    <title>Ventas</title>
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
    <a href="Productos.php" value="Agregar productos" class="a">Ir a productos</a>
    <a href="logout.php" class="a">Cerrar sesion</a>
    <a href="agg_ventas.php" value="agregar_ventas" class="a">Ir a agregar venta</a>
</nav>
<h1>PRODUCTOS</h1>
    <div clas="table">
        <table id="tabla">
            <thead>
                <tr>
                    <th colspan="10" class="xd">Productos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Nombre del cliente</th>
                    <th>RFC</th>
                    <th>Telefono</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th class="but">Generar</th>
                    <th class="eli">Eliminar</th>
                </tr>
                <?php
                include("conexion.php");

                $query="SELECT productos.*, clientes.*, ventas.* from ventas
                Inner join clientes on ventas.Id_cte = clientes.Id_cte
                Inner join productos on ventas.Id_producto = productos.Id_producto";
                
                $resultado = $conexion -> query($query);
                while ($row = $resultado -> fetch_assoc()){
                ?>
                <tr>
                    <td> <?php echo $row['Nombre']; ?> </td> 
                    <td> <?php echo $row['RFC']; ?> </td>
                    <td> <?php echo $row['Telefono']; ?> </td>
                    <td> <?php echo $row['Nombre_producto']; ?> </td>
                    <td> <?php echo $row['Precio']; ?> </td>
                    <td> <?php echo $row['fecha']; ?> </td>
                    <td> <?php echo $row['cantidad']; ?> </td>
                    <td> <?php echo $row['total']; ?> </td>

                    <td><a href="Factura.php?Id_venta=<?php echo $row['Id_venta']; ?>" class="">Factura</a></td>


                <td> <a href="#" onclick="confirmar_elimi(<?php echo $row['Id_producto']; ?>)" class="bot">Eliminar</a> </td>

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


