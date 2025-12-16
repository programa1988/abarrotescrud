<?php

include ("conexion.php");

$Id=$_REQUEST['Id_venta'];

$query= "DELETE From ventas WHERE Id_venta='$Id'";

$resultado = $conexion-> query ($query);

if ($resultado){
    header ("location: Ventas.php");
}
else{
    echo "Eliminacion no exitosa";
}
