(function () {
    $("form[name='login_form']").validate({
        // Specify validation rules
        rules        : {
            password: "required",
            email   : {
                required: true,
                email   : true
            },

        },
        messages     : {
            password: "Please enter password",
            email   : "Please enter a valid email address"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
    $("form[name='forgot_password']").validate({
        // Specify validation rules
        rules        : {
            email: {
                required: true,
                email   : true
            },

        },
        messages     : {

            email: "Please enter a valid email address"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
    $("form[name='reset_password']").validate({
        // Specify validation rules
        rules        : {
            password: "required",
            email   : {
                required: true,
                email   : true
            },

        },
        messages     : {
            password: "Please enter password",
            email   : "Please enter a valid email address"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $("form[name='registration']").validate({

        rules        : {

            first_name           : "required",
            last_name            : "required",
            email                : {
                required: true,
                email   : true
            },
            password             : {
                required : true,
                minlength: 8
            },
            password_confirmation: {
                required : true,
                minlength: 8,
                equalTo  : "#password"
            },
        },
        // Specify validation error messages
        messages     : {
            first_name           : "Please enter your firstname",
            last_name            : "Please enter your lastname",
            password             : {
                required : "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            password_confirmation: {
                required             : "Please provide a Confirm password",
                minlength            : "Your password_confirmation must be at least 8 characters long",
                password_confirmation: "password confirmation must matched password"
            },
            email                : "Please enter a valid email address"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
})();
