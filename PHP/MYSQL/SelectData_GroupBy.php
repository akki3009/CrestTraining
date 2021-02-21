<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $stmt = $conn->prepare("SELECT COUNT(CustomerId), Country FROM Customer GROUP BY Country");
    $stmt = $conn->prepare("SELECT COUNT(CustomerId), Country FROM Customer GROUP BY Country ORDER BY COUNT(CustomerId) DESC");
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
    <title>Group By</title>
</head>
<body>
    <h2 align="center">Group By</h2>
    <table border="1" align="center">
        <tr>
            <th>CustomerId</th>
            <th>Country</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['COUNT(CustomerId)']);?></td>
            <td><?php echo ($row['Country']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>