<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="ProAlterationsLogin.css" rel="stylesheet">
<title>Login</title>
</head>

<body>
	<div class="login">
		<h2>Pro Alterations & Suits' Admin Login</h2>
	</div>
	<div class="loginform">
		<form action="" method="post">
			<fieldset>
				<table class="loginform" align="center">
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" id="username"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" id="password"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><button name="submit" id="submit" value="Submit">Submit</button>
							<button name="reset" id="reset" value="Reset">Reset</button></td>
					</tr>
				</table>
			</fieldset>
		</form> 
	</div>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
	include('connect.php');
	$username = $db_user;
	$userInput = $_POST['username'];
	$password = $db_pass;
	$passInput = $_POST['password'];
	
	if(empty($userInput && $passInput))
	{
		echo "Enter your credentials<br>";
	}
	
	else
	{	
		if(($passInput === $password) && ($userInput === $username))
		{
			session_start();
			$_SESSION['userinput'] = $userInput;
			$_SESSION['userpass'] = $passInput;
			header("Location: inventory.php");
			exit;
		}
		
		else
		{
			if(($userInput != $username) || ($passInput != $password))
			{
				echo "Incorrect Username or Password<br>";
			}
			
		}
	}
	
}


?>