<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="crestDB";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="CREATE TABLE Customer(
	CustomerId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	CustomerName VARCHAR(30) NOT NULL,
	ContactName VARCHAR(30) NOT NULL,
	Address VARCHAR(50) NOT NULL,
	City VARCHAR(20) NOT NULL,
	PostalCode VARCHAR(10) NOT NULL,
	Country VARCHAR(20) NOT NULL
	)";
	$conn->exec($sql);
	echo "Table Customer Created Succesfully<br>";
}catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>