<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "INSERT INTO usuarios (Nombre,Usuario,Clave)VALUES('$nombre', '$usuario', '$clave')";

$resultado = $conexion-> query($sql);

if($resultado){
    echo('
        <script>
        alert("Usuario registrado correctamente :)");
        window.location.href = "index.php";
        </script>
        ');
    }
    else{
        echo('
        <script>
        alert("Error algo salio mal :(");
        window.location.href = "registro.php";
        </script>
        ');
    }

?>