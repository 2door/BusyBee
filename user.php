<?php
	session_start();
	require "database.php";
	include "authenticate.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$salt = sha1(time());
	$encrypted_password = sha1($salt."--".$password);

	$db = new Database();
	$db->exec("INSERT INTO users VALUES(NULL,'$name','$email','$salt','$encrypted_password');");

	auth($db,$name,$password);
?>