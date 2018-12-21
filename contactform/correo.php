<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
	// Parametres
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$asunto = $_POST['subject'];
	$mensaje = $_POST['message'];
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'escuelanacionalfitness@gmail.com';                 // SMTP username
    $mail->Password = 'Dominiquerr2004****';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email,$email);
    $mail->addAddress('escuelanacionalfitness@gmail.com','Rodolfo') ;    
   
                                // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $mensaje;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mensaje Enviado';
} catch (Exception $e) {
    echo 'Mensaje no enviado. Mailer Error: ', $mail->ErrorInfo;
}









 ?>
