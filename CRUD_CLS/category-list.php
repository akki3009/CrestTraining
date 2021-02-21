<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
$user = $_SESSION['userId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrappopper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/slim.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        function deleteRow(iCategoryId) {
            var result = confirm("Are you sure you want to delete record")
            if (result) {
                window.location.href = 'category.php?iCategoryId=' + iCategoryId + '';
            } else {
                window.location.href = 'category-list.php';
            }

        }

        function updateRow(iCategoryId) {
            window.location.href = 'category-update.php?iCategoryId=' + iCategoryId + '';
        }
    </script>
    <style>
        .center {
            text-align-last: center;
        }

        th {
            /* align:center; */
            background-color: lightblue;
        }

        .title {
            text-align: center;
            background-color: lightblue;


        }
    </style>
</head>

<body>
    <?php
    include 'header.html';
    ?>
    <form>
        <div class="containerfluid">
            <div class="pt-4">
            </div>
            <div class="row">
                <div class="col-md-12 pt-5">
                    <h3 class="title">Category List</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 py-2">
                    <h3>Category</h3>
                </div>
                <div class="col-md-4 text-right ">
                    <button class="btn btn-primary  mb-3 float-right"><a href="category.php" class="text-dark">Add Category</a></button>
                </div>
            </div>
            <div class="float-left">
                <select class="form-control" id="status">
                    <option>All</option>
                    <option>Active</option>
                    <option>InActive</option>
                </select>
            </div>
            <div class="float-right" id="search-bar">
                <label>Search</label>
                <input type="text" id="searched" autocomplete="off">
            </div>


            <div class="table-responsive" id="categoryTable">
                <table class="table my-10" style="width:100%">
                    <thead>
                        <tr>
                            <th>Images</th>
                            <th><i class="fas fa-angle-double-down column_sort" id="vName" data-order="asc"></i>&nbsp;Name&nbsp;<i class="fas fa-angle-double-up"></i></th>
                            <th><i class="fas fa-angle-double-down column_sort" id="iOrder" data-order="asc"></i>&nbsp;Order&nbsp;<i class="fas fa-angle-double-up "></i></th>
                            <!-- <th>No Of Product</th> -->
                            <th>Status</th>
                            <th>Added Date</th>
                            <th>Modified Date</th>
                            <th colspan="2" class="center">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php

                        include 'connection.php';
                        $categoryList = "SELECT COUNT(ps.iCategoryId) AS totalproduct,ct.* FROM categories ct LEFT JOIN products ps ON ct.iCategoryId=ps.iCategoryId WHERE ct.iUserId='" . $user . "' GROUP BY ct.iCategoryId ;";
                        $listResult = mysqli_query($conn, $categoryList);
                        $folder = "uploads/category/thumbnail/";
                        //select COUNT(ps.iCategoryId)  from categories ct left join products ps on ct.iCategoryId=ps.iCategoryId GROUP BY ps.iCategoryId

                        if ($listResult) {
                            while ($row = mysqli_fetch_array($listResult)) {
                                echo "<tr>";
                                echo "<td ><img src=" . $folder . $row['vImage'] . " width=70 height=70 ></td>";
                                echo "<td >" . $row['vName'] . "</td>";
                                echo "<td >" . $row['iOrder'] . "</td>";
                                // echo "<td >" . $row['totalproduct'] . "</td>";
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
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.column_sort', function() {
                var column_name = $(this).attr("id");
                var order = $(this).data("order");
                $.ajax({
                    url: "fetch-category.php",
                    method: "POST",
                    data: {
                        column_name: column_name,
                        order: order
                    },
                    success: function(response) {
                        $('#categoryTable').html(response);

                    }
                });

            });
        });
        $(document).on("keyup", "#searched", function() {
            var search = $("#searched").val();
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    search: search
                },
                success: function(data) {
                    $("tbody").html(data);
                }
            });

        });
        $(document).ready(function() {
            $('#status').change(function() {
                var statuses = $(this).val();
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        statuses: statuses
                    },
                    success: function(data) {
                        $("tbody").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>