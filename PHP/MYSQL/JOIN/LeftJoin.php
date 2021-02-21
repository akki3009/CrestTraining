<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT Customer.CustomerName, Orders.OrderId FROM Customer LEFT JOIN Orders ON  Customer.CustomerId = Orders.CustomerId ORDER BY Customer.CustomerName");
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
    <title>LEFT JOIN Qury</title>
</head>
<body>
    <h2 align="center">LEFT JOIN</h2>
    <table border="1" align="center">
        <tr>
            <th>CustomerName</th>
            <th>OrderId</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['CustomerName']);?></td>
            <td><?php echo ($row['OrderId']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>