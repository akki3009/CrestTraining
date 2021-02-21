<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
$user = $_SESSION['userId'];

$iCategoryId = $_GET['iCategoryId'];
$categoryUpdate = "select * from categories where iCategoryId='$iCategoryId'";
$updateResult = mysqli_query($conn, $categoryUpdate);
$categoryData = mysqli_fetch_assoc($updateResult);
$img = $categoryData['vImage'];
$folder = "uploads/category/thumbnail/" . $img;
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
    <style>
        .borderLine {
            /* border: 1px solid; */
            background-color: lightblue;

        }

        .row {
            margin-top: 80px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    // include 'header.html';
    ?>

    <div class="container ">
        <div class="row my-10 ">
            <div class="col-md-3">
            </div>
            <div class="col-md-5 py-3">
                <h4 class="mb-3 borderLine">Category</h4>
                <form action="category.php" method="POST" id="categoryForm1" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="hidden" placeholder="" id="iCategoryId" name="iCategoryId" value="<?php echo $categoryData['iCategoryId']; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Image</label><span class="text-muted"></span>
                        <input type="file" class="form-control" placeholder="" id="image" name="image" value="<?php echo $folder; ?>">
                        <img src='<?php echo $folder; ?>' width=100 height=100>
                    </div>

                    <div class="mb-3">
                        <label>Category Name</label><span class="text-muted"></span>
                        <input type="text" class="form-control" placeholder="Category Name" id="categoryName" name="categoryName" value="<?php echo $categoryData['vName'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Order</label><span class="text-muted"></span>
                        <input type="number" class="form-control" placeholder="" id="order" name="order" value="<?php echo $categoryData['iOrder'] ?>">
                    </div>
                    <div class="radio">
                        <label>Status:</label>
                        <label><input type="radio" name="status" value="1" <?php if ($categoryData['tiStatus'] == '1') {
                                                                                echo "checked";
                                                                            } ?>>Active</label>
                        <label><input type="radio" name="status" value="0" <?php if ($categoryData['tiStatus'] == '0') {
                                                                                echo "checked";
                                                                            } ?>>InActive</label>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" id="submit" name="submit">Add Category</button>
                    </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="jquery/validations.js"></script>
</body>

</html>