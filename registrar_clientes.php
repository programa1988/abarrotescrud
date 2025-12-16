<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['Apellido'];
$rfc = $_POST['RFC'];
$telefono = $_POST['Telefono'];

$sql = "INSERT INTO clientes (Nombre,Apellido,RFC,Telefono)VALUES('$nombre', '$apellido', '$rfc', '$telefono')";

$resultado = $conexion-> query($sql);

if($resultado){
    echo('
        <script>
        alert("Empleado registrado correctamente");
        window.location.href = "Clientes.php";
        </script>
        ');
    }
    else{
        echo('
        <script>
        alert("Error");
        window.location.href = "agg_cliente.php";
        </script>
        ');
    }

?>