<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT Orders.OrderId, Customer.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customer ON Orders.CustomerId = Customer.CustomerId");
	$stmt->execute();
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
    <title>INNER JOIN Qury</title>
</head>
<body>
	<h2 align="center">INNER JOIN</h2>
    <table border="1" align="center">
        <tr>
            <th>OrderId</th>
            <th>CustomerName</th>
            <th>OrderDate</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['OrderId']);?></td>
            <td><?php echo ($row['CustomerName']);?></td>
            <td><?php echo ($row['OrderDate']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>