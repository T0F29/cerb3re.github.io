<?php
session_start();
require_once("./class/class.user.php");
$login = new USER();

if($login->is_loggedin() != "")
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
<link rel="stylesheet" href="./css/style.css" type="text/css"  />
</head>
<body>
dd

</body>
</html>
