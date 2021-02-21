<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // IN Program

    // $stmt = $conn->prepare("SELECT * FROM Product WHERE Price BETWEEN 10 AND 20");
    $stmt = $conn->prepare("SELECT * FROM Product WHERE ProductName BETWEEN 'Aniseed Syrup' AND 'Northwoods Cranberry Sauc' ORDER BY ProductName");
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
    <title>WILDCARD Pattern Data</title>
</head>
<body>
    <h3 align="center">Beetween Data</h3>
    <table border="1" align="center">
        <tr>
            <th>ProductId</th>
            <th>ProductName</th>
            <th>Unit</th>
            <th>Price</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['ProductId']);?></td>
            <td><?php echo ($row['ProductName']);?></td>
            <td><?php echo ($row['Unit']);?></td>
            <td><?php echo ($row['Price']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>