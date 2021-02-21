<?php
$server="localhost";
$username="root";
$password="";

try
{
	$conn=new PDO("mysql:host=$server",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="CREATE DATABASE excercise";
	$conn->exec($sql);

	echo "Database creates Succfully";
}catch(PDOException $e)
{
	echo $sql . "<br>".$e->getMessage();
}
$conn=null;
?>