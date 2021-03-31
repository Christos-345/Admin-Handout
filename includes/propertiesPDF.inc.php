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
$pdf->Cell(10, 10, 'Type', 1, 0, 'C', TRUE);
$pdf->Cell(18, 10, 'Category', 1, 0, 'C', TRUE);
$pdf->Cell(14, 10, 'Country', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Town', 1, 0, 'C', TRUE);
$pdf->Cell(14, 10, 'Area', 1, 0, 'C', TRUE);
$pdf->Cell(10, 10, 'Sqm', 1, 0, 'C', TRUE);
$pdf->Cell(35, 10, 'Address', 1, 0, 'C', TRUE);
$pdf->Cell(8, 10, 'BD', 1, 0, 'C', TRUE);
$pdf->Cell(8, 10, 'BR', 1, 0, 'C', TRUE);
$pdf->Cell(14, 10, 'Parking', 1, 0, 'C', TRUE);
$pdf->Cell(14, 10, 'Heating', 1, 0, 'C', TRUE);
$pdf->Cell(16, 10, 'Furniture', 1, 0, 'C', TRUE);
$pdf->Cell(12, 10, 'Floor', 1, 0, 'C', TRUE);
$pdf->Cell(19, 10, 'Date of Build', 1, 0, 'C', TRUE);
$pdf->Cell(19, 10, 'Availability', 1, 0, 'C', TRUE);
$pdf->Cell(19, 10, 'Price per sqm', 1, 0, 'C', TRUE);
$pdf->Cell(20, 10, 'Total price', 1, 1, 'C', TRUE);


//$pdf->SetFont('Times','',8);

$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 8);

if (isset($_SESSION['properties'])) {
    foreach ($_SESSION['properties'] as $row) {

        $pdf->Cell(16, 10, $row['propertyID'], 1, 0, 'C');
        $pdf->Cell(10, 10, $row['type'], 1, 0, 'C');
        $pdf->Cell(18, 10, $row['category'], 1, 0, 'C');
        $pdf->Cell(14, 10, $row['country'], 1, 0, 'C');
        $pdf->Cell(15, 10, $row['town'], 1, 0, 'C');
        $pdf->Cell(14, 10, $row['area'], 1, 0, 'C');
        $pdf->Cell(10, 10, $row['squarem'], 1, 0, 'C');
        $pdf->Cell(35, 10, $row['address'], 1, 0, 'C');
        $pdf->Cell(8, 10, $row['bedrooms'], 1, 0, 'C');
        $pdf->Cell(8, 10, $row['bathrooms'], 1, 0, 'C');
        if($row['parking'] == 1){
        $pdf->Cell(14, 10, 'Yes', 1, 0, 'C');
        }else{
            $pdf->Cell(14, 10, 'No', 1, 0, 'C');
        }
        if($row['heating'] == 1){
            $pdf->Cell(14, 10, 'Yes', 1, 0, 'C');
            }else{
                $pdf->Cell(14, 10, 'No', 1, 0, 'C');
            }
            if($row['furniture'] == 1){
                $pdf->Cell(16, 10, 'Yes', 1, 0, 'C');
                }else{
                    $pdf->Cell(14, 10, 'No', 1, 0, 'C');
                }
        $pdf->Cell(12, 10, $row['floor'], 1, 0, 'C');
        $pdf->Cell(19, 10, $row['dateOfBuild'], 1, 0, 'C');
        $pdf->Cell(19, 10, $row['availableFrom'], 1, 0, 'C');
        $pdf->Cell(19, 10, $row['pricePerSqm'], 1, 0, 'C');
        $pdf->Cell(20, 10, $row['totalPrice'], 1, 1, 'C');
    }
}


$pdf->Output();
