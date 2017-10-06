 
$(document).ready( function(){
	$('#form').submit( function() {
		$('#confirm').css("background-color","white");
		$('#pass').css("background-color","white");
		$('#username').css("background-color","white");

		if( $('#pass').val() !== $('#confirm').val() ) {
			alert("Password and Confirm Password don't match");
			$('#confirm').css("background-color","#FF6455");
            event.preventDefault();
		}
		if($('#pass').val().length < 1){
			alert("Password length is invalid");
			$('#pass').css("background-color","#FF6455");
            event.preventDefault();
		}
		if($('#username').val().length < 1){
			alert("Username is invalid");
			$('#username').css("background-color","#FF6455");
            event.preventDefault();
		} 
 	
 	});

});