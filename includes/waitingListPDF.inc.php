<?php

if(isset($_POST['create_pdf7'])){

include_once "dbh.inc.php";

  $sql = "SELECT MWaitListID,firstname,lastname,phoneNo,email,subject FROM contactmanualwaitlist ";
  $result = mysqli_query($conn, $sql);
  
}
require("../fpdf/fpdf.php");
require("../tfpdf/tfpdf.php");


class PDF extends tFPDF
{
// Page header
function Header()
{
    // Logo
    $this->SetFont('Times','',10);
    $this->Image('../logo.png',10,6,30);
    $this->Text(10,27,'apm.smarthouses@gmail.com');
    $this->Text(10,23,'Phone: 99436309');
    $this->Text(10,32,'www.apmsmarthouses.com.cy');

    // Arial bold 15
    $this->SetFont('Times','B',12);
    // Move to the right
    $this->Cell(70);
    // Title
    $this->Cell(20,10,'Manually inserted interested Details');
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
$pdf->SetFont('Times','B',8);
$pdf->SetFillColor(230, 230, 230);

$pdf->Cell(19,8,'Wait ListID',1,0,'C',TRUE);
$pdf->Cell(31,8,'First Name',1,0,'C',TRUE);
$pdf->Cell(31,8,'Last Name',1,0,'C',TRUE);
$pdf->Cell(50,8,'Email',1,0,'C',TRUE);
$pdf->Cell(31,8,'Telephone',1,0,'C',TRUE);
$pdf->Cell(40,8,'Subject',1,0,'C',TRUE);
$pdf->Ln();

//$pdf->SetFont('Times','',14);

$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 8);

while($row = mysqli_fetch_array($result))
{

$pdf->Cell(19,8,$row['MWaitListID'],1,0,'C');
$pdf->Cell(31,8,$row['firstname'],1,0,'C');
$pdf->Cell(31,8,$row['lastname'],1,0,'C');
$pdf->Cell(50,8,$row['email'],1,0,'C');
$pdf->Cell(31,8,$row['phoneNo'],1,0,'C');
$pdf->Cell(40,8,$row['subject'],1,0,'C');
$pdf->Ln();
    
}

$pdf->Output();