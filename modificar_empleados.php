
<?php
include("conexion.php");

if (isset($_GET['Id_empleado'])){
    $id = $_GET['Id_empleado'];

    $query = "SELECT * FROM empleados WHERE Id_empleado='$id'";
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
    <title>Modificar Empleado</title>
    <link rel="stylesheet" href="css/formularios-mejorado.css">
<head>
<body>
    <center>
    <h1>Modificar empleados</h1>
    </center>
<div class="xd">

    <form action="Cambiar_empleado.php" method="POST">
    
        <input type="hidden" name="id" value=" <?php echo $row['Id_empleado']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo$row['Nombre'];?>">

        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="<?php echo$row['Apellido'];?>">

        <label for="RFC">RFC:</label>
        <input type="text" id="RFC" name="RFC" value="<?php echo$row['RFC'];?>">

        <label for="Telefono">Telefono:</label>
        <input type="text" id="Telefono" name="Telefono" value="<?php echo$row['Telefono'];?>">

        <label for="Direccion">Direccion:</label>
        <input type="text" id="Direccion" name="Direccion" value="<?php echo$row['Direccion'];?>">

        <input type="submit" value="Guardar Cambios" class="but">
    </form>
</div>
</body>
</head>