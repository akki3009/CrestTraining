<?php
include 'database.php';
session_start();
$userdata = new database();
if (!$_SESSION['userId']) {
    header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Category Display </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        #head {
            height: 50px;
            padding: 10px 0;
            background: lightblue;
            text-align: center;
        }
    </style>
    <script>
        function deleteRow(iCategoryId) {
            var result = confirm("Are you sure you want to delete record")
            if (result) {
                window.location.href = 'category.php?iCategoryId=' + iCategoryId + '';
            } else {
                window.location.href = 'category_display.php';
            }
        }

        function updateRow(iCategoryId) {
            window.location.href = 'category_update.php?iCategoryId=' + iCategoryId + '';
        }
    </script>
</head>

<body>
    <?php
    require 'header.html';
    ?>
    <div class="form-group">
        <div>
            <h2 id="head">Category List</h2>
        </div>
        <a href="category.php" class="btn btn-success button float-right">Add Category</a>
    </div>
    <div class="container-fluid cat">
        <input type="text" id="searched" placeholder="Search for names.." title="Type in a name">
        <div class="row">
            <div class="col-md-4">
                <select class="form-control" id="status">
                    <option selected>All</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">CategoryImage</th>
                    <th scope="col">CategoryName</th>
                    <th scope="col">CategoryOrder</th>
                    <!-- <th scope="col">No Of Products</th> -->
                    <th scope="col">CategoryStatus</th>
                    <th scope="col">AddedDate</th>
                    <th scope="col">ModifiedDate</th>
                    <th colspan="2" scope="col" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $categoryList = $userdata->select('*', 'categories', '', '', 'iCategoryId');
                $folder = "uploads/category/thumbnail/";
                if ($categoryList) {
                    while ($row = mysqli_fetch_assoc($categoryList)) {
                        echo "<tr>";
                        echo "<td ><img src=" . $folder . $row['vImage'] . " width=70 height=70 ></td>";
                        echo "<td>" . $row['vName'] . "</td>";
                        echo "<td>" . $row['iOrder'] . "</td>";
                        // echo "<td >" . $row['totalproduct'] . "</td>";
                        echo "<td>" . $row['tiStatus'] . "</td>";
                        echo "<td>" . $row['tsAddedDate'] . "</td>";
                        echo "<td>" . $row['tsModifiedDate'] . "</td>";
                        echo "<td><input type='button' class='btn btn-success float-right' onClick='updateRow($row[iCategoryId])' value='Update'></td>";
                        echo "<td><input type='button' class='btn btn-danger float-right' onClick='deleteRow($row[iCategoryId])' value=' Delete'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#searched").on("keyup", function() {
                var search = $('#searched').val();
                $.ajax({
                    url: "search.php",
                    method: "POST",
                    data: {
                        search: search
                    },
                    success: function(data) {
                        $('tbody').html(data);
                    }
                });
            });
        });
        $(document).ready(function() {
            $('#status').change(function() {
                var statuses = $('#status').val();
                $.ajax({
                    url: "search.php",
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