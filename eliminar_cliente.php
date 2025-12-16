<?php

include ("conexion.php");

$Id=$_REQUEST['Id_cte'];

$query= "DELETE From clientes WHERE Id_cte='$Id'";

$resultado = $conexion-> query ($query);

if ($resultado){
    header ("location: Clientes.php");
}
else{
    echo "Eliminacion no exitosa";
}
