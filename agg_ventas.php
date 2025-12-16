<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}
include("conexion.php");


$clientes_query= "SELECT Id_cte, Nombre FROM clientes";
$clientes_resultado = $conexion->query($clientes_query);

$productos_query = "SELECT Id_producto, Nombre_producto, Precio FROM productos";
$productos_resultado= $conexion->query($productos_query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <title>Agregar Venta</title>
        <link rel="stylesheet" href="css/formularios-mejorado.css">
    </head>
    <body>
        <center>
        <h1>Agregar Venta</h1>
        </center>
        <div class="xd">
        <form action="insertar_venta.php" method="post">

            <h2>Cliente</h2>
            <select name="cliente" required>
                <option value="">Seleccione un Cliente </option>
                <?php while ($cliente=$clientes_resultado->fetch_assoc()){?>
                    <option value="<?php echo $cliente['Id_cte'];?>">
                        <?php echo $cliente['Nombre'];?>
                    </option>
                    <?php } ?>           
                </select>

            <h2>Producto</h2>
            <select name="producto" id="producto" onchange="actualizarPrecio()" required>
            <option value="">Seleccione un produto</option>
                        <?php while ($producto=$productos_resultado->fetch_assoc()){?>
                        <option value="<?php echo $producto['Id_producto']; ?>" data-precio="<?php echo $producto['Precio']; ?>">
                        <?php echo $producto['Nombre_producto']; ?>
                        </option>
                        <?php } ?>
                    </select>

                <h2>Precio</h2>
                <input type="text" id="precio" name="precio" readonly>

                <h2>Cantidad</h2>
                <input type="number" id="cantidad" name="cantidad" min="1" onchange="calcularTotal()" required>

                <h2>Total</h2>
                <input type="text" id="total" name="total" readonly>

                <button type="submit">Agregar Venta</button>
        </div>
    </form>

        <script>
            function actualizarPrecio(){
                const productoSelect= document.getElementById('producto');
                const precioInput= document.getElementById('precio');
                const selectedOption= productoSelect.options[productoSelect.selectedIndex];
                const precio= selectedOption.getAttribute('data-precio');
                precioInput.value= precio ||'';
                calcularTotal();
            }

            function calcularTotal(){
                const precio = parseFloat(document.getElementById('precio').value) ||0;
                const cantidad =parseInt(document.getElementById('cantidad').value) ||0;
                const total= precio*cantidad;
                document.getElementById('total').value = total.toFixed(2);
            }
            </script>
    </body>
</html>