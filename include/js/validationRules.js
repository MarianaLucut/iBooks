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
	     messages: {
	       firstname: "Please enter your firstname",
	       lastname: "Please enter your lastname ",
	       username: {
	       	   required: "Please enter a username",
	       	   minlength:"Your username must be at least 2 characters "
	       },
	       password: {
			   required: "Please enter a password",
	       	   minlength:"Your password must be at least 5 characters "
	       },
	       confirm_password: {
			   required: "Please enter a password",
	       	   minlength:"Your password must be at least 5 characters "
	       },
	    }	      
	});
        
        form = $("#student-form");
        form.validate(
	{
            rules: {
                username: 
                {
                    required: true,
                    minlength: 2
                },
                password: 
                {
                    required: true,
                    minlength: 5
                }
            },
            messages:
            {
                username:
                {
                    required: "Please enter a username"	       	   
                },
                password: 
                {
                    required: "Please enter a password",
	       	    minlength:"Your password must be at least 5 characters"
                }
            }
        });
        
        form = $("#user-form");
        form.validate(
	{
            rules: {
                username: 
                {
                    required: true,
                    minlength: 2
                },
                password: 
                {
                    required: true,
                    minlength: 5
                }
            },
            messages:
            {
                username:
                {
                    required: "Please enter a username"	       	   
                },
                password: 
                {
                    required: "Please enter a password",
	       	    minlength:"Your password must be at least 5 characters"
                }
            }
        });
    }
    
})();
