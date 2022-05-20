<?php

include_once "dbh.inc.php";

$city = mysqli_real_escape_string($conn,$_POST['city']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$role = 2;


if(($city == 'All')&&($gender == 'All'))
{
    $sql = "SELECT * from users WHERE role = 2 ;  ";
}
else if(!($city == 'All')&&($gender == 'All'))
{
    $sql = "SELECT * from users WHERE city='$city' AND role = 2 ;  ";
}
else if(($city == 'All')&&!($gender == 'All'))
{
    $sql = "SELECT * from users WHERE gender='$gender' AND role = 2 ;  ";
}
else if(!($city == 'All')&&!($gender == 'All'))
{
    $sql = "SELECT * from users WHERE gender='$gender' AND city='$city' AND role = 2 ;  ";
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
    $this->Image('../logo2.png',10,6,30);
    $this->Text(10,27,'thehandout@gmail.com');
    $this->Text(10,23,'Phone: 99978839');
    $this->Text(10,32,'www.thehandout.com.cy');

    // Arial bold 15
    $this->SetFont('Times','B',12);
    // Move to the right
    $this->Cell(130);
    // Title
    $this->Cell(20,10,'Admnistrators Report');
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
$pdf = new PDF('l','mm','A4');
$pdf->SetLeftMargin(5);
$pdf->AliasNbPages();
$pdf->AddPage("P");
$pdf->SetFont('Times','B',10);
$pdf->SetFillColor(230, 230, 230);

$pdf->Cell(12, 10, 'UserID', 1, 0, 'C', TRUE);
$pdf->Cell(25, 10, 'First Name', 1, 0, 'C', TRUE);
$pdf->Cell(25, 10, 'Last Name', 1, 0, 'C', TRUE);
$pdf->Cell(25, 10, 'Telephone', 1, 0, 'C', TRUE);
$pdf->Cell(40, 10, 'Email', 1, 0, 'C', TRUE);
$pdf->Cell(25, 10, 'City', 1, 0, 'C', TRUE);
$pdf->Cell(30, 10, 'Occupation', 1, 0, 'C', TRUE);
$pdf->Cell(18, 10, 'Gender', 1, 0, 'C', TRUE);
$pdf->Ln();

//$pdf->SetFont('Times','',14);

$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 8);

while($row = mysqli_fetch_array($result))
{

    $pdf->Cell(12, 10, $row['userID'], 1, 0, 'C');
    $pdf->Cell(25, 10, $row['firstname'], 1, 0, 'C');
    $pdf->Cell(25, 10, $row['lastname'], 1, 0, 'C');
    $pdf->Cell(25, 10, $row['phoneNo'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['email'], 1, 0, 'C');
    $pdf->Cell(25, 10, $row['city'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['occupation'], 1, 0, 'C');
    $pdf->Cell(18, 10, $row['gender'], 1, 0, 'C');
    $pdf->Ln();
        
}

$pdf->Output();