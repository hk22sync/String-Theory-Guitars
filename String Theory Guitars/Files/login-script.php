<?php
$con = mysqli_connect('localhost', 'root', '','');
$db = mysqli_select_db($con,'string_theory');


$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con,$email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con,$password);
$password = strip_tags($password);
$password = MD5($password);

$query = "SELECT Email, Password FROM persons WHERE Email='$email'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if ($num == 0)
	{
	$m = "<span style='color: red'>Email Doesn't Exist</span>";
	header('location: login.php?ml1='.$m);
	}
else
	if ($password == $row['Password'])
		{
		session_start();
		$_SESSION['email']=$row['Email'];
		header('location: home.php');		
		}
	else
		{
		$m = "<span style='color: red'>Incorrect Password</span>";
		header('location: login.php?ml2='.$m);
		}



?>