<?php
include 'database.php';
$msg = "invalid user and password";
if (isset($_POST['login'])) {
    $userdata = new database();
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $date = date('Y/m/d H:i:s');
    // $whe = "vEmail='$Email' and vPassword='$Password'";
    $users = $userdata->select('*', 'users', '', "vEmail='$email' and vPassword='$password'");
    $count = mysqli_num_rows($users);


    if ($count > 0) {
        $row = mysqli_fetch_array($users, MYSQLI_ASSOC);
        $_SESSION["userId"] = $row['iUserId'];
        $_SESSION["email"] = $row['vEmail'];

        $loginArray = array(
            'tsLastLogin' => $date
        );
        $updateLogin = $userdata->update('users', $loginArray, ' vEmail="' . $email . '"');
        header("location:welcome.php");
    } else {
        
        header("Location:login.php?Message={$msg}");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
    <style type="text/css">
        .login-panel {
            margin-top: 150px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="login.php" id="loginForm">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="you@example.com" type="email" name="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="........" type="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <input class="btn btn-lg btn-success btn-block" type="submit" name="login" value="Login">
                                </div>
                                <div class="mb-3">
                                    <a href="signup.php">Create Account</a>
                                </div>
                                <div id="error_msg"></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="validation.js"></script>
</body>

</html>