<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";

try
{
	$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="UPDATE person SET lastname='Saheb' where id=5";

	$stmt=$conn->prepare($sql);
	$stmt->execute();

	echo $stmt->rowCount()."Record Updated Succefully";
}catch(PDOException $e){
	echo $sql . "<br>".$e->getMessage();
}
$conn=null;
?>