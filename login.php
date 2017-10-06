<!DOCTYPE html>
<?php 
	session_start();
	session_destroy();
?>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
	<?php include "database.php" ?>

	<div id="login-content">
		<h1><img src="BusyBee.png"></h1>
		<form action="access.php" method="post">
			<label>
				Username:<br>
				<input type="text" name="name"><br>
			</label>
			<label>
				Password:<br>
				<input type="password" name="password"><br><br>
				<input id="submit" type="submit" value="Submit">
			</label>
		</form>
	</div>
</body>
</html>