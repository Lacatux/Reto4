<?php
  session_start();
  include "datos.php";
  $userProfesor = loginProfesor($_POST["dni"], $_POST["pass"]);
  $userAlumno = loginAlumno($_POST["dni"], $_POST["pass"]);

  $tipoUser = 0;


  if (sizeOf($userProfesor)==0) {
    if (sizeOf($userAlumno)==0) {
      $tipoUser = 0;
      echo "Usuario No Existente";
      header("location: ../index.php");

    }else {
      $tipoUser = 1;
      echo "Usuario Alumno ";
      $_SESSION["user"] = $userAlumno['nombre'];
      $_SESSION["idUser"] = $userAlumno['id'];
      $_SESSION["nombre"] = $userAlumno['nombre'];
      $_SESSION["apellidos"] = $userAlumno['apellidos'];
      $_SESSION["dni"] = $userAlumno['dni'];
      $_SESSION["fechaNac"] = $userAlumno['fechaNac'];
      $_SESSION["tipoUser"] = $tipoUser;
      header("location: ../index.php");

    }
  }else {
    $tipoUser = 2;
    echo "Usuario Profesor";
    $_SESSION["user"] = $userProfesor['nombre'];
    $_SESSION["idUser"] = $userProfesor['id_user'];
    $_SESSION["nombre"] = $userProfesor['nombre'];
    $_SESSION["tipoUser"] = $tipoUser;
    header("location: ../index.php");

  }


  

?>
