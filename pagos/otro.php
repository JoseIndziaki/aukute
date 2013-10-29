<?php
require('../fpdf/fpdf.php');
require('../fpdf/class.phpmailer.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
	$this->SetFillColor(200, 200, 220);
	$this->Rect(10,10,190,10,'F');
    // Arial bold 15
    $this->SetFont('Helvetica','',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,utf8_decode('Datos de la Reservación'),0,0,'C');
    $this->Image('../images/logopdf.png',10,10,25);
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'C');
}
}
$pdf = new PDF();
$pdf->AddPage();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
	$pdf->SetFillColor(220,220,245);
	$pdf->Rect(10,60,190,8,'F');
$pdf->SetFont('Helvetica', 'B',14);
$pdf->Cell(0,10,utf8_decode('Datos de la Habitación'),0,0);
    $pdf->Ln();
$pdf->SetFont('Helvetica', 'I',12);
$pdf->Cell(0,20,utf8_decode('Habitación '),0,0,'R');
    $pdf->Ln();
$pdf->Cell(0,10,utf8_decode(' días	Todo incluido.'),0,0,'R');
    $pdf->Ln();
$pdf->Cell(0,10,utf8_decode(' MXN'),0,0,'R');
    $pdf->Ln();
    $pdf->Ln();
	$pdf->SetFillColor(220,220,245);
	$pdf->Rect(10,120,190,8,'F');
$pdf->SetFont('Helvetica', 'B',14);
$pdf->Cell(10,10,utf8_decode('Datos del Cliente:'));
    $pdf->Ln();
    $pdf->Ln();
$pdf->SetFont('Helvetica', '',12);
$pdf->Cell(10,10,utf8_decode('Nombre: '));
    $pdf->Ln();
$pdf->Cell(10,10,utf8_decode('Fecha de Llegada: '));
    $pdf->Ln();
$pdf->Cell(10,10,utf8_decode('Fecha de Salida: '));
    $pdf->Ln();
$pdf->Cell(10,10,utf8_decode('Correo Electrónico: '));
    $pdf->Ln();
$pdf->Cell(10,10,utf8_decode('Teléfono(s) de contacto: '));
    $pdf->Ln();
$pdf->Cell(10,10,utf8_decode('Tipo de Pago: '));
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
$pdf->SetFont('Helvetica', 'I',10);
$pdf->Cell(0,10,utf8_decode('Aukute Inn Hotel'),0,0,'C');
    $pdf->Ln();
$pdf->SetFont('Helvetica', '',8);
$pdf->Cell(0,5,utf8_decode('Blv. Pedro Baznariz #457, Puerto Vallarta, Jalisco'),0,0,'C');
    $pdf->Ln();
$pdf->Cell(0,5,utf8_decode('Tels: 5742798, 5724632'),0,0,'C');
    $pdf->Ln();
$pdf->Cell(0,5,utf8_decode('e-mail: reservaciones@aukute.com'),0,0,'C');
    $pdf->Ln();
	
$pdf->AddPage();
    $pdf->Ln();
$pdf->SetFont('Helvetica', '',16);
$pdf->Cell(20,10,utf8_decode('Términos y condiciones de la empresa'));
    $pdf->Ln();
    $pdf->Ln();
$txt = file_get_contents('terminos.txt');
$pdf->SetFont('Helvetica', '',10);
$pdf->Multicell(0,5,$txt);
$pdf->Output('booking.pdf', 'I');
?>