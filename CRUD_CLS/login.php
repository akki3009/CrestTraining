<?php
if (isset($_POST['submit'])) {
    include 'connection.php';
    session_start();
    // $userId=$_POST['userId'];
    $Email = $_POST['email'];
    $Password = md5($_POST['password']);
    $date = date('Y/m/d H:i:s');

    $loginQuery = "select * from users where vEmail='$Email' and vPassword='$Password'";
    // print_r($loginQuery);
    // die();
    $loginResult = mysqli_query($conn, $loginQuery);


    // print_r($loginResult);

    $loginRow = mysqli_fetch_array($loginResult);
    if ($loginRow) {

        $_SESSION["userId"] = $loginRow['iUserId'];
        $_SESSION["email"] = $loginRow['vEmail'];

        $updateLogin = "update users set tsLastLogin='" . $date . "' where vEmail='$Email'";
        $updateResult = mysqli_query($conn, $updateLogin);
        if ($updateResult) {
            header("location:welcome.php");
        } else {
            echo "unsuccess";
        }
        // print_r($_SESSION["userId"]);
        // die();

    } else {
        echo "invalid user and password";
        header("location:login.php");
    }
}
?>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <!-- <script src="bootstrappopper.min.js"></script> -->
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/slim.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>

    <script src="jquery/validations.js"></script>

    <style>
        .bg1 {
            background-color: wheat;

        }

        form .error {
            color: red;
        }

        .borderLine {
            border: 1px solid;
            background-color: blanchedalmond;
            /* background-attachment: transparent; */
        }

        .error {
            color: red;
        }
    </style>
</head>

<body class="bg1">

    <div class="container">
        <div class="py-3 text-center">
            <h2>Login Form</h2>
        </div>

        <div class="row">

            <div class="col-md-3 ">
            </div>
            <div class="col-md-5 py-3 borderLine">
                <h4 class="mb-3 mr-3">Login</h4>
                <form method="POST" id="loginForm">

                    <!-- <input type="hidden" name="userId" id="userId"> -->
                    <div class="mb-3">
                        <label>Email</label><span class="text-muted"></span>
                        <input type="text" class="form-control" placeholder="you@example.com" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label>password</label><span class="text-muted"></span>
                        <input type="password" class="form-control" placeholder="........" id="password" name="password">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" id="submit" name="submit">Login</button>
                    </div>
                    <div class="mb-3">
                        <a href="signup.php">Create Account</a>
                        <!-- <input type="password" class="form-control" placeholder="........" id="password" name="password"> -->
                    </div>
                    <div id="error_msg"></div>
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