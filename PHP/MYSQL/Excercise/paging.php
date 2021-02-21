<?php 
require 'connection.php';
$start = 0;  $per_page = 2;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;
if(isset($_GET['start'])){
    $start = $_GET['start'];
    $page_counter =  $_GET['start'];
    // echo($page_counter);
    $start = $start *  $per_page;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
}
$q = "SELECT * FROM employee LIMIT $start, $per_page";
$query = $conn->prepare($q);
$query->execute();
if($query->rowCount() > 0){
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
}
$count_query = "SELECT * FROM employee";
$query = $conn->prepare($count_query);
$query->execute();
$count = $query->rowCount();
$pagination = ceil($count / $per_page);
?>