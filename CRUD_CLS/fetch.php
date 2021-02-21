<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
$user = $_SESSION['userId'];
// print_r($user);
$query = "SELECT * FROM  categories";

if (isset($_POST['search']) && !empty($_POST['search'])) {
    $search = $_POST['search'];
    $query .= " WHERE iUserId='" . $user . "' AND vName LIKE '%$search%' or iOrder LIKE  '%$search%' or tiStatus LIKE '%$search%' or tsAddedDate LIKE '%$search%' ";
} else if (isset($_POST['statuses']) && !empty($_POST['statuses'])) {
    $status = $_POST['statuses'];
    if ($status == 'Active') {
        $var = 1;
        $query .= " where tistatus='" . $var . "' and iUserId='" . $user . "'";
    } else if ($status == 'InActive') {
        $var = 0;
        $query .= " where tistatus='" . $var . "' and iUserId='" . $user . "'";
    } else {
        $query .= " where iUserId='" . $user . "'";
    }
} else {
    $query .= " where iUserId='" . $user . "'";
}

$folder = "uploads/category/thumbnail/";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td ><img src=" . $folder . $row['vImage'] . " width=70 height=70 ></td>";
        echo "<td >" . $row['vName'] . "</td>";
        echo "<td >" . $row['iOrder'] . "</td>";
        echo "<td>";
        if ($row['tiStatus'] == 1) {
            echo "Active";
        } else {
            echo "InActive";
        }
        echo "</td>";
        echo "<td >" . $row['tsAddedDate'] . "</td>";
        echo "<td >" . $row['tsModifiedDate'] . "</td>";
        echo "<td><input type='button' class='btn btn-success float-right' onClick='updateRow($row[iCategoryId])' value='Update'></td>";
        echo "<td><input type='button' class='btn btn-danger float-right' onClick='deleteRow($row[iCategoryId])' value=' Delete'></td>";

        echo "</tr>";
    }
}
