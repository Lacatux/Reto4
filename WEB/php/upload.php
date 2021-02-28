<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  var_dump($file);
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
        $fileNameNew = uniqid('', true).".".$fileActualExt;

        $fileDestination = 'uploads/'.$fileNameNew;

        $upload = move_uploaded_file($fileTmpName, $fileDestination);
        var_dump($upload);
        if ($upload) {
          echo "<br>YAY<br>!";
          echo $fileNameNew;
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
