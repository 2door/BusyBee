<?php
	session_start();
	require "database.php";

	$name = $_POST['listname'];
	$db = new Database();
	$db->exec("INSERT INTO lists VALUES(NULL,'".$_SESSION['id']."','$name',0,0);");
	header("Location:mainpage.php");
?>