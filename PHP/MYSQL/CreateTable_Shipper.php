<?php
$server="localhost";
$username="root";
$password="";
$dbName="crestDB";
try
{
	$conn=new PDO("mysql:host=$server;dbname=$dbName",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="CREATE TABLE Shipper(
	ShipperId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	ShipperName VARCHAR(30) NOT NULL,
	Phone VARCHAR(12) NOT NULL
)";
	$conn->exec($sql);
	echo "Table Shipper is created Succesfully";
}
catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>