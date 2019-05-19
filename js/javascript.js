(function(){

  document.getElementById('buscar-1').onsubmit = function() {
       window.location = 'http://www.google.com/search?q=site:forexmoneygrow.com' + " " + document.getElementById('buscar-2').value;
    return false; };

  })();

// javascript

      (function(){

      var nombre = document.getElementById('nombre');
      var apellidos = document.getElementById('apellidos');
      var email = document.getElementById('email');
      var pais = document.getElementById('pais');
      var texto = document.getElementById('areadetexto');
      var boton = document.getElementById('boton');


      function nombreCheck (e){
        if (nombre.value.length >= 3) {

        }else {
          alert("Write your name");
          e.preventDefault();
        }
      };

      function apellidosCheck (e){
        if (apellidos.value.length >= 3) {

        }else {
          alert("Write your last name");
          e.preventDefault();
        }
      };

      function emailCheck (e){
        if (email.value.length >= 3 && email.value.indexOf("@") !== -1 && email.value.indexOf(".") !== -1) {

        }else {
          alert("Write a valid email");
          e.preventDefault();
        }
      };

      function paisCheck (e){
        if (pais.value.length >= 3) {

        }else {
          alert("Write your country");
          e.preventDefault();
        }

      };

      function mensajeCheck (e){
        if (texto.value.length >= 3) {

        }else {
          alert("Write a message");
          e.preventDefault();
        }

      };

      var validarTodo = function(e){
       nombreCheck(e);
       apellidosCheck(e);
       emailCheck(e);
       paisCheck(e);
       mensajeCheck(e);

       };

      boton.addEventListener("click",validarTodo);

    })();
