<?php

include_once "dbh.inc.php";

$town = mysqli_real_escape_string($conn,$_POST['town']);
$state = mysqli_real_escape_string($conn,$_POST['state']);
$type = mysqli_real_escape_string($conn,$_POST['type']);

if(!($town == 'All')&&($state == 'All')&&($type == 'All'))
{
    $sql = "SELECT * from properties WHERE town='$town';  ";
}
else if(!($town == 'All')&&!($state == 'All')&&($type == 'All'))
{
    $sql = "SELECT * from properties WHERE town='$town' AND state='$state' ;  ";
}
else if(!($town == 'All')&&($state == 'All')&&!($type == 'All'))
{
    $sql = "SELECT * from properties WHERE town='$town' AND type='$type' ;  ";
}
else if(!($town == 'All')&&!($state == 'All')&&!($type == 'All'))
{
    $sql = "SELECT * from properties WHERE town='$town' AND state='$state' AND type='$type' ;  ";
}
else if(($town == 'All')&&!($state == 'All')&&($type == 'All'))
{
    $sql = "SELECT * from properties WHERE state='$state' ;  ";
}
else if(($town == 'All')&&!($state == 'All')&&!($type == 'All'))
{
    $sql = "SELECT * from properties WHERE state='$state' AND type='$type' ;  ";
}
else if(($town == 'All')&&($state == 'All')&&!($type == 'All'))
{
    $sql = "SELECT * from properties WHERE type='$type' ;  ";
}
else if(($town == 'All')&&($state == 'All')&&($type == 'All'))
{
    $sql = "SELECT * from properties ;  ";
}










$result = mysqli_query($conn, $sql);

echo mysqli_error($conn);

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
    $this->Text(10,27,'thehandout@gmail.com');
    $this->Text(10,23,'Phone: 99978839');
    $this->Text(10,32,'www.thehandout.com.cy');

    // Arial bold 15
    $this->SetFont('Times','B',12);
    // Move to the right
    $this->Cell(130);
    // Title
    $this->Cell(20,10,'Items Details');
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
$pdf = new PDF('l', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 8);
$pdf->SetFillColor(230, 230, 230);

$pdf->Cell(15, 10, 'PropertyID', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'UserID', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Type', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Category', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Town', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Area', 1, 0, 'C', TRUE);
$pdf->Cell(35, 10, 'Address', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Brand', 1, 0, 'C', TRUE);
$pdf->Cell(15, 10, 'Condition', 1, 0, 'C', TRUE);
$pdf->Cell(23, 10, 'Date Posted', 1, 0, 'C', TRUE);
$pdf->Cell(23, 10, 'Date Last Updated', 1, 0, 'C', TRUE);
$pdf->Cell(85, 10, 'Description', 1, 0, 'C', TRUE);
$pdf->Ln();

//$pdf->SetFont('Times','',14);

$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 8);

while($row = mysqli_fetch_array($result))
{

    $pdf->Cell(15, 10, $row['propertyID'], 1, 0, 'C');
    $pdf->Cell(15, 10, $row['userID'], 1, 0, 'C');
    $pdf->Cell(15, 10, $row['type'], 1, 0, 'C');
    $pdf->Cell(15, 10, $row['category'], 1, 0, 'C');
    $pdf->Cell(15, 10, $row['town'], 1, 0, 'C');
    $pdf->Cell(15, 10, $row['area'], 1, 0, 'C');
    $pdf->Cell(35, 10, $row['address'], 1, 0, 'C');
    $pdf->Cell(15, 10, $row['brand'], 1, 0, 'C');
    $pdf->Cell(15, 10, $row['state'], 1, 0, 'C');
    $pdf->Cell(23, 10, $row['postDate'], 1, 0, 'C');
    $pdf->Cell(23, 10, $row['lastDate'], 1, 0, 'C');
    $pdf->Cell(85, 10, $row['description'], 1, 0, 'C');
    $pdf->Ln();
        
}

$pdf->Output();