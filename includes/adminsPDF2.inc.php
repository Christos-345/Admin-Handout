<?php

include_once "dbh.inc.php";

  $sql = "SELECT userID,firstname,lastname,phoneNo,email,role FROM users WHERE role=2; ";
  $result = mysqli_query($conn, $sql);

require("../fpdf/fpdf.php");
require("../tfpdf/tfpdf.php");


class PDF extends tFPDF
{
// Page header
function Header()
{
    // Logo
    $this->SetFont('Times','',10);
    $this->Text(10,27,'thehandout@gmail.com');
    $this->Text(10,23,'Phone: 99978829');
    $this->Text(10,32,'www.thehandout.com.cy');

    // Arial bold 15
    $this->SetFont('Times','B',12);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(20,10,'User Details');
    // Line break
    $this->Ln(27);
}
//Page Footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Page number
    $this->Cell(0,10,''.$this->PageNo().'/{nb}',0,0,'C');
}

}
// Instanciation of inherited class
$pdf = new PDF('P','mm','A4');
$pdf->SetLeftMargin(5);
$pdf->AliasNbPages();
$pdf->AddPage("P");
$pdf->SetFont('Times','B',10);
$pdf->SetFillColor(230, 230, 230);

$pdf->Cell(19,8,'User ID',1,0,'C',TRUE);
$pdf->Cell(40,8,'First Name',1,0,'C',TRUE);
$pdf->Cell(40,8,'Last Name',1,0,'C',TRUE);
$pdf->Cell(65,8,'Email',1,0,'C',TRUE);
$pdf->Cell(35,8,'Telephone',1,0,'C',TRUE);
$pdf->Ln();

//$pdf->SetFont('Times','',14);

$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 10);

while($row = mysqli_fetch_array($result))
{

$pdf->Cell(19,8,$row['userID'],1,0,'C');
$pdf->Cell(40,8,$row['firstname'],1,0,'C');
$pdf->Cell(40,8,$row['lastname'],1,0,'C');
$pdf->Cell(65,8,$row['email'],1,0,'C');
$pdf->Cell(35,8,$row['phoneNo'],1,0,'C');
$pdf->Ln();
    
}

$pdf->Output();