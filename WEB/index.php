<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Centro de Estudios Almi</title>
    <link rel="stylesheet" href="css/comun.css">
    <link rel="stylesheet" href="css/index.css">

    <script src="js/funcionesJs.js">
    </script>
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
        $numero = 0;
        if ($numero == 1) {
          echo "<a href='php/cerrarSesion.php' id='login'>Cerrar Sesion</a>";
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>'nombre_estudiante'";
          echo "</button>";
          echo "<div class='dropdown-content' id='myDropdown'>";
          echo "<a href='notasAlumno' id='enlace'>Notas</a>";
          echo "</div></div>";
        }elseif ($numero == 2) {
          echo "<a href='php/cerrarSesion.php' id='login'>Cerrar Sesion</a>";
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>'nombre_profesor'";
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
            <label for="dni">DNI</label>
            <input type="text" name="dni"><br>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass"><br><br>
            <input id="enviar" type="submit" value="Enviar"/>
          </form>
          <?php
          echo "</div></div>";
        }
        ?>
        <a href="contacto.php" id="nav">Contacto</a>
        <a href="infoAcademica.php" id="nav">Informacion Academica</a>
        <a href="index.php" id='nav' class="active">Inicio</a>
      </div>
  </div>

  <div id="cuerpo">
    <div id="informacion">
      <h1>InformAlmi</h1>
      <img src="source/images/AlmiLogo.png" alt="Logo Centro de Estudios Almi" class="img">

      <div class="info">
        <h2>QUIÉNES SOMOS</h2>
        <p>El Centro de Estudios ALMI es un centro privado, concertado y homologado por el Departamento de Educación,
           Política Lingüística y Cultura para impartir enseñanzas de FP, en las ramas administrativa, informática y sanitaria.
            La formación se imparte tanto a alumnado procedente de sistema educativo, como a personas en activo que desean reciclarse
             o están en situación de desempleo.</p>
      </div>
      <div class="info">
        <h2>POR QUÉ ALMI</h2>
        <p>Ser un Centro reconocido en :</p>
        <p>El desarrollo de los nuevos modelos de relación Empresa/Centro</p>
        <p>El fomento del emprendizaje entre sus alumnos</p>
        <p>La excelencia en la gestión</p>
        <p>El nivel de Compromiso social con el entorno</p>
      </div>
    </div>


    <div id="noticias">
      <h1>NoticiAlmi</h1>
      <div class="noticia">
        <h2>Titulo Noticia</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Nulla commodo porttitor metus at eleifend. Morbi lacinia eu erat vel interdum.
           Vestibulum luctus ultricies quam, a scelerisque enim malesuada quis. Morbi
            elementum rutrum orci vitae elementum. Donec at neque nec leo tincidunt aliquam at a urna.
             Morbi accumsan odio eros. Fusce auctor libero lectus, sed condimentum nulla placerat in.
              Fusce rhoncus, neque vel hendrerit volutpat, arcu odio varius enim, ac pellentesque lacus nulla sed est.</p>
      </div>
      <!--<div class= "floatclear"></div> #No se que hace esto aqui, pero lo voy a comentar por si acaso-->

      <div class="noticia">
        <h2>Titulo Noticia</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Nulla commodo porttitor metus at eleifend. Morbi lacinia eu erat vel interdum.
           Vestibulum luctus ultricies quam, a scelerisque enim malesuada quis. Morbi
            elementum rutrum orci vitae elementum. Donec at neque nec leo tincidunt aliquam at a urna.
             Morbi accumsan odio eros. Fusce auctor libero lectus, sed condimentum nulla placerat in.
              Fusce rhoncus, neque vel hendrerit volutpat, arcu odio varius enim, ac pellentesque lacus nulla sed est.</p>
      </div>
      <div class="noticia">
        <h2>Titulo Noticia</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Nulla commodo porttitor metus at eleifend. Morbi lacinia eu erat vel interdum.
           Vestibulum luctus ultricies quam, a scelerisque enim malesuada quis. Morbi
            elementum rutrum orci vitae elementum. Donec at neque nec leo tincidunt aliquam at a urna.
             Morbi accumsan odio eros. Fusce auctor libero lectus, sed condimentum nulla placerat in.
              Fusce rhoncus, neque vel hendrerit volutpat, arcu odio varius enim, ac pellentesque lacus nulla sed est.</p>
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
