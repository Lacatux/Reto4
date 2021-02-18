<?php
  session_start();
  include "datos.php";
  $userProfesor = loginProfesor($_POST["dni"], $_POST["pass"]);
  $userAlumno = loginAlumno($_POST["dni"], $_POST["pass"]);
  $tipoUser = 0;
  if (sizeOf($userProfesor!=0)) {

    if (sizeOf($userAlumno!=0)) {
        echo "Usuario No Existente";
        $tipoUser = 0;
        //header("location: ../index.php");

    }else {
      echo "Usuario Alumno";
      $tipoUser = 1;
      $_SESSION["user"] = $userAlumno['nombre'];
      $_SESSION["idUser"] = $userAlumno['id_user'];
      $_SESSION["nombre"] = $userAlumno['nombre'];
      $_SESSION["tipoUser"] = $tipoUser;

      //header("location: ../index.php");

    }
  }else {
    echo "Usuario Profesor";
    $tipoUser = 2;
    $_SESSION["user"] = $userProfesor['nombre'];
    $_SESSION["idUser"] = $userProfesor['id_user'];
    $_SESSION["nombre"] = $userProfesor['nombre'];
    $_SESSION["tipoUser"] = $tipoUser;

    //header("location: ../index.php");

  }
?>
