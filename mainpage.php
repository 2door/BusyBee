<!DOCTYPE html>
<?php session_start() ?>
<?php
    require "security.php";
    if(!loggedIn()){
        header("Location:index.php");
        exit(); 
    }
?> 
<html>
<head>
<title>Busy Bee</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
	<?php include "navbar.php" ?>
    <?php require "database.php" ?>
	
	<div id="content">
		<h1 class="cont">Lists</h1>
        <ul>
        	<li><img src="add.png" class="elem" /></li>
        </ul>
        <table>
        <?php
            $db = new Database();
            $lists = $db->query("SELECT * FROM lists WHERE (creator=".$_SESSION['id'].");");
            while(($row = $lists->fetchArray())){
                echo "<tr>
                        <td class='left'><a href='http://cs139.dcs.warwick.ac.uk/~u1528601/cs139/mylist.php?id=".$row['list_id']."'>".$row['title']."</a></td>
                        <td class='right'>
                            <img class='elem' src='share.png'/>
                            <img class='elem' src='bin.png'/>
                        </td>
                    </tr>";
            }
        ?>
            <tr>
                <td class='left'>
                    <form action='create.php' method='post'>
                        <input type='text' name='listname' placeholder='Create a list...'>
                        <input id='add' type='submit' value='Create'>
                    </form>
                </td>
                <td class='right'></td>
            </tr> 
        </table>

	</div>
</body>

</html>