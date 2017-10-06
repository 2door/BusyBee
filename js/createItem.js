$(document).ready( function(){
	$('#newItem').submit( function() {
		$('#itemName').css("background-color","white");

		if($('#itemName').val().length < 1){
			alert("Plese insert a name");
			$('#itemName').css("background-color","#FF6455");
            event.preventDefault();
		} 
 	
 	});
 	$('.create').click( function() {
		$('#itemName').css("background-color","white");

		if($('#itemName').val().length < 1){
			alert("Plese insert a name");
			$('#itemName').css("background-color","#FF6455");
            event.preventDefault();
		} 
 	
 	});

});