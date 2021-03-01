<?php
function conectarBD(){
  //DESCRIPCION DE LA BASE DE DATOS (IP, PUERTO...)
  $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL =TCP)
  (HOST = 192.168.6.172)(PORT = 1521)))(CONNECT_DATA=(SID=ORCLCDB)))";
  //INTENTO DE CONEXION DE LA BASE DE DATOS
  $conn = oci_connect('basegenerica', 'Nombre_Generico2020', $db);
  if (!$conn) {
      $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }
  return $conn;
  oci_close($conn);
}//FIN FUNCION conectarBD
//====================================================================
function loginProfesor($dni, $pass){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT * FROM PROFESOR WHERE DNI= :dni AND CONTRASENA= :pass ");
  oci_bind_by_name($stid, ":dni", $dni);
  oci_bind_by_name($stid, ":pass", $pass);
  oci_execute($stid);
  $usuario = array();
  if ($row = oci_fetch_array($stid)) {
    $usuario = array(
      "id" => $row[0],
      "nombre" => $row[1],
      "apellidos" => $row[2],
      "dni" => $row[3],
      "fechaNac" => $row[4],
      "pass" => $row[5]
    );
  }
  oci_free_statement($stid);
  return $usuario;
}//FIN FUNCION loginProfesor
//====================================================================
function loginAlumno($dni, $pass){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT * FROM ALUMNO WHERE DNI= :dni AND CONTRASENA= :pass ");
  oci_bind_by_name($stid, ":dni", $dni);
  oci_bind_by_name($stid, ":pass", $pass);
  oci_execute($stid);
  $usuario = array();
  if ($row = oci_fetch_array($stid)) {
    $usuario = array(
      "id" => $row[0],
      "nombre" => $row[1],
      "apellidos" => $row[2],
      "dni" => $row[3],
      "fechaNac" => $row[4],
      "pass" => $row[5],
      "imagen"=> $row[7]
    );
  }
  oci_free_statement($stid);
  return $usuario;
}//FIN FUNCION loginAlumno
//====================================================================
function getNoticias(){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT * FROM NOTICIA ORDER BY FECHA DESC FETCH FIRST 3 ROWS ONLY");
  oci_execute($stid);
  $noticiasArray = array();
  while ($row = oci_fetch_array($stid)) {
    $noticia = array(
      "id" => $row[0],
      "titulo" => $row[1],
      "cuerpo" => $row[2],
      "profesor" => $row[3],
      "resumen" => $row[4],
      "fecha" => $row[5]
    );
    $noticiasArray[] = $noticia;
  }
  oci_free_statement($stid);
  return $noticiasArray;
}//FIN FUNCION getNoticias
//====================================================================
function getNoticiaById($id){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT * FROM NOTICIA WHERE ID_NOTICIA = :id");
  oci_bind_by_name($stid, ":id", $id);
  oci_execute($stid);
  $noticiasArray = array();
  if ($row = oci_fetch_array($stid)) {
    $noticia = array(
      "id" => $row[0],
      "titulo" => $row[1],
      "cuerpo" => $row[2],
      "profesor" => $row[3],
      "resumen" => $row[4],
      "fecha" => $row[5]
    );
    $noticiasArray[] = $noticia;
  }
  oci_free_statement($stid);
  return $noticiasArray;
}//FIN FUNCION getNoticiaById
//====================================================================
function getCursosAlumno($user){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT NOMBRE.NOMBRE FROM MATRICULA INNER JOIN ASIGNATURA ON ASIGNATURA.ID_ASIGNATURA = MATRICULA.ASIGNATURA INNER JOIN CURSO ON ASIGNATURA.CURSO = CURSO.ID_CURSO INNER JOIN NOMBRE ON CURSO.NOMBRE = NOMBRE.ID_NOMBRE WHERE MATRICULA.ALUMNO = :usuario");
  
  oci_bind_by_name($stid, ":usuario", $user);
  oci_execute($stid);

  $cursosArray = array();
  while ($row = oci_fetch_array($stid)) {

    $curso = array(
      "curso" => $row[0]
    );
    if (sizeOf($cursosArray)==0) {
      $cursosArray[]=$curso;
    }else {
      $repetido = 0;
      for ($i=0; $i < sizeOf($cursosArray); $i++) { 
        if ($cursosArray[$i]['curso']==$curso['curso']) {
          $repetido = 1;
        }
      }
      if ($repetido == 0) {
        $cursosArray[]=$curso;
      }
    }
  }
  
  oci_free_statement($stid);
  return $cursosArray;
}//FIN FUNCION getNotasByUser
//====================================================================
function getNotasByUserCurso($user, $curso){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT NOMBRE.NOMBRE, ASIGNATURA.NOMBRE, MATRICULA.NOTA FROM MATRICULA
  INNER JOIN ASIGNATURA ON ASIGNATURA.ID_ASIGNATURA = MATRICULA.ASIGNATURA
  INNER JOIN CURSO ON ASIGNATURA.CURSO = CURSO.ID_CURSO
  INNER JOIN NOMBRE ON CURSO.NOMBRE = NOMBRE.ID_NOMBRE
  WHERE MATRICULA.ALUMNO = :usuario AND NOMBRE.NOMBRE = :curso ");
  oci_bind_by_name($stid, ":usuario", $user);
  oci_bind_by_name($stid, ":curso", $curso);
  oci_execute($stid);
  $notasArray = array();
  while($row = oci_fetch_array($stid)){
    $nota = array(
      "curso" => $row[0],
      "asignatura" => $row[1],
      "nota" => $row[2]
    );
    $notasArray[]=$nota;
  }

  oci_free_statement($stid);
  return $notasArray;
}//FIN FUNCION getNotasByUserCurso
//====================================================================
function getCursos(){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT NOMBRE.NOMBRE FROM CURSO INNER JOIN NOMBRE ON curso.nombre = nombre.id_nombre");
  
  oci_execute($stid);

  $cursosArray = array();
  while ($row = oci_fetch_array($stid)) {

    $curso = array(
      "curso" => $row[0]
    );
    if (sizeOf($cursosArray)==0) {
      $cursosArray[]=$curso;
    }else {
      $repetido = 0;
      for ($i=0; $i < sizeOf($cursosArray); $i++) { 
        if ($cursosArray[$i]['curso']==$curso['curso']) {
          $repetido = 1;
        }
      }
      if ($repetido == 0) {
        $cursosArray[]=$curso;
      }
    }
  }
  oci_free_statement($stid);
  return $cursosArray;
}//FIN FUNCION getCursos
//====================================================================
function cambiarPassAlumno($user, $old, $new){
  $conex = conectarBD();
  $stid = oci_parse($conex, "UPDATE alumno SET contrasena = :new WHERE ID_ALUMNO = :usuario AND contrasena = :old");
  
  oci_bind_by_name($stid, ':new', $new);
  oci_bind_by_name($stid, ':usuario', $user);
  oci_bind_by_name($stid, ':old', $old);

  
  $resultado = oci_execute($stid);
  oci_free_statement($stid);
  return $resultado;
}//FIN FUNCION cambiarPassAlumno
//====================================================================
function bajaNoticia($id){
  $conex = conectarBD();
  $stid = oci_parse($conex, "DELETE FROM NOTICIA WHERE ID_NOTICIA = :id ");
  oci_bind_by_name($stid, ':id', $id);
  oci_execute($stid);
  oci_free_statement($stid);
}//FIN FUNCION bajaNoticia
//====================================================================
function nuevaNoticia($titulo, $cuerpo, $profesor, $resumen, $fecha){
  $conex = conectarBD();
  $stid = oci_parse($conex, "INSERT INTO NOTICIA(titulo, cuerpo, profesor, resumen, fecha) VALUES ( :titulo , :cuerpo , :profesor , :resumen , :fecha )");
  oci_bind_by_name($stid, ':titulo', $titulo);
  oci_bind_by_name($stid, ':cuerpo', $cuerpo);
  oci_bind_by_name($stid, ':profesor', $profesor);
  oci_bind_by_name($stid, ':resumen', $resumen);
  oci_bind_by_name($stid, ':fecha', $fecha);
  $resultado = oci_execute($stid);
  oci_free_statement($stid);
  return $resultado;
}//FIN FUNCION bajaNoticia
//====================================================================
function cambiaImagenPerfil($dni, $ruta){
  var_dump($dni, $ruta);
  $conex = conectarBD();
  $stid = oci_parse($conex, "UPDATE ALUMNO SET IMAGEN = :ruta WHERE ALUMNO.DNI = :dni");
  oci_bind_by_name($stid, ':ruta', $ruta);
  oci_bind_by_name($stid, ':dni', $dni);
  $resultado = oci_execute($stid);
  var_dump($resultado);
  oci_free_statement($stid);
  $_SESSION["imagenNew"]=$ruta;

}//FIN FUNCION cambiaImagenPerfil
//====================================================================
?>
