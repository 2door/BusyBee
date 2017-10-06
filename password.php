<!DOCTYPE html>
<html>
<head>
	<title>Forgot My Password</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php include "database.php" ?>

	<form action="settings.php" method="post">
		Email:<br>
		<input type="email" name="email"><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>