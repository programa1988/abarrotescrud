<?php
include("conexion.php");

$id= $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['Apellido'];
$rfc = $_POST['RFC'];
$telefono = $_POST['Telefono'];


$sql = "UPDATE clientes SET Nombre='$nombre', Apellido='$apellido', RFC='$rfc', Telefono='$telefono'
Where Id_cte='$id'";

if ($conexion->query($sql) === TRUE){
    echo '
        <script>
        alert("Datos actualizados correctamente");
        window.location.href = "Clientes.php";
        </script>
        ';
    }
    else{
        echo('
        <script>
        alert("Error al actualizar empleado");
        window.location.href = "modificar_clientes.php";
        </script>
        ');
    }

?>