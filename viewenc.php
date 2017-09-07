<?php 
session_start();
if(isset($_POST['submit']))
{
	session_destroy();
	$delete="deleted";
}
else
echo $_SESSION['pword'];

?>

			
<html>
<head>
<title>Password Encrypted</title>
<body>

<form method="post" action="">
<?php if(!isset($delete)){?>
<input type="submit" name="submit" value="Delete">
<?php }else{ echo "Deleted";}?>
</form>
</body>
</html>
