<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";

try
{
	$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$conn->prepare("SELECT * FROM person LIMIT 10");
	$stmt->execute();
}catch(PDOException $e){
	echo "ERROR :" . $e->getMessage();
}
$conn=null;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Limit Data</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Reg Date</th>
		</tr>
		<?php while($row=$stmt->fetch()){?>
		<tr>
			<td><?php echo($row['id']);?></td>
			<td><?php echo($row['firstname']);?></td>
			<td><?php echo($row['lastname']);?></td>
			<td><?php echo($row['reg_date']);?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>