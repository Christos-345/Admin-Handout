<?php
session_start();

require("../fpdf/fpdf.php");
require("../tfpdf/tfpdf.php");

class PDF extends tFPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->SetFont('Times', '', 10);
        $this->Image('../logo.png', 10, 6, 30);
        $this->Text(10, 27, 'apm.smarthouses@gmail.com');
        $this->Text(10, 23, 'Phone: 99436309');
        $this->Text(10, 32, 'www.apmsmarthouses.com.cy');

        // Arial bold 15
        $this->SetFont('Times', 'B', 15);
        // Move to the right
        $this->Cell(110);
        // Title
        $this->Cell(30, 10, 'Properties Details');
        // Line break
        $this->Ln(27);
    }
    //Page Footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Times', 'I', 8);
        // Page number
        $this->Cell(0, 10, '' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
// Instanciation of inherited class
$pdf = new PDF('l', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 8);
$pdf->SetFillColor(230, 230, 230);

$pdf->Cell(16, 10, 'PropertyID', 1, 0, 'C', TRUE);
$pdf->Cell(10, 10, 'User ID', 1, 0, 'C', TRUE);
$pdf->Cell(18, 10, 'Type', 1, 0, 'C', TRUE);
$pdf->Cell(14, 10, 'Category', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Town', 1, 0, 'C', TRUE);
$pdf->Cell(14, 10, 'Area', 1, 0, 'C', TRUE);
$pdf->Cell(10, 10, 'Address', 1, 0, 'C', TRUE);
$pdf->Cell(35, 10, 'Brand', 1, 0, 'C', TRUE);
$pdf->Cell(8, 10, 'State', 1, 0, 'C', TRUE);
$pdf->Cell(8, 10, 'Description', 1, 0, 'C', TRUE);
$pdf->Cell(14, 10, 'Date Posted', 1, 0, 'C', TRUE);
$pdf->Cell(16, 10, 'Last Updated', 1, 0, 'C', TRUE);


//$pdf->SetFont('Times','',8);

$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 8);

if (isset($_SESSION['properties'])) {
    foreach ($_SESSION['properties'] as $row) {

        $pdf->Cell(16, 10, $row['propertyID'], 1, 0, 'C');
        $pdf->Cell(10, 10, $row['userID'], 1, 0, 'C');
        $pdf->Cell(18, 10, $row['type'], 1, 0, 'C');
        $pdf->Cell(14, 10, $row['category'], 1, 0, 'C');
        $pdf->Cell(15, 10, $row['town'], 1, 0, 'C');
        $pdf->Cell(14, 10, $row['area'], 1, 0, 'C');
        $pdf->Cell(10, 10, $row['address'], 1, 0, 'C');
        $pdf->Cell(35, 10, $row['brand'], 1, 0, 'C');
        $pdf->Cell(8, 10, $row['state'], 1, 0, 'C');
        $pdf->Cell(8, 10, $row['description'], 1, 0, 'C');
        $pdf->Cell(14, 10, $row['postDate'], 1, 0, 'C');
        $pdf->Cell(16, 10, $row['lastDate'], 1, 0, 'C');
    }
}


$pdf->Output();
