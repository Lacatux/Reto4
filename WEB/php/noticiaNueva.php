<?php
  include "datos.php";

  $resultado = nuevaNoticia($_POST['titulo'], $_POST['cuerpo'], $_POST['idProfesor'], $_POST['resumen'], $_POST['fecha']);
  var_dump($resultado);
  header("location: ../index.php");
?>
