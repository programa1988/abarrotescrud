<?php

include ("conexion.php");

$Id=$_REQUEST['Id_producto'];

$query= "DELETE From productos WHERE Id_Producto='$Id'";

$resultado = $conexion-> query ($query);

if ($resultado){
    header ("location: Productos.php");
}
else{
    echo "Eliminacion no exitosa";
}
