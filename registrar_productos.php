<?php
include("conexion.php");
$nombre = $_POST['nombre_producto'];
$precio = $_POST['precio'];
$stock = $_POST['Stock'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO productos (Nombre,Stock,Precio,Categoria)VALUES('$nombre', '$stock', '$precio', '$categoria')";

$resultado = $conexion-> query($sql);

if($resultado){
    echo('
        <script>
        alert("Producto registrado correctamente");
        window.location.href = "Productos.php";
        </script>
        ');
    }
    else{
        echo('
        <script>
        alert("Error");
        window.location.href = "agg_productos.php";
        </script>
        ');
    }

?>