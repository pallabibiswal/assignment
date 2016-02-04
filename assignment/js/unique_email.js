$(document).ready(function(){
	//validation of email id on keypress
	$("#email_input").on("keyup",function(){			
		var email_input = $.trim($("#email_input").val());

		var detectCorrectEmail = validateCorrectEmail(email_input);
		console.log(detectCorrectEmail);
		if (detectCorrectEmail === 'false') {
			$("#email_error").css("color","red").html("*Please provide a valid emeil id!");
         	$("#email_input").removeClass("form_error"); 	
		}
		else{
			$.ajax({
				type: "POST",
				url: "unique_email.php",
				data: {
					email: email_input
				},
				dataType: "json",
				success: function(response){
					if(response.validate == 'true'){
						$("#email_error").css("color","red").html(response.reason);
	                 	$("#email_input").addClass("form_error"); 
					}
					else{
						$("#email_error").css("color","red").html("");
	                 	$("#email_input").removeClass("form_error"); 
					}	
				}
			});
		}				
		
	});

});
function validateCorrectEmail(email_addr) {
	console.log(email_addr);
	var email_regular_expression = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i;
	if (email_regular_expression.test(email_addr)) {
		console.log(email_addr);
        return 'true';
		}
    else{
        return 'false';
    }
}
