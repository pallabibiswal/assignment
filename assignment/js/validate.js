$(document).ready(function(){
   $(".submit_button").on("click",function(){

        	var first       = $.trim($("#first_input").val());
        	var last        = $.trim($("#last_input").val());
        	var middle      = $.trim($("#middle_input").val());
        	var suffix      = $.trim($("#suffix_input").val());
        	var dob         = $.trim($("#dob_input").val());
        	var employer    = $.trim($("#employer_input").val());
        	var email       = $.trim($("#email_input").val());
            var employement = $.trim($("#employement_input").val());
            var gender      = $.trim($("#gender_input").val());
            var status      = $.trim($("#status_input").val());
        	var rstreet     = $.trim($("#rstreet_input").val());
        	var rcity       = $.trim($("#rcity_input").val());
        	var rstate      = $.trim($("#rstate_input").val());
        	var rpin        = $.trim($("#rpin_input").val());
        	var rphone      = $.trim($("#rphone_input").val());
        	var rfax        = $.trim($("#rfax_input").val());
        	var ostreet     = $.trim($("#ostreet_input").val());
        	var ocity       = $.trim($("#ocity_input").val());
        	var ostate      = $.trim($("#ostate_input").val());
        	var opin        = $.trim($("#opin_input").val());
        	var ophone      = $.trim($("#ophone_input").val());
        	var ofax        = $.trim($("#ofax_input").val());			
            var form_type   = $(this).attr('name');
        	var letters 	= /^[a-z A-Z]*$/ ;
        	var digits		= /^[0-9]*$/;
            var email_regular_expression = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i;
        	var errors ="";
        
            if((first == null) || (first == "")) {
                 errors = "Please provide your first name!";
                 $("#first_error").css("color","red").html(errors);
                 $("#first_input").addClass("form_error"); 
                  
        	} 
            else{
                 $("#first_error").html("");
                 $("#first_input").removeClass("form_error");
            }
        	if (!first.match(letters)) {
                 errors = "\n*Please provide only letters!";
                  $("#first_error").css("color","red").html(errors);
                 $("#first_input").addClass("form_error"); 
                  
            }
            else{
                 $("#first_error").html("");
                 $("#first_input").removeClass("form_error");
            }
            if(form_type == "update"){
                if (!employement.match(letters)) {
                     errors = "\n*Please provide only letters!";
                      $("#employement_error").css("color","red").html(errors);
                     $("#employement_input").addClass("form_error"); 
                      
                }
                else{
                     $("#employement_error").html("");
                     $("#employement_input").removeClass("form_error");
                }
                
                 if((gender == null) || (gender == "")) {
                     errors = "Please specify your gender!";
                     $("#gender_error").css("color","red").html(errors);
                     $("#gender_input").addClass("form_error"); 
                      
                } 
                else if (!gender.match(letters)) {
                     errors = "\n*Please provide only letters!";
                      $("#gender_error").css("color","red").html(errors);
                     $("#gender_input").addClass("form_error"); 
                      
                }
                else{
                     $("#gender_error").html("");
                     $("#gender_input").removeClass("form_error");
                }
                
                if (!status.match(letters)) {
                     errors = "\n*Please provide only letters!";
                      $("#status_error").css("color","red").html(errors);
                     $("#status_input").addClass("form_error"); 
                      
                }
                else{
                     $("#status_error").html("");
                     $("#status_input").removeClass("form_error");
                }
            }
            if ((first.length < 3) || (first.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                 $("#first_error").css("color","red").html(errors);
                $("#first_input").addClass("form_error"); 
                 
            }
            else{
                 $("#first_error").html("");
                 $("#first_input").removeClass("form_error");
            }
            if (!last.match(letters)) {
                errors = "\n*Please provide only letters!";
                 $("#last_error").css("color","red").html(errors);
                 $("#last_input").addClass("form_error"); 
                
            } 
            else{
                 $("#last_error").html("");
                 $("#last_input").removeClass("form_error");
            }
            if ((last.length < 3) || (last.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                $("#last_error").css("color","red").html(errors);
                $("#last_input").addClass("form_error");   
            } 
            else{
                 $("#last_error").html("");
                 $("#last_input").removeClass("form_error");
            }   
            if (!middle.match(letters)) {
                errors = "\n*Please provide only letters!";
                $("#middle_error").css("color","red").html(errors);
                $("#middle_input").addClass("form_error"); 
                
            } 
            else{
                 $("#middle_error").html("");
                 $("#middle_input").removeClass("form_error");
            }   
            if (!suffix.match(letters)) {
                errors = "\n*Please provide only letters!";
                 $("#suffix_error").css("color","red").html(errors);
                $("#suffix_input").addClass("form_error");  
            }
            else{
                 $("#suffix_error").html("");
                 $("#suffix_input").removeClass("form_error");
            }
            if ((dob == "") || (dob == null)) {
                 errors = "\n*Please enter your date of birth.";
                 $("#dob_error").css("color","red").html(errors);
                $("#dob_input").addClass("form_error"); 
                    
            }
            else{
                 $("#dob_error").html("");
                 $("#dob_input").removeClass("form_error");
            }
            if (!email.match(email_regular_expression)) {
                 errors = "\n*That's not an email... (probably).";
                $("#email_error").css("color","red").html(errors);
                $("#email_input").addClass("form_error"); 
                   
            }
            else{
                 $("#email_error").html("");
                 $("#email_input").removeClass("form_error");
            }

            if(form_type == "submit"){
                var password    = $('#password_input').val();
                var repassword  = $('#repassword_input').val();
                    if ((password.length < 3) || (password.length > 30)) {
                       errors = "\n*should be within 3-30 characters.";
                       $("#password_error").css("color","red").html(errors);
                        $("#password_input").addClass("form_error"); 
                        
                    }
                    else{
                         $("#password_error").html("");
                         $("#password_input").removeClass("form_error");
                    }
                    if (repassword != password) {
                        errors = "\n*Confirm password mismatch.";
                        $("#repassword_error").css("color","red").html(errors);
                        $("#repassword_input").addClass("form_error"); 
                    }
                    else{
                         $("#repassword_error").html("");
                         $("#repassword_input").removeClass("form_error");
                    }
            }
            if (!ofax.match(digits)) {
                 errors = "\n*Please provide only digits!";
                 $("#ofax_error").css("color","red").html(errors);
                $("#ofax_input").addClass("form_error"); 
            }
            else{
                 $("#ofax_error").html("");
                 $("#ofax_input").removeClass("form_error");
            }
            if (!rfax.match(digits)) {
                 errors = "\n*Please provide only digits!";
                 $("#rfax_error").css("color","red").html(errors);
                $("#rfax_input").addClass("form_error"); 
            }
            else{
                 $("#rfax_error").html("");
                 $("#rfax_input").removeClass("form_error");
            }
            if (!employer.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 $("#employer_error").css("color","red").html (errors);
                 $("#employer_input").addClass("form_error");
            }
            else{
                 $("#employer_error").html("");
                 $("#employer_input").removeClass("form_error");
            }
            if ((rstreet.length < 5) || (rstreet.length > 200)) {
                errors = "\n*Should be within 5-200 characters.";
                $("#rstreet_error").css("color","red").html(errors);
                $("#rstreet_input").addClass("form_error"); 
            } 
            else{
                 $("#rstreet_error").html("");
                 $("#rstreet_input").removeClass("form_error");
            }  
        	if ((rcity.length < 3) || (rcity.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                $("#rcity_error").css("color","red").html(errors);
                $("#rcity_input").addClass("form_error"); 
                  
            }
            else if (!rcity.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 $("#rcity_error").css("color","red").html(errors);
                $("#rcity_input").addClass("form_error"); 
            } 
            else{
                 $("#rcity_error").html("");
                 $("#rcity_input").removeClass("form_error");
            }  
            if ((ostreet.length < 5) || (ostreet.length > 200)) {
                errors = "\n*Should be within 5-200 characters.";
                $("#ostreet_error").css("color","red").html(errors);
                $("#ostreet_input").addClass("form_error"); 
                  
            }
            else{
                 $("#ostreet_error").html("");
                 $("#ostreet_input").removeClass("form_error");
            } 
             if (!ocity.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 $("#ocity_error").css("color","red").html(errors);
                $("#ocity_input").addClass("form_error"); 
                 
            } 
            else if ((ocity.length < 3) || (ocity.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                $("#ocity_error").css("color","red").html(errors);
                $("#ocity_input").addClass("form_error"); 
                 
            }
            else{
                 $("#ocity_error").html("");
                 $("#ocity_input").removeClass("form_error");
            }   
            if (!rphone.match(digits) || rphone.length != 10) {
                errors = "\n*Enter a valid phone number.";
                $("#rphone_error").css("color","red").html(errors);
                $("#rphone_input").addClass("form_error"); 
                 
            }
            else{
                 $("#rphone_error").html("");
                 $("#rphone_input").removeClass("form_error");
            }
            if (!ophone.match(digits) || ophone.length != 10) {
                errors = "\n*Enter a valid phone number.";
                $("#ophone_error").css("color","red").html(errors);
                $("#ophone_input").addClass("form_error"); 
                
            }
            else{
                 $("#ophone_error").html("");
                 $("#ophone_input").removeClass("form_error");
            }
            if (!rpin.match(digits)) {
                errors = "\n*Please provide only digits!";
                $("#rpin_error").css("color","red").html(errors);
                $("#rpin_input").addClass("form_error"); 
                 
            }  
            else{
                 $("#rpin_error").html("");
                 $("#rpin_input").removeClass("form_error");
            }  
            if (!opin.match(digits)) {
                 errors = "\n*Please provide only digits!";
                 $("#opin_error").css("color","red").html(errors);
                $("#opin_input").addClass("form_error"); 
                 
            }
            else{
                 $("#opin_error").html("");
                 $("#opin_input").removeClass("form_error");
            } 
            if (!rstate.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 $("#rstate_error").css("color","red").html(errors);
                $("#rstate_input").addClass("form_error"); 
                 
            }   
            else if ((rstate.length < 3) || (rstate.length > 30)) {
               errors = "\n*Should be within 3-30 characters.";
               $("#rstate_error").css("color","red").html(errors);
                $("#rstate_input").addClass("form_error"); 
               
            }
            else{
                 $("#rstate_error").html("");
                 $("#rstate_input").removeClass("form_error");
            }    
            if (!ostate.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 $("#ostate_error").css("color","red").html(errors);
                $("#ostate_input").addClass("form_error"); 
               
            }    
            else if ((ostate.length < 3) || (ostate.length > 30)) {
               errors = "\n*Should be within 3-30 characters."; 
               $("#ostate_error").css("color","red").html(errors);
                $("#ostate_input").addClass("form_error"); 
                
            }
            else{
                 $("#ostate_error").html("");
                 $("#ostate_input").removeClass("form_error");
            }    
            if(errors.length != 0){
            	return false;
            }
            else{
                return true;
            }
    });
   
});