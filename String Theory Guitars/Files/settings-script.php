<?php 

session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');

$con = mysqli_connect('localhost', 'root', '','');
$db = mysqli_select_db($con,'string_theory');
	
$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con,$old_pass);
$old_pass = strip_tags($old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con,$new_pass);
$new_pass = strip_tags($new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con,$new_pass1);
$new_pass1 = strip_tags($new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT Email, Password FROM persons
WHERE Email ='".$_SESSION['email']."'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$orig_pass = $row['Password'];
if ($new_pass != $new_pass1)
	{
	header('location: settings.php?error=The two passwords don\'t match');
	}
else
	{
	if ($old_pass == $orig_pass)
		{
		$query = "UPDATE  persons SET Password = '".$new_pass."' WHERE Email = '".$_SESSION['email']."'";
		mysqli_query($con,$query);
		header('location: settings.php?error="Password Updated"');
		}
	else
		header('location: settings.php?error="Wrong Password"');
	}
?>