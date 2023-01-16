const validation = new JustValidate("#signup");

validation
     .addField('#fname', [
	   {
      rule: 'required',
      errorMessage: 'Field is required',
    },
    {
      rule: 'minLength',
      value: 3,
    },
    {
      rule: 'maxLength',
      value: 15,
    },
    ])
	
	     .addField('#sname', [
	   {
      rule: 'required',
      errorMessage: 'Field is required',
    },
    {
      rule: 'minLength',
      value: 3,
    },
    {
      rule: 'maxLength',
      value: 15,
    },
    ])
	
    .addField("#username", [
        {
            rule: "required"
        },
		{
		 validator: (value) => () => {
			 return fetch("validate-username.php?username=" + encodeURIComponent(value))
					 .then(function(response) {
						 return response.json();
					 })
					 .then(function(json) {
						 return json.available;
					 });
		 },
		 errorMessage: "username already taken"
		},
    ])
	
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
		{
		 validator: (value) => () => {
			 return fetch("validate-email.php?email=" + encodeURIComponent(value))
					 .then(function(response) {
						 return response.json();
					 })
					 .then(function(json) {
						 return json.available;
					 });
		 },
		 errorMessage: "email already taken"
		},
    ])
	
	.addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
	
    .addField("#password_conf", [
        {
            validator: (value, fields) => {
               return value === document.getElementById("password").value;
            },
            errorMessage: "Passwords should match"
        }
    ])
	
    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });
	