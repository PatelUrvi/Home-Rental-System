<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('Location: Login.php');
}
include 'connection.php';
$id = $_SESSION['id'];
include('pdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('img/icons/home3.png',10,10,10);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Payment Recepit',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array('tenant_emailid'=>'Emailid', 'transaction_id'=> 'Transaction ID', 'amount'=> 'Amount','date'=> 'Payment Date','status'=> 'Payment Status');
 
$result = mysqli_query($con, "SELECT tenant_emailid, transaction_id, amount, date, status FROM tbl_payment where tenant_emailid='".$_SESSION['email']."' and property_id='".$id."'") or die("database error:". mysqli_error($conn));
$header = mysqli_query($con, "SHOW columns FROM tbl_payment WHERE field != 'payment_id' and field != 'property_id'");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
foreach($header as $heading) {
$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',8);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>
<html>
    <body>
        <a href="my_house_detail.php">Show House Detail</a>
    </body>
</html>