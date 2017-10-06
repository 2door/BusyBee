<!DOCTYPE html>

<?php session_start() ?>
<?php
    require "database.php";
    $thread_id = $_GET["id"];
    $db= new Database();
    require "security.php";
    if(!loggedIn()){
        header("Location:index.php");
        exit(); 
    }
?> 

<html>
<head>

<?php  
    $list= $db->querySingle("SELECT * FROM lists WHERE (list_id=".$thread_id.");");  

    if(!accessResource($list['creator'])){
        header("Location:mainpage.php");
        exit(); 
    }

    echo "<title>".$list['title']."</title>";
?> 
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
	<?php include "navbar.php" ?>
	
	<div id="content">
        <?php
		echo "<h1 class='cont'>".$list['title']."</h1>";
        ?>
        <img src="bell.png" class="cont"/>
        <ul>
        	<li><img src="add.png" class="elem"/></li>
        </ul>
        <table>
        <?php 

         $items = $db->query("SELECT * FROM items WHERE (list_parent=".$thread_id.");");
         while(($row = $items->fetchArray())){
            echo "<tr>
                   <td class='left'>
                        <form>
                		<input type='checkbox' name='item1'>".$row['title']."
                        </form>
                    </td>
                    <td class='right'>
                    	<img  class='elem' src='clock.png'/>
                    	<img class='elem' src='share.png'/>
                    	<img class='elem' src='bin.png'/>
                    </td>
                    </tr>";
            }
        ?>
        <tr>
            <td class='left'>
                <form action='additem.php' method='post'>
                    <input type='text' name='itemname' placeholder='Add an item...'>
                    <?php echo "<input type='hidden' name='parent' value='".$thread_id."'>" ?>
                    <input id='add' type='submit' value='Create'>
                </form>
                </td>
                <td class='right'></td>
            </tr> 
        </table>

	</div>
</body>

</html>
