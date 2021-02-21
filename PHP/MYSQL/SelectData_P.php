<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $stmt = $conn->prepare("SELECT MIN(Price) AS SmallestPrice FROM Product");
    $stmt = $conn->prepare("SELECT MAX(Price) AS LargestPrice FROM Product");
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
    <title>Select Data</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <!-- <th>SmallestPrice</th> -->
            <th>Largest Price</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <!-- <td><?php echo ($row['SmallestPrice']);?></td> -->
            <td><?php echo ($row['LargestPrice']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>