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
     
    $stm = $db->prepare("SELECT * FROM lists WHERE (list_id=:id);"); //Step 2
    $stm->bindValue(':id',$thread_id, SQLITE3_INTEGER); // Step 3
    $lists = $stm->execute(); //Step 4

    $list = $lists->fetchArray();  
    if(!accessResource($list['creator'])){
        header("Location:mainpage.php");
        exit(); 
    }

    echo "<title>";
    h($list['title']);
    echo "</title>";
?> 
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="./js/ajax.js"></script>
<script src="./js/item.js"></script>
<script src="./js/createItem.js"></script>
</head>

<body>
	<?php include "navbar.php" ?>
	
	<div id="content">
        <?php
		echo "<h1 class='cont'>";
        h($list['title']);
        echo "</h1>";
        ?>
        <img src="bell.png" class="cont"/>
        <table id="tablecontents">
        <?php 

        
        $stmt = $db->prepare("SELECT * FROM items WHERE (list_parent=:id);"); //Step 2
        $stmt->bindValue(':id',$thread_id, SQLITE3_INTEGER); // Step 3
        $items = $stmt->execute(); //Step 4

        while(($row = $items->fetchArray())){
            if($row['done'] == 0) {
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
            }
            else{
                echo "<tr>
                        <td class='left'>
                        <img id='done' src='css/check.png'/>";

                h($row['title']);

                echo "</td>
                    <td class='right'>
                        <img  class='elem' src='clock.png'/>
                        <img class='elem' src='share.png'/>
                        <img class='elem' src='bin.png'/>
                    </td>
                    </tr>";
            }
            }
        ?>
        </table>
        <table>
        <tr>
            <td class='left'>
                <form id="newItem" method='post'>
                    <input id="itemName" type='text' name='itemname' placeholder='Add an item...'>
                    <?php echo "<input id='itemparent' type='hidden' name='parent' value='".$thread_id."'>" ?>
                    <input class="create" id='add' type='button' value='Create'>
                </form>
                </td>
                <td class='right'></td>
            </tr>
        </table>

	</div>
</body>

</html>
