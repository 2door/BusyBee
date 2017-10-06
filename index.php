<!DOCTYPE html>
<html>
<head>
	<title>The app</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
<?php include "database.php" ?>

<div id="nav">
	<h1><img src="BusyBee.png"></h1>
	<ul>
		<li><a href="login.php">Log In</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a class="active" href="#">Home</a></li>
	</ul>
</div>
<div id="separator"></div>

<div id="content">
	<div id="center">
		<h1>What it's about</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<a id="button" href="register.php">Register Now!</a>
	</div>
</div>

</body>
</html>