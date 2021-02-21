<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
$user = $_SESSION['userId'];

$query = "select * from images im left join products ps on im.iProductId=ps.iProductId left join categories ct on ps.iCategoryId=ct.iCategoryId where tiMarked=1 AND ps.iUserId='" . $user . "'";

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $query .= "AND vProductName LIKE '%$name%'";
} else if (isset($_POST['categoryName']) && !empty($_POST['categoryName'])) {
    $categoryName = $_POST['categoryName'];
    $query .= "AND vName LIKE '%$categoryName%'";
} else if (isset($_POST['price']) && !empty($_POST['price'])) {
    $price = $_POST['price'];
    $query .= "AND fPrice LIKE '%$price%'";
} else if (isset($_POST['qunatity']) && !empty($_POST['qunatity'])) {
    $qunatity = $_POST['qunatity'];
    $query .= "AND iProductQuantity LIKE '%$qunatity%'";
} else if (isset($_POST['start_price']) && !empty($_POST['start_price']) or (isset($_POST['end_price']) && !empty($_POST['end_price']))) {
    $start_price = $_POST['start_price'];
    $end_price = $_POST['end_price'];
    if (isset($_POST['start_price']) && !empty($_POST['start_price'])) {
        $query .= "AND ps.fPrice >= $start_price ";
    }
    if (isset($_POST['end_price']) && !empty($_POST['end_price'])) {
        $query .= "AND ps.fPrice <= $end_price ";
    }
    if (isset($_POST['start_price']) && !empty($_POST['start_price']) and (isset($_POST['end_price']) && !empty($_POST['end_price']))) {
        $query .= "AND ps.fPrice between $start_price and $end_price";
    }
} else if (isset($_POST['qunatity_from']) && !empty($_POST['qunatity_from']) or (isset($_POST['qunatity_to']) && !empty($_POST['qunatity_to']))) {
    $qunatity_from = $_POST['qunatity_from'];
    $qunatity_to = $_POST['qunatity_to'];
    if (isset($_POST['qunatity_from']) && !empty($_POST['qunatity_from'])) {
        $query .= "AND ps.iProductQuantity >= $qunatity_from ";
    }
    if (isset($_POST['qunatity_to']) && !empty($_POST['qunatity_to'])) {
        $query .= "AND ps.iProductQuantity <= $qunatity_to ";
    }
    if (isset($_POST['qunatity_from']) && !empty($_POST['qunatity_from']) and (isset($_POST['qunatity_to']) && !empty($_POST['qunatity_to']))) {
        $query .= "AND ps.iProductQuantity between $qunatity_from and $qunatity_to";
    }
}

// $priceQuery = "select * from images im left join products ps on im.iProductId=ps.iProductId left join categories ct on ps.iCategoryId=ct.iCategoryId where tiMarked=1 AND fPrice between '$start_price' AND '$end_price' ";
$folder = "uploads/product/thumbnail/";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td ><img src=" . $folder . $row['vImageName'] . " width=70 height=70 ></td>";
        echo "<td >" . $row['vProductName'] . "</td>";
        echo "<td >" . $row['vProductCode'] . "</td>";
        echo "<td >" . $row['vName'] . "</td>";
        echo "<td >" . $row['fPrice'] . "/" . $row['fSalePrice'] . "</td>";
        echo "<td >" . $row['iProductQuantity'] . "</td>";
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
        echo "<td><input type='button' class='btn btn-success float-right' onClick='updateRow($row[iCategoryId])' value='Update'>
        <input type='button' class='btn btn-danger float-right' onClick='deleteRow($row[iCategoryId])' value=' Delete'></td>";
        echo "</tr>";
    }
}
