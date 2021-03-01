<?php
  include "datos.php";

if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 100000) {

        $fileNameNew = $_GET['dni_user'].".".$fileActualExt;
        $fileDestination = '../source/fotos/'.$fileNameNew;
        $fileDestination2 = 'source/fotos/'.$fileNameNew;
        $upload = move_uploaded_file($fileTmpName, $fileDestination);

        if ($upload) {
          cambiaImagenPerfil($_POST['dni'], $fileDestination2);
          sleep(7);
          header("location: ../alumno.php");
        }else {
          echo "<br><br>Nope";
        }
      }else {
        echo "Your file is too big";
      }
    }else {
      echo "There was an error uploading your file";

    }
  }else {
    echo "You cannot upload files of this type";
  }
}
?>
