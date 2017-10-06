<!DOCTYPE html>
<?php 
	session_start();
	if(isset($_SESSION['id'])){
		session_destroy();
		header("Location:index.php");
	}
?>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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