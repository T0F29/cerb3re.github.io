<?php
      $sql = new PDO(SQL_INIT, SQL_USERNAME, SQL_PASSWORD);
      $sqlGetMenu = $sql->query('SELECT * FROM tracklist');
      ?>
      <thead>
      	<tr>
      		<th>
            <svg class="svg-icon" viewBox="0 0 20 20">
  							<path d="M16.899,3.05c-0.085-0.068-0.192-0.095-0.299-0.074L7.947,4.779c-0.17,0.034-0.291,0.182-0.291,0.353v7.364c-0.494-0.536-1.199-0.873-1.983-0.873c-1.491,0-2.704,1.213-2.704,2.704s1.213,2.704,2.704,2.704c1.491,0,2.705-1.213,2.705-2.704V7.952l7.933-1.659v4.399c-0.494-0.535-1.199-0.873-1.983-0.873c-1.491,0-2.704,1.213-2.704,2.704c0,1.492,1.213,2.705,2.704,2.705c1.49,0,2.704-1.213,2.704-2.705V3.33C17.031,3.221,16.982,3.119,16.899,3.05 M5.673,16.311c-1.094,0-1.983-0.889-1.983-1.983s0.889-1.983,1.983-1.983c1.095,0,1.983,0.889,1.983,1.983S6.768,16.311,5.673,16.311 M14.327,14.508c-1.095,0-1.983-0.889-1.983-1.984c0-1.094,0.889-1.982,1.983-1.982c1.094,0,1.983,0.889,1.983,1.982C16.311,13.619,15.421,14.508,14.327,14.508 M16.311,5.558L8.377,7.217V5.428l7.933-1.659V5.558z"></path>
              </svg>
             Song
      		</th>
      		<th>
            <svg class="svg-icon" viewBox="0 0 20 20">
  							<path d="M6.176,7.241V6.78c0-0.221-0.181-0.402-0.402-0.402c-0.221,0-0.403,0.181-0.403,0.402v0.461C4.79,7.416,4.365,7.955,4.365,8.591c0,0.636,0.424,1.175,1.006,1.35v3.278c0,0.222,0.182,0.402,0.403,0.402c0.222,0,0.402-0.181,0.402-0.402V9.941c0.582-0.175,1.006-0.714,1.006-1.35C7.183,7.955,6.758,7.416,6.176,7.241 M5.774,9.195c-0.332,0-0.604-0.272-0.604-0.604c0-0.332,0.272-0.604,0.604-0.604c0.332,0,0.604,0.272,0.604,0.604C6.377,8.923,6.105,9.195,5.774,9.195 M10.402,10.058V6.78c0-0.221-0.181-0.402-0.402-0.402c-0.222,0-0.402,0.181-0.402,0.402v3.278c-0.582,0.175-1.006,0.714-1.006,1.35c0,0.637,0.424,1.175,1.006,1.351v0.461c0,0.222,0.181,0.402,0.402,0.402c0.221,0,0.402-0.181,0.402-0.402v-0.461c0.582-0.176,1.006-0.714,1.006-1.351C11.408,10.772,10.984,10.233,10.402,10.058M10,12.013c-0.333,0-0.604-0.272-0.604-0.604S9.667,10.805,10,10.805c0.332,0,0.604,0.271,0.604,0.604S10.332,12.013,10,12.013M14.629,8.448V6.78c0-0.221-0.182-0.402-0.403-0.402c-0.221,0-0.402,0.181-0.402,0.402v1.668c-0.581,0.175-1.006,0.714-1.006,1.35c0,0.636,0.425,1.176,1.006,1.351v2.07c0,0.222,0.182,0.402,0.402,0.402c0.222,0,0.403-0.181,0.403-0.402v-2.07c0.581-0.175,1.006-0.715,1.006-1.351C15.635,9.163,15.21,8.624,14.629,8.448 M14.226,10.402c-0.331,0-0.604-0.272-0.604-0.604c0-0.332,0.272-0.604,0.604-0.604c0.332,0,0.604,0.272,0.604,0.604C14.83,10.13,14.558,10.402,14.226,10.402 M17.647,3.962H2.353c-0.221,0-0.402,0.181-0.402,0.402v11.27c0,0.222,0.181,0.402,0.402,0.402h15.295c0.222,0,0.402-0.181,0.402-0.402V4.365C18.05,4.144,17.869,3.962,17.647,3.962 M17.245,15.232H2.755V4.768h14.49V15.232z"></path>
  						</svg>
            Style
          </th>
      		<th>
            <svg class="svg-icon" viewBox="0 0 20 20">
  							<path d="M8.627,7.885C8.499,8.388,7.873,8.101,8.13,8.177L4.12,7.143c-0.218-0.057-0.351-0.28-0.293-0.498c0.057-0.218,0.279-0.351,0.497-0.294l4.011,1.037C8.552,7.444,8.685,7.667,8.627,7.885 M8.334,10.123L4.323,9.086C4.105,9.031,3.883,9.162,3.826,9.38C3.769,9.598,3.901,9.82,4.12,9.877l4.01,1.037c-0.262-0.062,0.373,0.192,0.497-0.294C8.685,10.401,8.552,10.18,8.334,10.123 M7.131,12.507L4.323,11.78c-0.218-0.057-0.44,0.076-0.497,0.295c-0.057,0.218,0.075,0.439,0.293,0.495l2.809,0.726c-0.265-0.062,0.37,0.193,0.495-0.293C7.48,12.784,7.35,12.562,7.131,12.507M18.159,3.677v10.701c0,0.186-0.126,0.348-0.306,0.393l-7.755,1.948c-0.07,0.016-0.134,0.016-0.204,0l-7.748-1.948c-0.179-0.045-0.306-0.207-0.306-0.393V3.677c0-0.267,0.249-0.461,0.509-0.396l7.646,1.921l7.654-1.921C17.91,3.216,18.159,3.41,18.159,3.677 M9.589,5.939L2.656,4.203v9.857l6.933,1.737V5.939z M17.344,4.203l-6.939,1.736v9.859l6.939-1.737V4.203z M16.168,6.645c-0.058-0.218-0.279-0.351-0.498-0.294l-4.011,1.037c-0.218,0.057-0.351,0.28-0.293,0.498c0.128,0.503,0.755,0.216,0.498,0.292l4.009-1.034C16.092,7.085,16.225,6.863,16.168,6.645 M16.168,9.38c-0.058-0.218-0.279-0.349-0.498-0.294l-4.011,1.036c-0.218,0.057-0.351,0.279-0.293,0.498c0.124,0.486,0.759,0.232,0.498,0.294l4.009-1.037C16.092,9.82,16.225,9.598,16.168,9.38 M14.963,12.385c-0.055-0.219-0.276-0.35-0.495-0.294l-2.809,0.726c-0.218,0.056-0.351,0.279-0.293,0.496c0.127,0.506,0.755,0.218,0.498,0.293l2.807-0.723C14.89,12.825,15.021,12.603,14.963,12.385"></path>
  						</svg>
            Duration
      		</th>
      	</tr>
      </thead>
      <?php
      $int = 1;
      while ($printMenu = $sqlGetMenu->fetch())
      {
        ?>
        <tbody>
          <?php if ($int % 2 == 0) { ?>
        	<tr style="background-color: #2c3e50;">
          <?php } else { ?>
        	<tr>
          <?php } ?>
        		<td>
              <?php echo $printMenu['song']; ?>
        		</td>
        		<td>
                 <img src="./upload/<?php echo $printMenu['img']; ?>" style="width:50%" />
                <?php echo $printMenu['style']; ?>
        		</td>
        		<td>
              <?php echo $printMenu['duration'] . " minutes"; ?>
        		</td>
        		<td>
              <button name="<?php echo $printMenu['id']; ?>" id="delete">Delete</button>
              <button name="<?php echo "modify_".$printMenu['id']; ?>" id="delete">Modify</button>
              <?php
              $int++;
              //delete
                  if (isset($_POST[$printMenu['id']]))
                  {
                    if (isset($_POST['newSong']) && isset($_POST['newStyle']) && isset($_POST['newDuration']))
                    {
                        $sql = new PDO(SQL_INIT, SQL_USERNAME, SQL_PASSWORD);
                        $uploaddir  = "/var/www/html/perso.tracklist_Class/";
                        $uploadfile = $uploaddir . basename($_FILES['img']['name']);

                        $req = $sql->prepare('UPDATE tracklist SET
                          song = :newSong,
                          style = :newStyle,
                          duration = :newDuration
                          WHERE
                          id = :id');
                        $req->bindValue("newSong", $_POST['newSong']);
                        $req->bindValue("newStyle", $_POST['newStyle']);
                        $req->bindValue("newDuration", (int)$_POST['newDuration']);
                        $req->bindValue("id", $printMenu['id']);
                        $req->execute();
                        echo '<div id="top">Your file is now modify ;)</div>';

                    }
                    else {
                      $delete = "DELETE FROM tracklist WHERE id=" . $printMenu['id'];
                      $sql->exec($delete);
                      echo '<div id="top">Your track is now remove :/<br /> This page gonna re-actualise in 2 secondes</div>';
                    }

                  }
              //modify
                  if (isset($_POST['modify_'.$printMenu['id']]))
                  {
                ?>
                    <div class="modal">
                      <h1 id="btnModify" align="center">Modify your song informations</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>
                              Song
                            </th>
                            <th>
                              Style
                            </th>
                            <th>
                              Duration
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <td>
                            <input id="btnModify" type="text" placeholder="<?php echo $printMenu['song']; ?>" value="<?php echo $printMenu['song']; ?>" name="newSong" />
                          </td>
                          <td>
                            <input id="btnModify" type="text" placeholder="<?php echo $printMenu['style']; ?>" value="<?php echo $printMenu['style']; ?>" name="newStyle"/>
                          </td>
                          <td>
                            <input id="btnModify" type="text" placeholder="<?php echo $printMenu['duration'] . " minutes"; ?>" value="<?php echo $printMenu['duration']; ?>" name="newDuration"/>
                          </td>
                          <td>
                            <button id="btnModify" name="<?php echo $printMenu['id'] ?>">Modify Song</button>
                          </td>
                        </tbody>
                      </table>
                    </div>
                    <?php
                  }
                   ?>
        		</td>
        	</tr>
        </tbody>
        <?php
        }


  ?>
