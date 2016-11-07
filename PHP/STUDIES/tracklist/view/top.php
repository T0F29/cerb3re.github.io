<?php
      if (isset($_POST['song']))
      {
        if (empty($_POST['song']) || empty($_POST['style']) || empty($_POST['duration']))
        {
          echo '<div id="top">You must enter the complete List!</div>';
        }
        else
        {
          // $repertory  = '../upload/';
          // // $file       = basename($_FILES['img']['name']);
          // $file       = basename($_FILES["img"]["name"]);
          // $maxSize    = 100000;
          // $size       = filesize($_FILES['img']['tmp_name']);
          // $extensions = array('.png', '.gif', '.jpg', '.jpeg');
          // $extension  = strrchr($_FILES['img']['name'], '.');
          // if (move_uploaded_file($_FILES['img']['name'], $repertory . $file))
          //   echo "Upload success !";
          // else
          //   echo "Upload Error";
          // echo $_FILES['img']['tmp_name'];
          // echo $repertory;

          $target_path = "upload/";

$target_path = $target_path . basename( $_FILES['img']['name']);

if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['img']['name']).
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
          $request = $sql->prepare('INSERT INTO tracklist (id, song, style, duration, img) VALUES (NULL, :song, :style, :duration, :img)');
          $request->execute(array(
            "song"      => $_POST['song'],
            "style"     => $_POST['style'],
            "duration"  => $_POST['duration'],
            "img"       => $_FILES['img']['name']
          ));
          echo '<div id="top">Your track is now add :)</div>';
        }
      }

?>
