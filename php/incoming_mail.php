<?php
  // $from = $_POST['from'];
  // $to = $_POST['to'];
  // $plain_text = $_POST['plain'];
  //
  // header("Content-type: text/plain");
  //
  // if ($to == 'allowed@example.com'){
  //   header("HTTP/1.0 200 OK");
  //   echo('success');
  // }else{
  //   header("HTTP/1.0 403 OK");
  //   echo('user not allowed here');
  // }
  // exit;

  // if (isset($_POST["submit"])) {
  //   $nombre = $_POST["name"];
  //   $apellidos = $_POST["lastName"];
  //   $email = $_POST["email"];
  //   $pais = $_POST["country"];
  //   $mensaje = $_POST["message"];
  //
  //   $mailTo = "forexmoneygrow@gmail.com";
  //   $headers = "From: ".$email;
  //   $txt = "you have received a new msg ".$nombre ".\n\n" .$mensaje;
  //
  //   mail($mailTo, $headers, $txt);
  //   header("location: index.php?mailsend");
  //
  // }


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/phpmailer/Exception.php';
require 'php/phpmailer/PHPMailer.php';
require 'php/phpmailer/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'forexmoneygrow@gmail.com';                     // SMTP username
    $mail->Password   = 'forexmoneygrow321';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('forexmoneygrow@gmail.com', 'ForexMoneyGrow');
    $mail->addAddress('forexmoneygrow@gmail.com');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Name = $nombre;
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
