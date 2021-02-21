<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="crestDB";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="CREATE TABLE Person(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";
	$conn->exec($sql);
	echo "Table Person Created Succesfully<br>";
}catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>