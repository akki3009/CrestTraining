<?php
// if (isset($_POST['submit'])) {
//     include 'connection.php';

//     $FirstName = $_POST['firstName'];
//     $LastName = $_POST['lastName'];
//     $Email = $_POST['email'];
//     $Password = $_POST['password'];
//     $ContactNo = $_POST['contactNo'];
//     $Address = $_POST['address'];
//     $date = date('Y/m/d H:i:s');

//     $UserQuery = "insert into users(vFirstName,vLastName,vAddress,vEmail,vPassword,biContactNo,tsAddedDate)
// values('" . $FirstName . "','" . $LastName . "','" . $Address . "','" . $Email . "','" . $Password . "','" . $ContactNo . "','" . $date . "')";

//     $UserResult = mysqli_query($conn, $UserQuery);

//     if ($UserResult) {
//         header("location:login.php");
//     } else {
//         echo "unsuccess";
//     }
// }
include 'connection.php';
if (isset($_POST['submit'])) {
    $FirstName = $_POST['firstName'];
    $LastName = $_POST['lastName'];
    $Email = $_POST['email'];
    $Password = md5($_POST['password']);
    $ContactNo = $_POST['contactNo'];
    $Address = $_POST['address'];
    $date = date('Y/m/d H:i:s');
    if ($Email != '') {
        $checkEmail = "select vEmail from users where vEmail='" . $Email . "'";
        $resultCheckEmail = mysqli_query($conn, $checkEmail);
        $checkRow = mysqli_num_rows($resultCheckEmail);
        if ($checkRow >= 1) {
            echo "<script>alert('Email already Taken');</script>";
        } 
        else {
            $UserQuery = "insert into users(vFirstName,vLastName,vAddress,vEmail,vPassword,biContactNo,tsAddedDate)
            values('" . $FirstName . "','" . $LastName . "','" . $Address . "','" . $Email . "','" . $Password . "','" . $ContactNo . "','" . $date . "')";
          

            $UserResult = mysqli_query($conn, $UserQuery);

            if ($UserResult) {
                echo "<script>alert('Successfully Register');window.location.href='login.php';</script>";
                // header("location:login.php");
            } else {
                echo "unsuccess";
            }

        }
    }
}
?>
<html>

<head>
    <title>signUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrappopper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/slim.min.js"></script>


    <style>
        .bg1{
            background-color: wheat;
        }
        .error {
            color: red;
        }
        </style>
</head>

<body class="bg1">

    <div class="container">
        <div class="py-3 text-center">
            <h2>MyMarket</h2>
        </div>
        <!-- <form action="#" method="POST"> -->
        <div class="row">

            <div class="col-md-3 ">
            </div>
            <div class="col-md-5 ">
                <h4 class="mb-3">Sign Up</h4>
                <form method="POST" id="registerForm">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>First name</label>
                        <input type="text" class="form-control" name="firstName">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastName">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Email</label><span class="text-muted"></span>
                    <input type="text" class="form-control" placeholder="you@example.com" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label>password</label><span class="text-muted"></span>
                    <input type="password" class="form-control" placeholder="........" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address" id="address" name="address">
                </div>


                <div class="mb-3">
                    <label>Contact No</label><span class="text-muted"></span>
                    <input type="text" class="form-control" placeholder="Contact No" id="contactNo" name="contactNo" >
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" id="submit" name="submit">Register</button>
                </div>
    </form>
            </div>
        </div>
            <!-- <div class="col-md-3 ">
            </div> -->  
            <!-- </form> -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="jquery/validations.js"></script>
</body>
</html>
