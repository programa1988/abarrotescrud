<?php

include ("conexion.php");

$Id=$_REQUEST['Id_empleado'];

$query= "DELETE From empleados WHERE Id_empleado='$Id'";

$resultado = $conexion-> query ($query);

if ($resultado){
    header ("location: Empleados.php");
}
else{
    echo "Eliminacion no exitosa";
}
