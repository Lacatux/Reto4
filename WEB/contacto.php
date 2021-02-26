<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Centro de Estudios Almi</title>
    <link rel="stylesheet" href="css/comun.css">
    <link rel="stylesheet" href="css/contacto.css">

    <script src="js/funcionesJs.js"></script>

    <?php
      session_start();
      include("php/datos.php");
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  </head>
  <body>
  <div id='menu'>
    <img src="source/images/AlmiLogo.png" alt="Logo Centro de Estudios Almi" id="logo">
      <div id="menu-derecha">
      <?php
        if ($_SESSION["tipoUser"] == 1) {
          echo "<a href='php/cerrarSesion.php' id='login'>Cerrar Sesion</a>";
          echo "<a href='alumno.php' id='login'>".$_SESSION['user']."</a>";
        }elseif ($_SESSION["tipoUser"] == 2) {
          echo "<a href='php/cerrarSesion.php' id='login'>Cerrar Sesion</a>";
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>".$_SESSION["nombre"]."";
          echo "</button>";
          echo "<div class='dropdown-content' id='myDropdown'>";
          echo "<a href='#' id='enlace'>Buscador</a>";
          echo "<a href='#' id='enlace'>Registro</a>";
          echo "</div></div>";
        }else {
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>Intranet";
          echo "</button>";
          echo "<div class='dropdown-content' id='myDropdown'>";
          ?>
          <form id="formLogin" action="php/login.php" method="post">
            <label for="dni">DNI</label><br>
            <input type="text" name="dni"><br>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass"><br><br>
            <input id="enviar" type="submit" value="Enviar"/>
          </form>
          <?php
          echo "</div></div>";
        }
        ?>
        <a href="contacto.php" id="nav" class="active">Contacto</a>
        <a href="infoAcademica.php" id="nav">Informacion Academica</a>
        <a href="index.php" id="nav">Inicio</a>
      </div>
  </div>

  <div id="cuerpo">
    <div id="informacion">
      <h1>CONTACTO</h1>

      <div class="info">
        <h2>CENTRO DE ESTUDIOS ALMI</h2>
        <p>Avda Lehendakari Aguirre, 29-1º (Deusto) Junto a la boca de metro</p>
        <p>48014 Bilbao (Bizkaia)</p>
        <p>Teléfono: 94 410 38 37</p>
        <p>Horario: 8:00 – 21:00 (LUNES A VIERNES)</p>
        <p>E-mail: c.estudios.almi@gmail.com</p>
      </div>
      <div class="info">
        <h2>CONTACTO</h2><br>

        <form class="contacto" action="index.html" method="post">
          <label for="">Nombre *</label><br>
          <input type="text" name="nombre"><br><br>
          <label for="">Correo Electronico *</label><br>
          <input type="text" name="email"><br><br>
          <label for="">Telefono</label><br>
          <input type="text" name="telefono"><br><br>
          <label for="">Asunto *</label><br>
          <input type="text" name="asunto"><br><br>
          <label for="">Mensaje *</label><br>
          <textarea name="mensaje" rows="8" cols="50" style="width: 96%;"></textarea>
          <button type="button" name="enviar">Enviar</button>
        </form>
        <p>(* Campo Obligatorio)</p>
      </div>
    </div>
    </div>

  </div>
  <div id="pie">
    <div class="redes">
      <p>Nuestras Redes Sociales</p>
      <a href="#"><img src="source/images/FacebookLogo.png" alt="Facebook Logo" id="fb" class="social"></a>
      <a href="#"><img src="source/images/InstagramLogo.png" alt="Instagram Logo" id="in" class="social"></a>
      <a href="#"><img src="source/images/TwitterLogo.png" alt="Twitter Logo" id="tw" class="social"></a>
    </div>

  </div>
  </body>
</html>
