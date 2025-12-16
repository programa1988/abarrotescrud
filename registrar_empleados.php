<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['Apellido'];
$rfc = $_POST['RFC'];
$telefono = $_POST['Telefono'];
$direccion = $_POST['direccion'];



$sql = "INSERT INTO empleados (Nombre,Apellido,RFC,Telefono,Direccion)VALUES('$nombre', '$apellido', '$rfc','$telefono', '$direccion')";

$resultado = $conexion-> query($sql);

if($resultado){
    echo('
        <script>
        alert("Empleado registrado correctamente");
        window.location.href = "Empleados.php";
        </script>
        ');
    }
    else{
        echo('
        <script>
        alert("Error");
        window.location.href = "agg_empleados.php";
        </script>
        ');
    }

?>