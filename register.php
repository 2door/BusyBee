<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
	<?php include "database.php" ?>
	
	<div id="register-content">
		<h1><img src="BusyBee.png"></h1>
		<form action="user.php" method="post">
			<label>
				Username:<br>
				<input type="text" name="name"><br>
			</label>
			<label>
				Email:<br>
				<input type="email" name="email"><br>
			</label>
			<label>
				Password:<br>
				<input type="password" name="password"><br>
			</label>
			<label>
				Confirm password:<br>
				<input type="password" name="confirm"><br><br>
				<input id="submit" type="submit" value="Submit">
			</label>
		</form>
	</div>
</body>
</html>