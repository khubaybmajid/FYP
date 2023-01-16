const validation = new JustValidate("#update-form");

validation
    .addField('#fname', [
        {
            rule: 'required',
            errorMessage: 'First name is required',
        },
        {
            rule: 'minLength',
            value: 3,
            errorMessage: 'First name must be at least 3 characters long',
        },
        {
            rule: 'maxLength',
            value: 15,
            errorMessage: 'First name must not be more than 15 characters long',
        },
    ])
    .addField('#sname', [
        {
            rule: 'required',
            errorMessage: 'Last name is required',
        },
        {
            rule: 'minLength',
            value: 3,
            errorMessage: 'Last name must be at least 3 characters long',
        },
        {
            rule: 'maxLength',
            value: 15,
            errorMessage: 'Last name must not be more than 15 characters long',
        },
    ])
    .addField("#email", [
        {
            rule: "required",
            errorMessage: 'Email is required',
        },
        {
            rule: "email",
            errorMessage: 'Invalid email format',
        },
        {
            validator: (value) => () => {
                return fetch(`validate-email.php?email=${encodeURIComponent(value)}`)
                    .then((response) => response.json())
                    .then((json) => json.available);
            },
            errorMessage: "Email already taken",
        },
    ])
    .addField("#password", [
        {
            rule: "required",
            errorMessage: "Password is required",
        },
        {
            rule: "password",
            errorMessage: "Password must be at least 8 characters long, must contain at least one uppercase letter, one lowercase letter, and one number",
        },
    ])
    .addField("#password_conf", [
        {
            validator: (value, fields) => {
                return value === document.getElementById("password").value;
            },
            errorMessage: "Passwords should match",
        },
    ])
    .onSuccess((event) => {
        event.preventDefault();
        document.getElementById("update-form").submit();
    });
