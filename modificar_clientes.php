
<?php
include("conexion.php");

if (isset($_GET['Id_cte'])){
    $id = $_GET['Id_cte'];

    $query = "SELECT * FROM clientes WHERE Id_cte='$id'";
    $resultado = $conexion ->query($query);

    if($resultado->num_rows > 0){
        $row = $resultado->fetch_assoc();
    }
    else{
        echo"Empleado no encontrado.";
        exit;
    }
}
else{
    echo"Id no proporcionado.";
    exit;
}
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formularios-mejorado.css">
    <title>Modificar Cliente</title>
    <head>
<body>
    <center>
    <h1>Modificar clientes</h1>
    </center>
<div class="xd">

    <form action="Cambiar_cliente.php" method="POST">
    

        <input type="hidden" name="id" value=" <?php echo $row['Id_cte']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo$row['Nombre'];?>">

        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="<?php echo$row['Apellido'];?>">

        <label for="RFC">RFC:</label>
        <input type="text" id="RFC" name="RFC" value="<?php echo$row['RFC'];?>">

        <label for="Telefono">Telefono:</label>
        <input type="text" id="Telefono" name="Telefono" value="<?php echo$row['Telefono'];?>">

        <input type="submit" value="Guardar Cambios" class="but">
    </form>

</div>
</body>
</head>