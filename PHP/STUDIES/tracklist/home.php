<?php
/* ************************************************************************** */
/*                                                                            */
/*                 home.php for tracklist    	                                */
/*                 Created on : Mon Nov 7 17:37:41 2016	                      */
/*                 Made by : Tanguy "cerb3re" CHENIER 				                */
/*                                                                            */
/* ************************************************************************** */
	require_once("./class/session.php");
	require_once("./class/class.user.php");

	$auth_user 	= new USER();
	$user_id 		= $_SESSION['user_session'];
	$stmt 			= $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");

	$stmt->execute(array(":user_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracklist: Login</title>
<link rel="stylesheet" href="./css/style.css" type="text/css"  />
</head>
<body>
<!-- structure of the site -->
    <!-- top modal -->
    <?php  require_once('./view/top.php'); ?>
    <!-- endof modal-->
     <header>
      <h1>
      <svg class="svg-icon" viewBox="0 0 20 20">
        <path fill="none" d="M18.21,16.157v-8.21c0-0.756-0.613-1.368-1.368-1.368h-1.368v1.368v1.368v6.841l-1.368,3.421h5.473L18.21,16.157z"></path>
        <path fill="none" d="M4.527,9.316V7.948V6.579H3.159c-0.756,0-1.368,0.613-1.368,1.368v8.21l-1.368,3.421h5.473l-1.368-3.421V9.316z"></path>
        <path fill="none" d="M14.766,5.895h0.023V5.21c0-2.644-2.145-4.788-4.789-4.788S5.211,2.566,5.211,5.21v0.685h0.023H14.766zM12.737,3.843c0.378,0,0.684,0.307,0.684,0.684s-0.306,0.684-0.684,0.684c-0.378,0-0.684-0.307-0.684-0.684S12.358,3.843,12.737,3.843z M10,1.448c0.755,0,1.368,0.613,1.368,1.368S10.755,4.185,10,4.185c-0.756,0-1.368-0.613-1.368-1.368S9.244,1.448,10,1.448z"></path>
        <path fill="none" d="M14.789,6.579H5.211v9.578l1.368,1.368h6.841l1.368-1.368V6.579z M12.052,12.052H7.948c-0.378,0-0.684-0.306-0.684-0.684c0-0.378,0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.306,0.684,0.684C12.737,11.746,12.431,12.052,12.052,12.052z M12.052,9.316H7.948c-0.378,0-0.684-0.307-0.684-0.684s0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.307,0.684,0.684S12.431,9.316,12.052,9.316z"></path>
      </svg>
      Welcome <?php print $userRow['user_name']; ?>
    </h1>
    </header>
    <!-- end of: Top structure design -->
    <section>
    <!-- begin of: Right menu Structure -->
      <nav id="rightMenu">
        <div id="titleNav">Input your track</div>
					<form method="POST" action="home.php" enctype="multipart/form-data">
          <input type="text" placeholder="Your song Name" name="song" maxlength="25" id="btn"/>
          <!-- <input type="text" placeholder="Your song Style" name="style" id="btn"/> -->
          <select class="dropdown" id="btn" name="style">
            <option selected="selected" class="label">Your song Style</option>
            <option value="Jazz">Jazz</option>
            <option value="Classic">Classic</option>
            <option value="Retro New Wave">Retro New Wave</option>
            <option value="Rock">Rock</option>
            <option value="Pop">Pop</option>
          </select>
          <input type="text" placeholder="Duration in minutes" name="duration" id="btn"/>
          <!-- loading of the image -->
          <input type="file" name="img" id="btn"/>
          <!-- endOf image -->
          <input type="submit" id="send" name="send" value="Add Track"/>
        </form>

        <br />
        <div id="delete"><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></div>
				<div id="delete"><a href="class/logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></div>
      </nav>

      <!-- end of: Right Menu -->
      <!-- begin of: left Menu Structure -->
      <nav id="leftMenu">
        <form method="POST">
          <table>
          <?php require_once('./view/menu.php'); ?>
          </table>
        </form>
      <!-- end of: Left menu Structure -->
      </nav>

    </section>

    <footer>
      © Développé par <a href="https://github.com/cerb3re">T.CHENIER</a> - AFPA 2016
    </footer>
<!-- endof structure -->
</body>
</html>
