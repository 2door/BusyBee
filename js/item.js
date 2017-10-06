$(document).ready( function(){
	$('#newItem').submit( function(){
		itemname = $("#itemName").val();
		parent = $("#itemparent").val();
 		$.post("./additem.php", {
 			itemname: itemname,
 			parent: parent
 		}, function(responseText) {
 			$("#tablecontents").append(responseText);
 		});
 	});
 	$('.create').click( function(){
		itemname = $("#itemName").val();
		parent = $("#itemparent").val();
 		$.post("./additem.php", {
 			itemname: itemname,
 			parent: parent
 		}, function(responseText) {
 			$("#tablecontents").append(responseText);
 			 $("#itemName").val("");
 		
 		});
 	});
});