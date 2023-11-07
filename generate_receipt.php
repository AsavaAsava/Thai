<?php
require('./assets/fpdf.php');
require("config.php");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_GET['orderID'])){
	$id = $_GET['orderID'];
}else{
	$id = $_POST['orderID'];
}
$fetch_orders = mysqli_query($conn, "SELECT * FROM `totalorder` where id = ".$id." ");
$orders = mysqli_fetch_assoc($fetch_orders);


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'thaitanicfood00@gmail.com';                     //SMTP username
    $mail->Password   = 'nekzcyekpoblxeas';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('thaitanicfood00@gmail.com', 'ThaiTanic');
    $mail->addAddress($orders['email'], 'Customer');     //Add a recipient
                //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Receipt';
    $mail->Body    = '<p>Thank you for shopping with us. You can find your receipt <a href="http://localhost/ThaiTanic/generate_receipt.php?orderID='.$id.'">Here</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	$this->Image('pic.jpg',10,6,30);
	// Arial bold 15
	$this->SetFont('Arial','B',30);
	// Move to the right
	$this->Cell(80);
	// Title
	$this->Cell(30,10,'THAITANIC INVOICE',0,0,'C');
	// Line break
	$this->Ln(30);
    $this->SetFont('Arial','B',20);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'This is a computer generated receipt. A copy of this receipt has been sent to your email. Thank you for dining with us.','C');
}
}

// Instanciation of inherited class
$order =$orders['total_product'];
$ordersSplit = explode(",",$order);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',20);
$pdf->Cell(0,10,'Your Order: ',0,1);
$pdf->SetFont('Arial','B',15);
foreach($ordersSplit as $item){
    $pdf->Cell(40,10,$item);
	$pdf->Ln(10);
}

	$pdf->Cell(30);
	$pdf->Cell(40,10,'Total Cost:');
	$pdf->Cell(50);
	$pdf->Cell(40,10,"$ ".$orders['total_price']);

    

$pdf->Output();
?>
