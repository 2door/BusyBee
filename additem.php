<?php
	session_start();
	require "database.php";
	include "security.php";

	$name = $_POST['itemname'];
	$parent = $_POST['parent'];

	if($name != ''){

		$db = new Database();
		$stmt = $db->prepare("INSERT INTO items VALUES(NULL,:listparent,:title,:deadline,:done);"); //Step 2
		$stmt->bindValue(':listparent', $parent, SQLITE3_INTEGER); // Step 3!
		$stmt->bindValue(':title', $name, SQLITE3_TEXT); // Step 3
		$stmt->bindValue(':deadline', 0 , SQLITE3_INTEGER); // Step 3
		$stmt->bindValue(':done', 0 , SQLITE3_BLOB); // Step 3
		$results = $stmt->execute(); //Step 4

		$row = $db->querySingle("SELECT * FROM items ORDER BY item_id DESC LIMIT 1;");
		echo "<tr class='special' id='".$row['item_id']."'>
                    <td class='left'>
                        <form class='".$row['item_id']."'>
                		  <input class='check' id='".$row['item_id']."' type='checkbox' name='item1'>
                        </form>";
    	h($row['title']);

		echo "</td>
	            <td class='right'>
	            	<img  class='elem' src='clock.png'/>
	            	<img class='elem' src='share.png'/>
	            	<img class='elem' src='bin.png'/>
	            </td>
	            </tr>";
	} else {
		echo "<script>alert('Item name must not be empty!');</script>";
	}
	//$db->exec("INSERT INTO items VALUES(NULL,'$parent','$name',0,0);");
	//header("Location:mylist.php?id=".$parent);
	 
?>