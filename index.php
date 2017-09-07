<?php 
session_start();
if(isset($_POST['password']))
{
	$password=$_POST['password'];
	$password1=$_POST['password1'];
	if($password==$password1)
			$pword=password_hash("$password", PASSWORD_BCRYPT);
	else
			$error="Password Mismatch";
		
	if(isset($_SESSION['pword']))
echo $_SESSION['pword'];
}
	
			?>
			
<html>
<head>
<title>Password Management</title>
<body>

<form method="post" action="">
<input type="password" name="password" placeholder="password">
<input type="password" name="password1" placeholder="re enter password">
<button type="submit">Submit</button>
<?php if(isset($pword)) {$_SESSION['pword']=$pword; echo "Password Sent";} ?>
<?php if(isset($error)) echo $error; ?>
</form>
</body>
</html>