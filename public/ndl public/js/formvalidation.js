/**
 * This file is part of the Monument
 *
 *
 *
 * PHP version 7.2.13
 *
 * @package     Monument
 * @copyright   2014 monument.com
 * @version     1.0.0
 */
/**
 * classHTML
 *
 * Handles all HTML Dom manipulation
 */
const classForm = function () {
    // This object
    const form  = this;
    // Environment object. See main.js initClasses()
    form.envObj = null;

    /**

     * The init function of the class

     *

     * @param envObj Environment object. See main.js initClasses()

     */form

    form.init = function (envObj) {
        form.envObj = envObj;
        form.initClass();
    };

    form.initClass = function () {
        form.Login();
        form.ResetPassword();
        form.Registration();
        form.Template();
        form.UpdateTemplate();
        form.ProductType();
        form.ProductColor();
        form.ProductPolish();
        form.ProductShape();
        form.ProductSide();
        form.ProductMis();
        form.ProductOrder();
    };

    /**

     * Contains any html initiation requirements

     */

    form.ResetPassword = function () {
        $("form[name='reset_password']").validate({
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
    }

    form.Login = function () {

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
    }

    form.Registration = function () {
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
                    minlength: 5
                },
                password_confirmation: {
                    required : true,
                    minlength: 5,
                    equalTo  : "#password"
                },
            },
            // Specify validation error messages
            messages     : {
                first_name           : "Please enter your firstname",
                last_name            : "Please enter your lastname",
                password             : {
                    required : "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                password_confirmation: {
                    required             : "Please provide a Confirm password",
                    minlength            : "Your password_confirmation must be at least 5 characters long",
                    password_confirmation: "password confirmation must matched password"
                },
                email                : "Please enter a valid email address"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    }

    form.Template = function () {
        $("form[name='ndl-template-form']").validate({


            // Specify validation rules
            rules        : {

                template_number    : "required",
                preview            : "required",
                product_description: "required",
                layout             : "required",
                size               : "required",
                color              : "required",
            },
            // Specify validation error messages
            messages     : {
                template_number    : "Please enter Template Number",
                preview            : "Please Select Image",
                product_description: "Please enter Description",
                layout             : "Please enter Layout",
                size               : "Please enter size",
                color              : "Please enter color",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });
    }

    form.UpdateTemplate = function () {
        $("form[name='ndl-update-template-form']").validate({


            // Specify validation rules
            rules        : {

                template_number    : "required",
                product_description: "required",
                layout             : "required",
                size               : "required",
                color              : "required",
            },
            // Specify validation error messages
            messages     : {
                template_number    : "Please enter Template Number",
                product_description: "Please enter Description",
                layout             : "Please enter Layout",
                size               : "Please enter size",
                color              : "Please enter color",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });
    }

    form.ProductType = function () {
        $("form[name='product_type']").validate({
            // Specify validation rules
            rules        : {
                title: "required",
            },
            // Specify validation error messages
            messages     : {
                title: "Please enter Product Type Title",

            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    }

    form.ProductColor = function () {
        $("form[name='color']").validate({
            // Specify validation rules
            rules        : {
                title: "required",
            },
            // Specify validation error messages
            messages     : {
                title: "Please enter Product Color"

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }

    form.ProductPolish = function () {
        $("form[name='polish']").validate({
            // Specify validation rules
            rules        : {
                title: "required",
            },
            // Specify validation error messages
            messages     : {
                title: "Please enter Product Polish Title",

            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    }

};
