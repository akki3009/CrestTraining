<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $sql = "SELECT * FROM Customer LIMIT 3";
	$sql = "SELECT * FROM Customer WHERE Country='Poland' LIMIT 3";
	$stmt=$conn->query($sql);
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Select TOP</title>
</head>
<body>
	 <table border="1" align="center">
        <tr>
            <th>CustomerId</th>
            <th>CustomerName</th>
            <th>ContactName</th>
            <th>Address</th>
            <th>City</th>
            <th>PostalCode</th>
            <th>Country</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['CustomerId']);?></td>
            <td><?php echo ($row['CustomerName']);?></td>
            <td><?php echo ($row['ContactName']);?></td>
            <td><?php echo ($row['Address']);?></td>
            <td><?php echo ($row['City']);?></td>
            <td><?php echo ($row['PostalCode']);?></td>
            <td><?php echo ($row['Country']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
</body>
</html>
