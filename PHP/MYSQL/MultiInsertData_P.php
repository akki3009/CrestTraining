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
	$conn->exec("INSERT INTO Product(ProductName,Unit,Price) VALUES('Chairs','10 boxes x 20 bags','18')");
	$conn->exec("INSERT INTO Product(ProductName,Unit,Price) VALUES('Chang','24 - 12 oz bottles','19')");
	$conn->exec("INSERT INTO Product(ProductName,Unit,Price) VALUES('Aniseed Syrup','12 - 550 ml bottles','10')");
	$conn->exec("INSERT INTO Product(ProductName,Unit,Price) VALUES('Chef Antons Cajun Seasoning','48 - 6 oz jars','22')");
	$conn->exec("INSERT INTO Product(ProductName,Unit,Price) VALUES('Chef Antons Gumbo Mix','46 boxes','25')");
	$conn->commit();
	echo "New Record inserted Succesfully";

}catch(PDOException $e){
	$conn->rollback();
  	echo "Error: " . $e->getMessage();
}
$conn = null;
?>