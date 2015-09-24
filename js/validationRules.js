var form;
(function()
{
	validate();
	function validate()
	{
     form = $("#registerForm");
		
	form.validate(
	{
	    rules: {
	      firstname: "required",
	      lastname: "required",
	      username: {
	          required: true,
	          minlength: 2
	      },
	      password: {
	          required: true,
	          minlength: 5
	      },
	      confirm_password: {
	          required: true,
	          minlength: 5,
	          equalTo : "#password"

	      },
	      email: {
	      	  required: true,
	      	  email: true
	      }
	    },
	   
	      
	});
}
})();
