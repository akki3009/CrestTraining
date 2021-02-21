<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="crestDB";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="INSERT INTO Person(firstname,lastname,email) VALUES('Ayush','Desai','aayush@gmail.com') ";
	$conn->exec($sql);
	$last_id=$conn->lastInsertId();
	echo "Data Inserted Succesfully. Last Inserted Id ".$last_id."<br>";
}catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>