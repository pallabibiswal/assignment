$(document).ready(function(){
	//validation of email id on keypress
	$("#email_input").on("keypress",function(){			
		var email_input = $.trim($("#email_input").val());
		$.ajax({
			type: "POST",
			url: "valid_email.php",
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
					console.log(email_input);
					$("#email_error").css("color","red").html("");
                 	$("#email_input").removeClass("form_error"); 
				}	
			}
		});
	});
	//validate the uniqueness of email id
	$("#email_input").on("blur",function(){			
		var email_input = $.trim($("#email_input").val());
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
	});
});