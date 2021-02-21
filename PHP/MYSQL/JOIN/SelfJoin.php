<?php
$server="localhost";
$username="root";
$password="";
$dbname="crestDB";

try
{
	$conn=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="SELECT A.CustomerName AS CustomerName1,B.CustomerName AS CustomerName2,A.Country FROM Customer A,Customer B WHERE A.CustomerId <> B.CustomerId AND A.Country=B.Country ORDER BY A.Country";
	$q=$conn->query($sql);

}catch(PDOException $e)
{
	echo "Error :".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Self Join</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Customer Name1</th>
			<th>Customer Name2</th>
			<th>Country</th>
		</tr>
		<?php while ($row = $q->fetch()) {?>
		<tr>
			<td><?php echo ($row['CustomerName1']);?></td>
			<td><?php echo ($row['CustomerName2']);?></td>
			<td><?php echo ($row['Country']);?></td>
		</tr>
		<?php
			}
			?>
	</table>
</body>
</html>