<?php


require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Times','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(50,10,'KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN',0,0,'C');
    $this->Ln(6);
    $this->SetFont('Times','',14);
    $this->Cell(210,10,'Jl. Jenderal Sudirman Senayan, Jakarta',0,0,'C');
    $this->Ln(6);
    $this->Cell(210,10,'Telepon No. 5711144 (Hunting)',0,0,'C');
    $this->Ln(6);
    $this->SetFont('Times','u',14);
    $this->Cell(210,10,'Laman : www.kemdikbud.go.id',0,0,'C');
    // Line break
    $this->Ln(10);
    $this->SetDrawColor(0,0,0);
    $this->SetFillColor(0,0,0);
    $this->Cell(190,0.5,'',1,0,'C',true);
    $this->Ln(1.2);
    $this->SetDrawColor(0,0,0);
    $this->SetFillColor(0,0,0);
    $this->Cell(190,1,'',1,0,'C',true);
    $this->Ln(10);
}

}
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
$pdf->Cell(40,10, 'Nomor      : '.$_POST['nomor'].'');
$pdf->Ln(5);
$pdf->Cell(40,10, 'Lampiran  : '.$_POST['lampiran'].'');
$pdf->Ln(5);
$pdf->Cell(40,10, 'Hal            : '.$_POST['hal'].'');
$pdf->Ln(15);
$pdf->Cell(40,10, 'Yth. '.$_POST['yth'].'');
$pdf->Ln(15);
$pdf->MultiCell(190,7,$_POST['surat']);
$pdf->Ln(7);
$pdf->Cell(40,10, 'Atas perhatian dan kerjasama yang baik, kami ucapkan terima kasih.');
$pdf->Ln(25);
$pdf->Cell(300,10, $_POST['jabatan'],0,0,'C');
$pdf->Ln(30);
$pdf->Cell(300,10, $_POST['nama'],0,0,'C');
$pdf->Ln(6);
$pdf->Cell(300,10, $_POST['nip'],0,0,'C');
$pdfdoc = $pdf->Output('', 'S');



//Load PHPMailer dependencies
require_once 'PHPMailer-6.5.0/src/PHPmailer.php';
require_once 'PHPMailer-6.5.0/src/POP3.php';
require_once 'PHPMailer-6.5.0/src/OAuth.php';
require_once 'PHPMailer-6.5.0/src/Exception.php';
require_once 'PHPMailer-6.5.0/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "xxxxxxx@xxxxxxxxxxxx.com";
$mail->Password = "xxxxxxxxxxxxxx";
$mail->SetFrom("xxxxxxx@gmail.com");
$mail->Subject = $_POST['hal'];
$mail->Body = "Ini adalah pesan otomatis, jangan dibalas";
$mail->addStringAttachment($pdfdoc, ''.$_POST['hal'].'.pdf');
$mail->AddAddress("xxxxxxxxxxxxxxxx@xxxxxxxx");
$mail->AddAddress("glnsteven72@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
?>