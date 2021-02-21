<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("INSERT INTO Person (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  $firstname = "Praharsh";
  $lastname = "Khatri";
  $email = "pk@example.com";
  $stmt->execute();

  $firstname = "Dhaval";
  $lastname = "Parmar";
  $email = "dhavalparmar@example.com";
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>