<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="./js/jquery-1.12.1.min.js"></script>
	<script src="./js/register.js"></script>
</head>

<body>
	<?php include "database.php" ?>
	
	<div id="register-content">
		<h1><img src="BusyBee.png"></h1>
		<form id="form" action="user.php" method="post">
			<label>
				Username:<br>
				<input id="username" type="text" name="name"><br>
			</label>
			<label>
				Email:<br>
				<input type="email" name="email"><br>
			</label>
			<label>
				Password:<br>
				<input id="pass" type="password" name="password"><br>
			</label>
			<label>
				Confirm password:<br>
				<input id="confirm" type="password" name="confirm"><br><br>
				<input id="submit" type="submit" value="Submit">
			</label>
		</form>
	</div>
</body>
</html>