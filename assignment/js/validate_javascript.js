function validateForm(form_type){

        	var first       = document.validate_form.first.value;
        	var last        = document.validate_form.last.value;
        	var middle      = document.validate_form.middle.value;
        	var suffix      = document.validate_form.suffix.value;
        	var dob         = document.validate_form.dob.value;
        	var employer    = document.validate_form.employer.value;
        	var email       = document.validate_form.email.value;
        	var rstreet     = document.validate_form.rstreet.value;
        	var rcity       = document.validate_form.rcity.value;
        	var rstate      = document.validate_form.rstate.value;
        	var rpin        = document.validate_form.rpin.value;
        	var rphone      = document.validate_form.rphone.value;
        	var rfax        = document.validate_form.rfax.value;
        	var ostreet     = document.validate_form.ostreet.value;
        	var ocity       = document.validate_form.ocity.value;
        	var ostate      = document.validate_form.ostate.value;
        	var opin        = document.validate_form.opin.value;
        	var ophone      = document.validate_form.ophone.value;
        	var ofax        = document.validate_form.ofax.value;			

        	var letters 	= /^[a-z A-Z]*$/ ;
        	var digits		= /^[0-9]*$/;
            var email_regular_expression = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i;
        	var errors ="";
        	if((first == null) || (first == "")) {
                 errors = "*Please provide your first name!";
                 document.getElementById("first").innerHTML = errors;
        	} 
        	if (!first.match(letters)) {
                 errors = "\n*Please provide only letters!";
                  document.getElementById("first").innerHTML = errors;
            }
            if ((first.length < 3) || (first.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                 document.getElementById("first").innerHTML = errors;  
            }
            if (!last.match(letters)) {
                errors = "\n*Please provide only letters!";
                 document.getElementById("Last").innerHTML = errors;
                
            } 
            if ((last.length < 3) || (last.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                 document.getElementById("last").innerHTML = errors;  
            }    
            if (!middle.match(letters)) {
                errors = "\n*Please provide only letters!";
                document.getElementById("middle").innerHTML = errors;
                
            }    
            if (!suffix.match(letters)) {
                errors = "\n*Please provide only letters!";
                 document.getElementById("suffix").innerHTML = errors; 
            }
            if ((dob == "") || (dob == null)) {
                 errors = "\n*Please enter your date of birth.";
                  document.getElementById("dob").innerHTML = errors;
                    
            }
            if (!email.match(email_regular_expression)) {
                 errors = "\n*That's not an email... (probably).";
                document.getElementById("email").innerHTML = errors;
                   
            }

            if(form_type == "register"){
                var password    = document.getElementById('password').value;
                var repassword  = document.getElementById('repassword').value;
                    if ((password.length < 3) || (password.length > 30)) {
                       errors = "\n*should be within 3-30 characters.";
                        document.getElementById("password_error").innerHTML = errors;
                        
                    }
                    if (repassword != password) {
                        errors = "\n*Confirm password mismatch.";
                        document.getElementById("repassword_error").innerHTML = errors;
                    }
            }
            if (!ofax.match(digits)) {
                 errors = "\n*Please provide only digits!";
                document.getElementById("ofax").innerHTML = errors;
            }
            if (!rfax.match(digits)) {
                 errors = "\n*Please provide only digits!";
                 document.getElementById("rfax").innerHTML = errors;
            }
            if (!employer.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 document.getElementById("employer").innerHTML = errors;
            }
            if ((rstreet.length < 5) || (rstreet.length > 200)) {
                errors = "\n*Should be within 5-200 characters.";
                document.getElementById("rstreet").innerHTML = errors;
            }   
        	if ((rcity.length < 3) || (rcity.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                document.getElementById("rcity").innerHTML = errors;
                  
            }
            if (!rcity.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 document.getElementById("rcity").innerHTML = errors;
            }    
            if ((ostreet.length < 5) || (ostreet.length > 200)) {
                errors = "\n*Should be within 5-200 characters.";
                document.getElementById("ostreet").innerHTML = errors;
                  
            } 
             if (!ocity.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 document.getElementById("ocity").innerHTML = errors;
                 
            }   
            if ((ocity.length < 3) || (ocity.length > 30)) {
                errors = "\n*Should be within 3-30 characters.";
                document.getElementById("ocity").innerHTML = errors;
                 
            }   
            if (!rphone.match(digits) || rphone.length != 10) {
                errors = "\n*Enter a valid phone number.";
                document.getElementById("rphone").innerHTML = errors;
                 
            }
            if (!ophone.match(digits) || ophone.length != 10) {
                errors = "\n*Enter a valid phone number.";
                document.getElementById("ophone").innerHTML = errors;
                
            }
            if (!rpin.match(digits)) {
                errors = "\n*Please provide only digits!";
                document.getElementById("rpin").innerHTML = errors;
                 
            }    
            if (!opin.match(digits)) {
                 errors = "\n*Please provide only digits!";
                 document.getElementById("opin").innerHTML = errors;
                 
            } 
            if (!rstate.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 document.getElementById("rstate").innerHTML = errors;
                 
            }    
            if ((rstate.length < 3) || (rstate.length > 30)) {
               errors = "\n*Should be within 3-30 characters.";
               document.getElementById("rstate").innerHTML = errors;
               
            }     
            if (!ostate.match(letters)) {
                 errors = "\n*Please provide only letters!";
                 document.getElementById("ostate").innerHTML = errors;
               
            }    
            if ((ostate.length < 3) || (ostate.length > 30)) {
               errors = "\n*Should be within 3-30 characters."; 
               document.getElementById("ostate").innerHTML = errors;
                
            }    
            if(errors.length != 0){
            	return false;
            }
   
}