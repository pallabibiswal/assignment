$(document).ready(function(){
	$("#signin").click(function(){			
		var email_input = $.trim($("#email").val());
		var password_input = $.trim($("#password").val());
		var errors = "";
		if((email_input == null) || (email_input == "")) {
            errors = "Please provide your email_id!";
            $("#login-error").css("color","red").html(errors);
            $("#email").addClass("form_error"); 
        } 
        else{
            $("#login-error").html("");
            $("#email").removeClass("form_error");
        }

		if((password_input == null) || (password_input == "")) {
            errors = "password field can not be blank!";
            $("#password-error").css("color","red").html(errors);
            $("#password").addClass("form_error"); 
        } 
        else{
            $("#password-error").html("");
            $("#password").removeClass("form_error");
        }
  	if(errors.length != 0){
  		return false;
  	}
  	else{
		$.ajax({
			type: "POST",
			url: "response.php",
			data: {
				email: email_input,
				password: password_input
			},
			dataType: "json",
			success: function(response){
				if(response.validate == 'true'){
				window.location = "profile.php";
				}
				else{
					$("#login-error").css("color","red").html(response.reason);
				}	
			}
		});
	}
	});
});

