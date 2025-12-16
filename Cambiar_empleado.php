<?php
include("conexion.php");

$id= $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['Apellido'];
$rfc = $_POST['RFC'];
$telefono = $_POST['Telefono'];
$direccion = $_POST['Direccion'];

$sql = "UPDATE empleados SET Nombre='$nombre', Apellido='$apellido', RFC='$rfc', Telefono='$telefono', Direccion='$direccion'
Where Id_empleado='$id'";

if ($conexion->query($sql) === TRUE){
    echo '
        <script>
        alert("Datos actualizados correctamente");
        window.location.href = "Empleados.php";
        </script>
        ';
    }
    else{
        echo('
        <script>
        alert("Error al actualizar empleado");
        window.location.href = "modificar_empleados.php";
        </script>
        ');
    }

?>