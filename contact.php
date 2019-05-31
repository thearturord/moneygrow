<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="shortcut icon" href="img/logo2.png">
  <meta charset="utf-8">
  <title>ForexMoneyGrow</title>
  <meta name="description" content="Forex, Money, Investment.. all the steps to be financially free" />
  <meta name="author" content="Arturo Nunez" />
  <meta name="keywords" content="News, Forex, Cryto currency" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/universal-style.css">
  <link rel="stylesheet" href="css/contacto.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php include("php-template\google-analytics.php") ?>
</head>

<body>

<?php include("php-template/header-universal.php") ?>

  <div class="contenedordetodo">

    <div class="formulario-wrapper">

      <!-- <h2 class="titulo">Envianos un mensaje!</h2> -->

      <form class="" method="post" action="php/incoming_mail.php" id="formulario" name="formulario">

        <div class="formulario-div">

          <div class="campos-form">
            <label class="label" for="nombre">Name</label>
            <input class="input" id="nombre" type="text" name="nombre" placeholder="Name" maxlength="">
          </div>

          <div class="campos-form">
            <label class="label" for="apellidos">Last Name</label>
            <input class="input" type="text" name="apellidos" placeholder="Last Name" id="apellidos">
          </div>

          <div class="campos-form">
            <label class="label" for="email">Email</label>
            <input class="input" type="text" name="email" placeholder="Example@example.com" id="email">
          </div>

          <div class="campos-form">
            <label class="label" for="pais">Country</label>
            <input class="input" type="text" name="pais" placeholder="Country" id="pais">
          </div>

          <div class="mensaje">
            <div class="mensaje-elements">
              <label class="mensaje-label" for="areadetexto">Message</label>
              <div class="textarea-res">
                <textarea id="areadetexto" class="textarea" name="mensaje" rows="8" cols="80"></textarea>
              </div>
              <div class="">
                <input onlick class="boton-mensaje" type="submit" name="boton" value="Send Message" id="boton">
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="email-alt">
        <h3 class="h3-e">Write us an email, tell us your message!</h3>
        <h3>Forexmoneygrow@gmail.com</h3>
      </div>
    </div>
  </div>

<?php include("php-template/footer.php") ?>

  <script type="text/javascript" src="js/javascript.js"></script>

</body>

</html>
