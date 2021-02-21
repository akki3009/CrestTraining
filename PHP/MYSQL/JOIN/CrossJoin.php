<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT Customer.CustomerName, Customer.ContactName,Orders.OrderId FROM Customer CROSS JOIN Orders");
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
    <title>CROSS JOIN Qury</title>
</head>
<body>
    <h2 align="center">CROSS JOIN</h2>
    <table border="1" align="center">
        <tr>
            <th>CustomerName</th>
            <th>ContactName</th>
            <th>OrderId</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['CustomerName']);?></td>
            <td><?php echo ($row['ContactName']);?></td>
            <td><?php echo ($row['OrderId']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>