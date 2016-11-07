<?php
session_start();
require_once('./class/class.user.php');
$user = new USER();

if($user->is_loggedin()	!= "")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);

	if($uname=="")	{
		$error[] = "provide username !";
	}
	else if($umail=="")	{
		$error[] = "provide email id !";
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if(strlen($upass) < 6){
		$error[] = "Password must be atleast 6 characters";
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['user_name']==$uname) {
				$error[] = "sorry username already taken !";
			}
			else if($row['user_email']==$umail) {
				$error[] = "sorry email id already taken !";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){
					$user->redirect('sign-up.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}

?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracklist: Register</title>
<link rel="stylesheet" href="./css/style.css" type="text/css"  />
</head>
<body>
	<?php
if(isset($error))
{
foreach($error as $error)
{
 ?>
					 <div id="top">
							 <?php echo $error; ?>
					 </div>
					 <?php
}
}
else if(isset($_GET['joined']))
{
?>
			 <div id="top">Successfully registered <a href='index.php'><strong>login</strong></a> here
			 </div>
			 <?php
}
?>

    <form method="post" class="form-signin">
			<div class="modal" align="center">
				<h1 id="btnModify" align="center">Create a new profil.</h1>
				<table>
					<thead>
						<tr>
							<th>
								Username
							</th>
							<th>
								Password
							</th>
							<th>
								E-mail
							</th>
						</tr>
					</thead>
					<tbody>
						<td>
							<input id="btnModify" type="text" placeholder="Choose a name" name="txt_uname" value="<?php if(isset($error)){echo $uname;}?>"/>
						</td>
						<td>
							<input id="btnModify" type="password" placeholder="Choose a password"  name="txt_upass" />
						</td>
						<td>
							<input id="btnModify" type="text" placeholder="Enter your email"  name="txt_umail" value="<?php if(isset($error)){echo $umail;}?>" />
						</td>
						<td>
							<button id="btnModify" name="btn-signup">Register new profil</button>
						</td>
					</tbody>
				</table>
			</div>
    </form>
</body>
</html>
