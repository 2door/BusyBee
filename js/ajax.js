$(document).ready( function(){
	$('.check').click( function(){
		Id = event.target.id;
 		$.post("./check.php", {
 			id: Id
 		}, function() {
 			$('tr#' + Id).css("background-color","#92FF88");
 			$('.'+Id).remove();
 		});
 	});
});