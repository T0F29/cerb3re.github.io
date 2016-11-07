<?php
      if (isset($_POST['send']))
      {
        if (empty($_POST['song']) || empty($_POST['style']) || empty($_POST['duration']))
        {
          echo '<div id="top">You must enter the complete List!</div>';
        }
        else
        {
            $uniqid = uniqid();
            $target_path = "upload/".$uniqid.'_';
            $target_path = $target_path . basename( $_FILES['img']['name']);
            $imgInsert =  basename( $_FILES['img']['name']);
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
            "img"       => $uniqid.'_'.$imgInsert
          ));
          echo '<div id="top">Your track is now add :)</div>';
        }
      }


?>
