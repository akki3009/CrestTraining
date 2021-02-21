$(document).ready(function () {
    // var email = $('#email').val();

    $("#categoryForm").validate({
        rules: {
            image: {
                required: true,
            },
            categoryName: {
                required: true,
            },
            order: {
                required: true,
                minlength: 1
            },

        },
        messages: {
            image: {
                required: 'Enter First Name',
            },
            categoryName: {
                required: 'Enter Last Name ',
            },
            order: {
                required: 'Enter password',
                minlength: 'Password must be atleast 1 character'
            },
        },
    });


    $("#loginForm").validate({
        rules: {

            email: {
                required: true,
                email: true

            },
            password: {
                required: true,
                minlength: 6
            },

        },
        messages: {
            email: "Pls Enter Valid Email",
            password: {
                required: 'Enter password',
                minlength: 'Password must be atleast 6 character'
            },
        },
    });
});