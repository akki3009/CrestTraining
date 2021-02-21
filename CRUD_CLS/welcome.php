<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
// echo "hello";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrappopper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/slim.min.js"></script>
    <style>
        h1 {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <!-- <div id="header"></div> -->
    <?php
    include 'header.html';
    ?>
    <h1>Welcome to home page</h1>
</body>

</html>