<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros - CAMPS</title>
    <link rel="stylesheet" href="<?php echo RUTA?>/css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image.png" href="fotos/favicon_CAMPS.png">
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <header class="menu">
      <button type="button" name="button" class="nav_boton_dropdown" onclick="navDropdownCerrar()">
        <img src="fotos/nav_icon_cerrar.png" alt="Menu">
      </button>
      <a href="index.php" class="logoheader">
        <img src="fotos/logo_camps.png" alt="CAMPS">
      </a>
      <div id="navbar_dropdown">
        <div class="wrapper_drop_first">
          <button type="button" name="button" class="nav_boton_dropdown" onclick="navDropdownCerrar()">
            <img src="fotos/nav_icon_cerrar.png" alt="Menu">
          </button>
          <a href="index.php" class="logoheader">
            <img src="fotos/logo_camps.png" alt="CAMPS">
          </a>
        </div>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="sobre_nosotros.php">Quienes somos</a></li>
          <li><a href="medicos.php" class="botones">RESERVE SU TURNO</a></li>
          <li><a href="#contacto" class="botones">CONTACANOS</a></li>
        </ul>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="sobre_nosotros.php">Quienes somos</a></li>
          <li><a href="medicos.php" class="botones">RESERVE SU TURNO</a></li>
          <li><a href="#contacto" class="botones">CONTACANOS</a></li>
        </ul>
      </nav>
    </header>
    <section class="about">
      <div class="about_info">

      </div>
      <div class="about_info">

      </div>
      <div class="about_info">

      </div>
    <?php
    require'contacto.php';
    require'footer.php'
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
