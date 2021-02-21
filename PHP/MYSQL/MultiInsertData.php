<?php
$server="localhost";
$username="root";
$password="";
$dbname="crestDB";

try
{
	$conn=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$conn->beginTransaction();
	$conn->exec("INSERT INTO Person(firstname,lastname,email) VALUES('Hitesh','Chaudhary','hiteshch@gmail.com')");
	$conn->exec("INSERT INTO Person(firstname,lastname,email) VALUES('Jay','Gediya','gediyajay@gmail.com')");
	$conn->exec("INSERT INTO Person(firstname,lastname,email) VALUES('Jayesh','Parmar','jayeshp@gmail.com')");
	$conn->commit();
	echo "New Record inserted Succesfully";

}catch(PDOException $e){
	$conn->rollback();
  	echo "Error: " . $e->getMessage();
}
$conn = null;
?>