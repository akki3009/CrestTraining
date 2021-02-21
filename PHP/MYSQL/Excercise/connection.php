<?php
$server="localhost";
$username="root";
$password="";
$dbname="excercise";
try
{
	$conn=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// echo "Connected";

}catch(PDOException $e)
{
	echo "Error:".$e->getMessage();
}
?>