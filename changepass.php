<!DOCTYPE html>
<html>
<head>
<title>Busy Bee</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
	<?php include "navbar.php" ?>
	<?php include "database.php" ?>
	
	<div id="content">	
	<h1 class="cont">Change Password</h1>
		<form action="settings.php" method="post">
			<p class="par">Current Password:</p>
			<p class="par"><input type="password" name="current"></p>
			<p class="par">New Password:</p>
			<p class="par"><input type="password" name="password"></p>
			<p class="par">Confirm Password:</p>
			<p class="par"><input type="password" name="confirm"></p>
			<p class="par"><input type="submit" name="Submit"></p>
		</form>
	</div>
</body>
</html>