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
	$stmt = $db->prepare("INSERT INTO users VALUES(NULL,:name,:email,:salt,:pass);"); //Step 2
	$stmt->bindValue(':name', $name, SQLITE3_TEXT); // Step 3!
	$stmt->bindValue(':email', $email, SQLITE3_TEXT); // Step 3
	$stmt->bindValue(':salt', $salt, SQLITE3_TEXT); // Step 3
	$stmt->bindValue(':pass', $encrypted_password, SQLITE3_TEXT); // Step 3
	$results = $stmt->execute(); //Step 4

	auth($db,$name,$password);
?>