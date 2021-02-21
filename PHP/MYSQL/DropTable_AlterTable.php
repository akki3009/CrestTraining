<?php
$server="localhost";
$username="root";
$password="";
$dbName="crestDB";
try
{
	$conn=new PDO("mysql:host=$server;dbname=$dbName",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//$sql="ALTER TABLE study ADD DateofBirth date";
	$sql="ALTER TABLE Shipper DROP Phone";
	// $sql="DROP TABLE Shipper";
	$conn->exec($sql);
	echo "Table Shipper is Affected";

}
catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;

?>