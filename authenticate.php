<?php
	function auth($db,$user,$password) {
		if($user === ''){
			header("Location:login.php");
			exit();
		}//de mutat!

		$row = $db->querySingle("SELECT * FROM users WHERE(username = '$user');");
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