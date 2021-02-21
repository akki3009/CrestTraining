<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="crestDB";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="INSERT INTO Person(firstname,lastname,email) VALUES('Akash','Agrawal','akashag@gmail.com') ";
	$conn->exec($sql);
	$sql="INSERT INTO Person(firstname,lastname,email) VALUES('Yogin','Chauhan','yogin@gmail.com') ";
	$conn->exec($sql);
	$sql="INSERT INTO Person(firstname,lastname,email) VALUES('Vishal','Dolera','vishald@gmail.com') ";
	$conn->exec($sql);
	echo "Data Inserted Succesfully<br>";
}catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>