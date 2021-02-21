<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT Orders.OrderId, Customer.CustomerName, Customer.City  FROM Orders RIGHT JOIN Customer ON  Orders.CustomerId = Customer.CustomerId ");
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
    <title>RIGHT JOIN Qury</title>
</head>
<body>
    <h2 align="center">RIGHT JOIN</h2>
    <table border="1" align="center">
        <tr>
            <th>CustomerName</th>
            <th>City</th>
            <th>OrderId</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['CustomerName']);?></td>
            <td><?php echo ($row['City']);?></td>
            <td><?php echo ($row['OrderId']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>