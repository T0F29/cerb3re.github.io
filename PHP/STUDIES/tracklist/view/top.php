<?php
      if (isset($_POST['song']))
      {
        if (empty($_POST['song']) || empty($_POST['style']) || empty($_POST['duration']) || empty($_POST['img']))
        {
          echo '<div id="top">You must enter the complete List!</div>';
        }
        else
        {
          $request = $sql->prepare('INSERT INTO tracklist (id, song, style, duration, img) VALUES (NULL, :song, :style, :duration, :img)');
          $request->execute(array(
            "song"      => $_POST['song'],
            "style"     => $_POST['style'],
            "duration"  => $_POST['duration'],
            "img"       => $_POST['img']
          ));
          echo '<div id="top">Your track is now add :)</div>';
        }
      }

?>
