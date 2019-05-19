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

  if (isset($_POST["submit"])) {
    $nombre = $_POST["name"];
    $apellidos = $_POST["lastName"];
    $email = $_POST["email"];
    $pais = $_POST["country"];
    $mensaje = $_POST["message"];

    $mailTo = "forexmoneygrow@gmail.com";
    $headers = "From: ".$email;
    $txt = "you have received a new msg ".$nombre ".\n\n" .$mensaje;

    mail($mailTo, $headers, $txt);
    header("location: index.php?mailsend");

  }
?>
