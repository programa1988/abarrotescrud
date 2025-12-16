<?php
session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    include('conexion.php');

    $sql = "select * FROM usuarios where 
    Usuario = '$usuario' and Clave = '$clave' ";

    $query = mysqli_query($conexion,$sql);
    $rows = mysqli_num_rows($query);

    if($rows >0){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nombre'] = $row['Nombre'];

        echo('
        <script>
        alert("Bienvenido a la tienda abarrotes :D");
        window.location.href = "menu.php";
        </script>
        ');
    }
    else{
        echo('
        <script>
        alert("Usuario o contreseña incorrectos :( ");
        window.location.href = "index.php";
        </script>
        ');
    }
?>