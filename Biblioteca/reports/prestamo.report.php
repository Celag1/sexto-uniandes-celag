<?php

/**************************************** 
 *  REPORTE PARA LA IMPRESIÓN DEL RECIBO DE PRÉSTAMO  (REVISION Y MODIFICACION)
 *  By: Celso Aguirre IBOT
 *  Date: 17/09/2024 
 ****************************************/

require('fpdf/fpdf.php');
require_once("../models/factura.model.php");
require_once("../models/productos.model.php");

$idFactura = filter_var($_GET['idFactura'], FILTER_VALIDATE_INT);
if ($idFactura === false || $idFactura <= 0) {
    die("ID de factura inválido");
}

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// Encabezado
//TODO: MEJORAR EL ENCABEZADO PARAMETRIZANDO LOS DATOS DE LA BIBLIOTECA, PARA QUE NO ESTEN QUEMADOS EN CODIGO
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 6, 'IngSoft', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(190, 6, 'RUC: 1824581673001', 0, 1, 'C');
$pdf->Cell(190, 6, iconv('UTF-8', 'ISO-8859-1', 'NW 1441 Av. Bolivariana, Genovesa, CA 90265'), 0, 1, 'C');
$pdf->Cell(190, 6, 'Email: celag3@gmail.com', 0, 1, 'C');
$pdf->Cell(190, 6, 'Contacto: +1 (123) 987-6543', 0, 1, 'C');
$pdf->Image('../public/images/Celso_Aguirre_logo.jpg', 10, 11, 52, 0, "JPG");

// Información de la factura
$factura = new Factura();
$datosFactura = $factura->uno($idFactura);
$datosFactura = mysqli_fetch_assoc($datosFactura);

// Número de factura

//FIXME: CREAR CAMPOS SERIE, ESTABLECIMIENTO Y NUMERO DE PRESTAMO
$pdf->SetY(10);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(150, 10, 'FACTURA No. ', 0, 0, 'R');
$pdf->SetY(15);
$pdf->SetX(152);
$pdf->SetFont('Arial', 'B', 13);
$pdf->SetTextColor(255, 0, 0); // Color rojo
$pdf->Cell(40, 10, "001-001-".str_pad($datosFactura['idFactura'], 7, '0', STR_PAD_LEFT), 0, 1, 'L');
$pdf->SetTextColor(0, 0, 0); // Color negro

//Fecha
$pdf->Ln(3);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(177, 5, 'Fecha: '.date('Y-m-d', strtotime($datosFactura['Fecha'])), 0, 1, 'R');

// Información del cliente
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-1', 'Información del Cliente'), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-1', 'Nombre: '.$datosFactura['Nombres']), 0, 1, 'L');
$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-1', 'Dirección: '.$datosFactura['Direccion']), 0, 1, 'L');
$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-1', 'Teléfono: '.$datosFactura['Telefono']), 0, 1, 'L');
$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-1', 'Cédula/RUC: '.$datosFactura['Cedula']), 0, 1, 'L');
$pdf->Cell(190, 5, 'Correo: '.$datosFactura['Correo'], 0, 1, 'L');

// Detalle de la factura
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 10, 'Detalle de la Factura', 0, 1, 'C');
$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 10, 'Cantidad', 1,0,'C');
$pdf->Cell(100, 10, 'Nombre del Producto', 1,0,'C');
$pdf->Cell(30, 10, 'Precio Unitario', 1,0,'C');
$pdf->Cell(40, 10, 'Subtotal', 1,0,'C');
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$detalleFactura = $factura->obtenerDetalleFactura($idFactura);
while ($producto = mysqli_fetch_assoc($detalleFactura)) {
    $pdf->Cell(20, 10, $producto['Cantidad'], 1,0,'R');
    $pdf->Cell(100, 10, iconv('UTF-8', 'ISO-8859-1', $producto['Nombre_Producto']), 1,0,'C');
    $pdf->Cell(30, 10, '$' . number_format($producto['Precio_Unitario'], 2, '.', ','), 1,0,'R');
    $pdf->Cell(40, 10, '$' . number_format($producto['Sub_Total_item'], 2, '.', ','), 1,0,'R');
    $pdf->Ln();
}

// Subtotales y Total de la factura

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(120, 10, '', 0,0,'R');
$pdf->Cell(30, 10, 'SUBTOTAL', 0,0,'C');
$pdf->Cell(40, 10, '$' . number_format($datosFactura['Sub_total'], 2, '.', ','), 1,0,'R');
$pdf->Ln();
$pdf->Cell(120, 10, '', 0,0,'R');
$pdf->Cell(30, 10, 'SUBTOTAL IVA', 0,0,'C');
$pdf->Cell(40, 10, '$' . number_format($datosFactura['Sub_total_iva'], 2, '.', ','), 1,0,'R');
$pdf->Ln();
$pdf->Cell(120, 10, '', 0,0,'R');
$pdf->Cell(30, 10, 'IVA', 0,0,'C');
$pdf->Cell(40, 10, '$' . number_format($datosFactura['Valor_IVA'], 2, '.', ','), 1,0,'R');
$pdf->Ln();
$pdf->Cell(120, 10, '', 0,0,'R');
$pdf->Cell(30, 10, 'TOTAL', 0,0,'C');
$pdf->Cell(40, 10,'$' . number_format($datosFactura['Sub_total']+$datosFactura['Valor_IVA'], 2, '.', ','), 1,0,'R');

$pdf->Output();
?>