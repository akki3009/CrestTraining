<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pattern For WILDCARD

    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE City LIKE 'ber%'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE City LIKE '%le%'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE City LIKE '_ondon'");
    $stmt = $conn->prepare("SELECT * FROM Customer WHERE City LIKE 'L_n_o_'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE City LIKE '[!bsp]%'");
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
    <h3 align="center">Wildcard Data Pattern</h3>
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