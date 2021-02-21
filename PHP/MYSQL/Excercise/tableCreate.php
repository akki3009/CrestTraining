<?php
$server="localhost";
$username="root";
$password="";
$dbname="excercise";

try
{
	$conn=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="CREATE TABLE Departments(
	DepartmentId INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
	DepartmentName VARCHAR(255)
	)";

	$conn->exec($sql);
	echo "Table is creatd Success";

	$sql="CREATE TABLE Employee(
	EmployeeId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	First_Name VARCHAR(255),
	Last_Name VARCHAR(255),
	DepartmentId INT(11)
	)";
	$conn->exec($sql);
	echo "Table is creatd Success";
}
catch(PDOException $e)
{
	echo "Error".$e->getMessage();
}
$conn=null;
?>