<?php
require('fpdf/fpdf.php');
include("conexion.php");

    $id= $_GET['Id_venta'];


    $query = "SELECT productos . *, clientes . *, ventas . *

    FROM ventas
            INNER JOIN clientes ON ventas.Id_cte = clientes.Id_cte
            INNER JOIN productos ON ventas.Id_producto = productos.Id_producto
            WHERE ventas.Id_venta = '$id'";


    $resultado= $conexion->query($query);


    if($resultado->num_rows>0){
        $row=$resultado->fetch_assoc();
    }
    else {
        die("No se encontraron datos para esta venta.");
    }

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', '16');

$pdf->Cell(0, 10, 'Factura de Venta', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10,'Datos del Cliente: ', 0, 1);
$pdf->Cell(50, 10,'Nombre: ' .$row['Nombre'], 0, 1);
$pdf->Cell(50, 10, 'RFC: ' .$row['RFC'], 0, 1);
$pdf->Cell(50, 10, 'Telefono: ' .$row['Telefono'], 0, 1);
$pdf->Ln(10);

$pdf->Cell(0, 10, 'Detalles de la venta: ', 0, 1);
$pdf->Cell(50, 10, 'Producto: ' .$row['Nombre_producto'], 0, 1);
$pdf->Cell(50, 10, 'Precio unitario: ' . number_format($row['Precio'], 2), 0, 1);
$pdf->Cell(50, 10, 'Cantidad: ' .$row['cantidad'], 0, 1);
$pdf->Cell(50, 10, 'Total: ' . number_format($row['total'], 2), 0, 1);
$pdf->Ln(10);

$pdf->SetY(-30);
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 10, 'Gracias por su compra!', 0, 0, 'C');

$pdf->Output('I', 'Factura_' . $id . '.pdf');
?>