<?php
$server="localhost";
$username="root";
$password="";
$dbName="crestDB";
try
{
	$conn=new PDO("mysql:host=$server;dbname=$dbName",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="CREATE TABLE vote(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	age INT(5),
	CHECK(age >=18)
)";
	$conn->exec($sql);
	echo "Table vote is created Succesfully";
}
catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>