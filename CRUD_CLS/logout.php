<?php
include 'connection.php';
session_start();
unset($_SESSION["userId"]);
unset($_SESSION["email"]);
session_destroy();

header("location:login.php");
?>