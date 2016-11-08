<?php
/* ************************************************************************** */
/*                                                                            */
/*                 index.php for tracklist                                    */
/*                 Created on : Mon Nov 7 17:37:41 2016	                      */
/*                 Made by : Tanguy "cerb3re" CHENIER 				                */
/*                                                                            */
/* ************************************************************************** */

session_start();
require_once("./class/class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);

	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = '<img src="./images/error.gif" style="width:100%;"/>';
	}
}
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracklist: Login</title>
<link rel="stylesheet" href="./view/css/style.css" type="text/css"  />
</head>
<body>
	<div id="top"><a href="sign-up.php" style="color: white;">[Register new profil]</a></div>

       <form method="post" id="login-form">
         <div class="modal" align="center">
           <h1 id="btnModify" align="center">The tracklist has you.</h1>
           <table>
             <thead>
               <tr>
                 <th>
                   Username
                 </th>
                 <th>
                   Password
                 </th>
               </tr>
             </thead>
             <tbody>
               <td>
                 <input id="btnModify" type="text" placeholder="What is your name ?" name="txt_uname_email" />
               </td>
               <td>
                 <input id="btnModify" type="password" placeholder="What is your password ?"  name="txt_password"/>
               </td>
               <td>
                 <button id="btnModify" name="btn-login">Log me</button>
               </td>
             </tbody>
           </table>
         </div>
         <form>
        <?php
			if(isset($error))
			{
				?>
                <!-- <div class="alert alert-danger" align="center">
                    &nbsp; <?php echo $error; ?> We are sorry...</br>Your password is not working.
                </div> -->
								<div class="modal" align="center">
									<h1>Bad username or password</h1>
									<img src="./images/error.gif" height="64%"><br>
											<form method="POST" action="?">
									<input type="submit" value="retry" id="delete" style="width: 80%;"/>
									</form>
								</div>
                <?php
			}
		?>

      </form>

    </div>

</div>

</body>
</html>
