<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Medicos - CAMPS</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image.png" href="fotos/favicon_CAMPS.png">
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <script>
    </script>
    <?php require 'header.php'?>
    <div class="wrapper_turno_padre">
      <div class="wrapper_turno" id="wrapper_turno">
        <div class="form_title">
          <h3>Reserve su turno - Dr Dicky Del Solar</h3>
          <button type="button" onclick="cerrar_turno()" name="button" class="cerrar_turno"></button>
        </div>
        <div class="wrapper_formulario">
          <form class="" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post">
            <h6>Nombre y Apellido:</h6>
            <input type="text" name="nombre" placeholder="Nombre" value="">
            <input type="text" name="Apellido" placeholder="Apellido" value="">
            <h6>DNI:</h6>
            <input type="text" name="dni" value="">
            <h6>Numero de telefono:</h6>
            <input type="text" name="telefono" value="">
            <h6>Fecha de nacimiento:</h6>
            <input type="date" name="fecha_de_nacimiento" value="">
            <h6 class="fecha_del_turno">Fecha del Turno</h6>
            <input type="datetime-local" name="" value="" class="input_calendario">

            <input type="submit" name="submit" class="boton_reservar" value="Reservar Turno">
          </form>
        </div>
        <div class="wrapper_calendario">
          <div class="calendario">

          </div>
        </div>
      </div>
    </div>
  <section class="medicos_wrapper">
      <h2>Saca tu turno</h2>
  <input type="text" class="buscar" placeholder="Buscar...">
  <div class="div_medicos_wrapper">
    <div class="separador">
      <h2>PEDIATRIA</h2>
    </div>
    <div class="medicos_wrapper_turnos">
      <div class="medicos_wrapper_each">
        <div class="turnos_medicos">
          <img src="fotos/user.jpg" class="foto_medico" alt="">
          <div class="nombre_medico">
            <h4>Dicky Del Solar</h4>
                Neurologo
          </div>
          <button class="boton_medicos" onclick="displayTurnos()">Saca tu turno</button>
        </div>
      </div>

        <div class="turnos_medicos">

          <div class="foto_medico"></div>
          <div class="nombre_medico">
            <h4>Dicky Del Solar</h4>
                Rugbier-Cristiano
            <br>
          </div>
          <button class="boton_medicos" onclick="displayTurnos()">Saca tu turno</button>
        </div>
        <div class="turnos_medicos">
          <div class="foto_medico"></div>
          <div class="nombre_medico">
            <h3>Dicky Del Solar</h3>
                Rugbier-Cristiano
            <br>
          </div>
          <button class="boton_medicos" onclick="displayTurnos()">Saca tu turno</button>
        </div>
      </div>
      <div class="separador">
        <h2>PEDIATRIA</h2>
      </div>
      <div class="medicos_wrapper_turnos">
        <div class="medicos_wrapper_each">
          <div class="turnos_medicos">
            <div class="foto_medico"></div>
            <div class="nombre_medico">
              <h4>Dicky Del Solar</h4>
                  Neurologo
              <br>
            </div>
            <button class="boton_medicos" onclick="displayTurnos()">Saca tu turno</button>
          </div>
        </div>

          <div class="turnos_medicos">
            <div class="foto_medico"></div>
            <div class="nombre_medico">
              <h4>Dicky Del Solar</h4>
                  Rugbier-Cristiano
              <br>
            </div>
            <button class="boton_medicos" onclick="displayTurnos()">Saca tu turno</button>
          </div>
          <div class="turnos_medicos">
            <div class="foto_medico"></div>
            <div class="nombre_medico">
              <h3>Dicky Del Solar</h3>
                  Rugbier-Cristiano
              <br>
            </div>
            <button class="boton_medicos" onclick="displayTurnos()">Saca tu turno</button>
          </div>
        </div>
    </div>
  </section>
    <footer>
      <div class="wrapper_footer">
        <img src="fotos/logo_camps.png" class="logo_footer">
          <h4>
            <img src="fotos/telefono.png" class="footer_icon">
            0381 494-1303
          </h4>
          <h4>
            <img src="fotos/ubicacion.png" class="footer_icon">
            Av. Rivadavia 877, Alderetes, Tucumán
          </h4>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>