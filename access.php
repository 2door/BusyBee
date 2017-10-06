<?php
	session_start();
	require "database.php";
	include "authenticate.php";

	$user = $_POST['name'];
	$password = $_POST['password'];

	$db = new Database();
	auth($db,$user,$password);
?>