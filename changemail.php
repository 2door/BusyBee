<!DOCTYPE html>
<html>
<head>
<title>Busy Bee</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>

<body>
	<?php include "navbar.php" ?>
	<?php include "database.php" ?>
	
	<div id="content">	
	<h1 class="cont">Change email</h1>
		<form action="settings.php" method="post">
			<p class="par">Current email:</p>
			<p class="par"><input type="password" name="current"></p>
			<p class="par">New email:</p>
			<p class="par"><input type="password" name="password"></p>
			<p class="par">Confirm email:</p>
			<p class="par"><input type="password" name="confirm"></p>
			<p class="par"><input type="submit" name="Submit"></p>
		</form>
	</div>
</body>
</html>