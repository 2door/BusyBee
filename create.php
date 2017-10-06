<?php
	session_start();
	require "database.php";
	$name = $_POST['listname'];
	$db = new Database();
	if($name !== ''){
			
		
		$stmt = $db->prepare("INSERT INTO lists VALUES(NULL,:creator,:title,:shared,:notif);"); //Step 2
		$stmt->bindValue(':creator', $_SESSION['id'], SQLITE3_INTEGER); // Step 3!
		$stmt->bindValue(':title', $name, SQLITE3_TEXT); // Step 3
		$stmt->bindValue(':shared', 0, SQLITE3_BLOB); // Step 3
		$stmt->bindValue(':notif', 0, SQLITE3_BLOB); // Step 3
		$results = $stmt->execute(); //Step 4
	}else {
		echo "<script>alert('List name must not be empty!');</script>";
	}
	//$db->exec("INSERT INTO lists VALUES(NULL,'".$_SESSION['id']."','$name',0,0);");
	header("Location:mainpage.php");
?>