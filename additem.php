<?php
	session_start();
	require "database.php";

	$name = $_POST['itemname'];
	$parent = $_POST['parent'];

	$db = new Database();
	$db->exec("INSERT INTO items VALUES(NULL,'$parent','$name',0,0);");
	header("Location:mylist.php?id=".$parent);
?>