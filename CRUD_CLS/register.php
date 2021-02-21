
<?php
if(isset($_POST['submit']))
{
include 'connection.php';

$FirstName = $_POST['firstName'];
$LastName = $_POST['lastName'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$ContactNo = $_POST['contactNo'];
$Address = $_POST['address'];
$date = date('Y/m/d H:i:s');

$UserQuery = "insert into users(vFirstName,vLastName,vAddress,vEmail,vPassword,biContactNo,tsAddedDate)
values('" . $FirstName . "','" . $LastName . "','" . $Address . "','" . $Email . "','" . $Password . "','" . $ContactNo . "','" . $date . "')";

$UserResult = mysqli_query($conn, $UserQuery);
print_r($UserQuery);
print_r($UserResult);
die();
if ($UserResult) {
    echo "success";
    header("location:.signup.php");
} else {
    echo "unsuccess";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrappopper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <div id="header"></div> -->
    <section class="contact">
        <div class="content">
            <h2>MyMarket</h2>
        </div>
        <div class="container">
            <div class="contactform">
                <form action="#" method="post" id="registerForm">
                    <div>
                        <h2>Sign Up</h2>
                    </div>

                    <div class="inputbox">
                        <input type="text" name="firstName" required="">
                        <span>First Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="lastName" required="required">
                        <span>Last Name</span>
                    </div>

                    <div class="inputbox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required="required">
                        <span>password</span>
                    </div>

                    <div class="inputbox">
                        <input type="number" name="contactNo" required="required">
                        <span>Contact No</span>
                    </div>
                    <div class="inputbox">
                        <textarea name="address" required="required"></textarea>
                        <span>Address</span>
                    </div>


                    <div class="inputbox">
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>