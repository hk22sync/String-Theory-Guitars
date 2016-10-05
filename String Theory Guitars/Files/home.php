<!DOCTYPE HTML>
<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');

?>
<html>
	<head>
	<title>String Theory Guitars | Homepage</title>
	
	</head>
	
	<body background="images/background.jpg">
		<br>
		<form action="confirm.php" method="GET">
			<center>
			<div style="background-color: #ffffff; width: 850px;font-family: copperplate gothic light;">
				<!-- Code for Header-->
				<div style="width: 840px;">
					<div style="float: left;margin: 20px 0 0 20px;">
							<a href="index.php"><img src="images/logo.png"></a>
					</div>
					
					<div style="width:80px; float: right; height: 25px; margin: 40px 35px 30px 0px; padding-top:5px; background-color: rgb(156,1,0);border-radius: 5px;">
						<a href="logout-script.php" style="color: #ffffff; font-size: 0.8em; text-decoration: none;">Logout!</a>
					</div>
					<div style="width:80px; float: right; height: 25px; margin: 80px -80px 30px 0px; padding-top:5px; background-color: rgb(156,1,0);border-radius: 5px;">
						<a href="settings.php" style="color: #ffffff; font-size: 0.8em; text-decoration: none;">Settings!</a>
					</div>
				</div>
				<hr size="2" color="rgb(156,1,0)" width="95%" style="clear: both;">
				<br>
				<!--Code for main content-->
				<table border="0" width="100">
					<tr>
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/1.jpg" height="150" width="150"><br><br>
							#1 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 45000<br>
							<input type="checkbox" name="guitars[]" value="1">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/2.jpg" height="150" width="150"><br><br>
							#2 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 65000<br>
							<input type="checkbox" name="guitars[]" value="2">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/3.jpg" height="150" width="150"><br><br>
							#3 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 63000<br>
							<input type="checkbox" name="guitars[]" value="3">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;" >
							<img src="images/4.jpg" height="150" width="150"><br><br>
							#4 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 16500<br>
							<input type="checkbox" name="guitars[]" value="4">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
					</tr>
				</table>
				<br>			
				<hr size="1" color="c0c0c0" width="90%">
				<br>
				<table border="0" width="100">
					<tr>
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/5.jpg" height="150" width="150"><br><br>
							#5 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 19200<br>
							<input type="checkbox" name="guitars[]" value="5">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/6.jpg" height="150" width="150"><br><br>
							#6 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 21000<br>
							<input type="checkbox" name="guitars[]" value="6">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/7.jpg" height="150" width="150"><br><br>
							#7 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 65800<br>
							<input type="checkbox" name="guitars[]" value="7">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;" >
							<img src="images/8.jpg" height="150" width="150"><br><br>
							#8 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 30750<br>
							<input type="checkbox" name="guitars[]" value="8">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
					</tr>
				</table>
				<br>			
				<hr size="1" color="c0c0c0" width="90%">
				<br>
				<table border="0" width="100">
					<tr>
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/9.jpg" height="150" width="150"><br><br>
							#9 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 62170<br>
							<input type="checkbox" name="guitars[]" value="9">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/10.jpg" height="150" width="150"><br><br>
							#10 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 51100<br>
							<input type="checkbox" name="guitars[]" value="10">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;border-right: 1pt solid #cccccc;" >
							<img src="images/11.jpg" height="150" width="150"><br><br>
							#11 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 78250<br>
							<input type="checkbox" name="guitars[]" value="11">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
						
						<td style="text-align: center;" >
							<img src="images/12.jpg" height="150" width="150"><br><br>
							#12 &nbsp;&nbsp;&nbsp;&nbsp;Rs. 86320<br>
							<input type="checkbox" name="guitars[]" value="12">
							<input type="submit" name="submit" value = "Add!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 50px; border-radius:5px; ">
							<span>
						</td>
					</tr>
				</table>
				<br><br>
				
				<input type="submit" name="buynow" value = "Buy Now!" style=" background:rgb(156,1,0);border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px; ">
				<br><br>
				<hr size="1" color="c0c0c0" width="95%">
				<br>
			</div>
			</center>
		</form>
		<br>
	</body>
</html>