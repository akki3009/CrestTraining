<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="CREATE DATABASE crestDB";
	$conn->exec($sql);
	echo "DATABASE Created Succesfully<br>";
}catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>