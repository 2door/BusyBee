<?php
	function auth($db,$user,$password) {
		if($user === ''){
			header("Location:login.php");
			exit();
		}//de mutat!
		

		$stm = $db->prepare("SELECT * FROM users WHERE (username=:user);"); //Step 2
    	$stm->bindValue(':user',$user, SQLITE3_TEXT); // Step 3
    	$users = $stm->execute(); //Step 4
    	$row = $users->fetchArray();

		//$row = $db->querySingle("SELECT * FROM users WHERE(username = '$user');");
		if(sha1($row['salt']."--".$password) == $row['password']) {
			$_SESSION['id'] = $row['user_id'];
			header("Location:mainpage.php");
			exit();
		} else {
			header("Location:login.php");
			exit();
		}
	}
?>