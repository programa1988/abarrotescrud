
<?php
include("conexion.php");

if (isset($_GET['Id_producto'])){
    $id = $_GET['Id_producto'];

    $query = "SELECT * FROM productos WHERE Id_producto='$id'";
    $resultado = $conexion ->query($query);

    if($resultado->num_rows > 0){
        $row = $resultado->fetch_assoc();
    }
    else{
        echo"Producto no encontrado.";
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
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="css/formularios-mejorado.css">
<head>
<body>
    <center>   
        <h1>Modificar productos</h1>
    </center>
<div class="xd">

    <form action="Cambiar_producto.php" method="POST">
        

        <input type="hidden" name="id" value=" <?php echo $row['Id_producto']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre_producto" value="<?php echo$row['Nombre_producto'];?>">

        <label for="stock">Stock:</label>
        <input type="text" id="stock" name="stock" value="<?php echo$row['Stock'];?>">

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" value="<?php echo$row['Precio'];?>">

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" value="<?php echo$row['Categoria'];?>">

        <label></label>
        <input type="submit" value="Guardar Cambios" class="but">
    </form>
</div>
</body>
</head>
