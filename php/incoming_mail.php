<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$country = $_POST['pais'];
$message = $_POST['mensaje'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../php/phpmailer/Exception.php';
require '../php/phpmailer/PHPMailer.php';
require '../php/phpmailer/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'forexmoneygrow@gmail.com';                     // SMTP username
    $mail->Password   = 'forexmoneygrow321';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('forexmoneygrow@gmail.com', 'ForexMoneyGrow');
    $mail->addAddress('forexmoneygrow@gmail.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject ="ForexMoneyGrow ". $nombre. " ". $apellidos ;
    // $mail->LastName = $apellidos;
    // $mail->Email = $email;
    // $mail->Country = $pais;
    $mail->Body = $country. " ". $email. " ". $message ;

    $mail->send();
    // echo 'Message has been sent, please press back button =)';
    // // header ('Location: message-sent.php');
};
//  catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

?>
