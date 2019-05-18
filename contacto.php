<?php include("header.php") ?>

<div class="contenedordetodo">

  <div class="formulario-wrapper">

    <!-- <h2 class="titulo">Envianos un mensaje!</h2> -->

    <form class="" method="post" data-netlify="true" id="formulario" name="formulario">

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


  <?php include("footer.php") ?>
