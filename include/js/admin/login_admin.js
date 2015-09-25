$(document).ready(function(){
	
	$("#admin-form").validate({
		rules: {
			email: {
				required: true,
				email: true,
			},
			password: {
				required: true,
				minlength: 5,
				remote: {
					url: "admin/login/check",
					type: "post",
					data: {
						email: function(){
								return $('#email').val();
						}
					}
				}
			}
		},
		messages: {
			email: {
				required: "Please enter a Email",
				email: "Please enter a valid Email"
			},
			password: {
				required: "Please enter a password",
				minlength:"The password is too short",
				remote: "Invalid Email or password"
			}
		},
		errorPlacement: function(error,element){
			error.insertAfter(element.parent('.email-pass'));
		},
		submitHandler: function(){
			
		}
	});
});