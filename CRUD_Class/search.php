<?php
session_start();
require 'database.php';
$categorydata = new database();
if (!$_SESSION['userId']) {
    header("Location:login.php");
    exit;
}
$where = "";
if (isset($_POST['search']) && !empty($_POST['search'])) {
    $search = $_POST['search'];
    $where .= " WHERE vName LIKE '%$search%' OR iOrder LIKE '%$search%' OR tiStatus LIKE '%$search%' OR tsAddedDate LIKE '%$search%'";
} else if (isset($_POST['statuses']) && !empty($_POST['statuses'])) {
    $status = $_POST['statuses'];
    if ($status == "Active") {
        $where .= " WHERE tiStatus = '$status'";
    }
    if ($status == "Inactive") {
        $where .= " WHERE tiStatus = '$status'";
    }
}

$categoryQuery = "SELECT * FROM  categories $where";
$result = $categorydata->query($categoryQuery);
$folder = "uploads/category/thumbnail/";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td ><img src=" . $folder . $row['vImage'] . " width=70 height=70 ></td>";
    echo "<td >" . $row['vName'] . "</td>";
    echo "<td >" . $row['iOrder'] . "</td>";
    // echo "<td >" . $row['totalproduct'] . "</td>";
    echo "<td >" . $row['tiStatus'] . "</td>";
    echo "<td >" . $row['tsAddedDate'] . "</td>";
    echo "<td >" . $row['tsModifiedDate'] . "</td>";
    echo "<td><input type='button' class='btn btn-success float-right' onClick='updateRow($row[iCategoryId])' value='Update'></td>";
    echo "<td><input type='button' class='btn btn-danger float-right' onClick='deleteRow($row[iCategoryId])' value=' Delete'></td>";
    echo "</tr>";
}
