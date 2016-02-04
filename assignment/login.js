$(document).ready(function(){
	$("#signin").click(function(){	
		var sign = $("#signin").val();
		console.log(sign);
		var email=$("#email").val();
		var password=$("#password").val();
		console.log(email,password);
		$.ajax({
		    type: "POST",
		    url: "response.php",
			data: "email="+email+"password="+password,
			dataType: "json",
			success: function(response){
				if(response.validate == 1){
					console.log(response);
				}
				else{
					console.log(response);
				}				
			}
		});
		return false;
	});
});
