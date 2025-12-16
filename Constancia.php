<?php
require('fpdf/fpdf.php');
include("conexion.php");

if(isset($_GET['Id_empleado'])){
    $id_producto= $_GET['Id_empleado'];


    $query = "SELECT empleados.Nombre AS Empleado, empleados.Apellido, empleados.RFC, empleados.Telefono, 
            empleados.Direccion
    FROM Empleados
            WHERE empleados.Id_empleado = '$id_producto'";
            $resultado= $conexion->query($query);

    if($resultado->num_rows>0){
        $row=$resultado->fetch_assoc();
    }
    else{
        die("No se encontraron datos para esta constancia .");
    }
    }else{
        die("Id de empleado no proporcionado");
    }

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', '16');

$pdf->Cell(0, 10, 'Constancia de empleado', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10,'Datos del empleado: ', 0, 1);
$pdf->Cell(0, 10,'Hola empleado le agradecemos su arduo trabajo ', 0, 1);
$pdf->Cell(50, 10,'Nombre: ' .$row['Empleado'], 0, 1);
$pdf->Cell(50, 10, 'RFC: ' .$row['RFC'], 0, 1);
$pdf->Cell(50, 10, 'Apellido: ' .$row['Apellido'], 0, 1);
$pdf->Cell(50, 10, 'Telefono: ' .$row['Telefono'], 0, 1);
$pdf->Cell(50, 10, 'Direccion: ' .$row['Direccion'], 0, 1);
$pdf->Cell(0, 10, 'Gracias por tu trabajo!', 0, 0, 'C');

$pdf->Ln(10);


$pdf->Output('I', 'Constancia_' . $id_producto . '.pdf');
?>