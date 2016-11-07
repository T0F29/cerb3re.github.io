<?php
  $bdd = new PDO('mysql:host=localhost;dbname=AFPA', 'root','poubelle');
  if (isset($_POST['send']))
  {
    $target_path = "upload/";

    $target_path = $target_path . basename( $_FILES['img']['name']);

    if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {
        echo "The file ".  basename( $_FILES['img']['name']).
        " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

?>

<form method="POST" action="upload.php" enctype="multipart/form-data">
<!-- <input type="hidden" name="MAX_FILE_SZE" value="100000" /> -->
<input type="file" name="img" />
<input type="submit" name="send" />
</form>
