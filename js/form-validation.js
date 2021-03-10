$(document).ready(function() {
    $("#candidate-form")
        .validate({
            rules: {
                "fname": {
                    required: true                
                },
				 
                "email": {
                    required: true,
                    email: true
                } 
            },
            messages: {
                "fname": {
                    required: "Please enter First name"
                },
				 
                "email": {
                    required: "Please enter an email",
                    email: "Email is invalid"
                } 
            },
            submitHandler: function(
                form
            ) { // for demo
                alert(
                    'valid form submitted'
                ); // for demo
                return false; // for demo
            }
        });

    $("#client-form").validate({
        rules: {
            "clientemail": {
                required: true,
                email: true
            },

            "clientfname": {
                required: true,
                minlength: 5
            }
        },
        messages: {
            "clientemail": {
                required: "Please enter an E-mail",
                email: "Email is invalid"
            },
            "clientfname": {
                required: "Please enter First Name",
                 
            }
        },
        submitHandler: function(
            form
        ) { // for demo
            alert(
                'valid form submitted'
            ); // for demo
            return false; // for demo
        }
    });
	
	
	$("#clientpage-form").validate({
        rules: {
			"firstname": {
                required: true  
            },
			 "lastname": {
                 required: true  
             },
			
			"email": {
                required: true,
                email: true				
            },
            "companyname": {
                required: true,
                 
            },
			 "message": {
                required: true,    
            } 
        },
        messages: {
            "firstname": {
                required: "Please enter First Name", 
            },
			
			"lastname": {
                required: "Please enter Last Name",
                
            },
            "email": {
                required: "Please enter an E-mail", 
              email: "Email is invalid"				
            },
			"companyname": {
                required: "Please enter Company Name", 
            },
			"message": {
                required: "Please enter message", 
            }
        },
        submitHandler: function(
            form
        ) { // for demo
            alert(
                'Thank you,Your Form is Submitted'
            ); // for demo
            return false; // for demo
        }
    });
});