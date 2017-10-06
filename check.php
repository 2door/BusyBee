<?php
	include "database.php";
	$db = new Database();
	$smtp = $db->prepare("UPDATE items SET done=1 where item_id='".$_POST['id']."';");
	$smtp->execute();
?>