<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT COUNT(ProductId) AS CountPID, AVG(Price) AS AveragePrice,SUM(Price) AS TotalPrice FROM Product");
	$stmt->execute();
    // $stmt = $conn->prepare("SELECT AVG(Price) AS AveragePrice FROM Product");
    // $stmt->execute();
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
    <title>COUNT SUM AVG Data</title>
</head>
<body>
    <h3 align="center">COUNT SUM AVG Data</h3>
    <table border="1" align="center">
        <tr>
            <th>Count Product Id</th>
            <th>Average Of Price</th>
            <th>Total Of Price</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['CountPID']);?></td>
            <td><?php echo ($row['AveragePrice']);?></td>
            <td><?php echo ($row['TotalPrice']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>