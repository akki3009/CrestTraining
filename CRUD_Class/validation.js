$(document).ready(function () {
    // var email = $('#email').val();

    $("#registerForm").validate({
        rules: {
            firstName: {
                required: true,
                minlength: 3
            },
            lastName: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true

            },
            password: {
                required: true,
                minlength: 6
            }

        },
        messages: {
            firstName: {
                required: 'Enter First Name',
                minlength: 'First Name must be atleast 3 character'
            },
            lastName: {
                required: 'Enter Last Name ',
                minlength: 'Last Name must be atleast 3 character'
            },
            email: "Pls Enter Valid Email",
            password: {
                required: 'Enter password',
                minlength: 'Password must be atleast 6 character'
            }
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
    $("#categoryForm").validate({
        rules: {
            image: {
                required: true,
            },
            categoryName: {
                required: true,
                minlength: 3
            },
            order: {
                required: true,
                minlength: 1
            },

        },
        messages: {
            image: {
                required: 'Insert Image',
            },
            categoryName: {
                required: 'Enter Category ',
                minlength: 'Category Name must be atleast 3 character'
            },
            order: {
                required: 'Enter Order',
                minlength: 'pls Enter order'
            },
        },
    });

    $("#categoryForm1").validate({
        rules: {
            categoryName: {
                required: true,
                minlength: 3
            },
            order: {
                required: true,
                minlength: 1
            },

        },
        messages: {
            categoryName: {
                required: 'Enter Category ',
                minlength: 'Category Name must be atleast 3 character'
            },
            order: {
                required: 'Enter Order',
                minlength: 'pls Enter order'
            },
        },
    });
    $("#productForm").validate({
        rules: {
            image: {
                required: true,
            },
            productName: {
                required: true,
                minlength: 3
            },
            categoryName: {
                required: {
                    depends: function (element) {
                        return $("#categoryName").val() == "none";
                    }
                }
            },
            productPrice: {
                required: true,
            },
            salePrice: {
                required: true,
            },
            quantity: {
                required: true,
            },
            order: {
                required: true,
            },


        },
        messages: {
            image: {
                required: 'Insert Image',
            },
            productName: {
                required: 'Enter Product Name',
                minlength: 'Product Name must be atleast 3 character'
            },
            categoryName: {
                required: 'Select Category',

            },
            productPrice: {
                required: 'Enter Price',
            },
            salePrice: {
                required: 'Enter Sale Price',
            },
            quantity: {
                required: 'Enter Quantity',

            },
            order: {
                required: 'Enter Order',

            },
        },
    });
    $("#productForm1").validate({
        rules: {

            productName: {
                required: true,
                minlength: 3
            },
            categoryName: {
                required: {
                    depends: function (element) {
                        return $("#categoryName").val() == "none";
                    }
                }
            },
            productPrice: {
                required: true,
            },
            salePrice: {
                required: true,
            },
            quantity: {
                required: true,
            },
            order: {
                required: true,
            },


        },
        messages: {

            productName: {
                required: 'Enter Product Name',
                minlength: 'Product Name must be atleast 3 character'
            },
            categoryName: {
                required: 'Select Category',

            },
            productPrice: {
                required: 'Enter Price',
            },
            salePrice: {
                required: 'Enter Sale Price',
            },
            quantity: {
                required: 'Enter Quantity',

            },
            order: {
                required: 'Enter Order',

            },
        },
    });
});
