<?php
include("conexion.php");

$id= $_POST['id'];
$nombre = $_POST['nombre_producto'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];

$sql = "UPDATE productos SET Nombre_producto='$nombre', Stock='$stock', Precio='$precio', Categoria='$categoria'
Where Id_producto='$id'";


if ($conexion->query($sql) === TRUE){
    echo '
        <script>
        alert("Datos actualizados correctamente");
        window.location.href = "Productos.php";
        </script>
        ';
    }
    else{
        echo('
        <script>
        alert("Error al actualizar producto");
        window.location.href = "modificar_datos.php";
        </script>
        ');
    }

?>