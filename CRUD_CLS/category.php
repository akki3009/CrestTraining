<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
print_r($_SESSION['userId']);
$user = $_SESSION['userId'];
include 'connection.php';
include 'function.php';
if (isset($_POST['insert'])) {

    $categoryName = $_POST['categoryName'];
    $order = $_POST['order'];
    $status = $_POST['status'];

    $images = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $tempname = $_FILES['image']['tmp_name'];
    $user = $_SESSION['userId'];
    $folder = "uploads/category/";

    $thumbnail = "uploads/category/thumbnail/";

    $allowed = array("image/jpeg", "image/jpg", "image/png");

    if (!in_array($file_type, $allowed)) {
        echo "<script>alert('pls Select Only jpeg/jpg/png');window.location.href='category.php';</script>";
    } else {
        if ($images != '') {

            createImage($images);
            createCategoryThumb($images);
            if ($original_width > 1024 or $original_height > 720) {
                createImage($images);
                cropCategoryImage($images);
            } else {
                move_uploaded_file($tempname, $directory);
            }
        }
        if ($categoryName != '') {
            $checkCategoryName = "select vName from categories where vName='" . $categoryName . "' and iUserId='" . $user . "'";
            $checkResult = mysqli_query($conn, $checkCategoryName);
            $checkRow = mysqli_num_rows($checkResult);
            if ($checkRow >= 1) {
                echo "<script>alert('Name Already Exists');window.location.href='category.php';</script>";
            } else {
                $categoryQuery = "insert into categories(vImage,vName,iOrder,tiStatus,iUserId) values('" . $images . "','" . $categoryName . "','" . $order . "','" . $status . "','" . $user . "')";
                print_r($categoryQuery);

                $categoryResult = mysqli_query($conn, $categoryQuery);

                if ($categoryResult) {
                    header("location:category-list.php");
                } else {
                    echo "unsuccess";
                }
            }
        }
    }
}

if (isset($_GET['iCategoryId'])) {

    $iCategoryId = $_GET['iCategoryId'];
    $query = "select * from categories where iCategoryId='" . $iCategoryId . "'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $file = $row['vImage'];
        unlink("uploads/category/thumbnail/$file");
        unlink("uploads/category/$file");
    }

    $deleteCategory = "delete from categories where iCategoryId='$iCategoryId'";

    $delteResult = mysqli_query($conn, $deleteCategory);

    header("location:category-list.php");
}
if (isset($_POST['iCategoryId'])) {
    $iCategoryId = $_POST['iCategoryId'];
    $categoryName = $_POST['categoryName'];
    $order = $_POST['order'];
    $status = $_POST['status'];

    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];

    $images = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "images/";
    $allowed = array("image/jpeg", "image/jpg", "image/png");
    if ($categoryName !== '') {
        $checkCategoryName = "select vName from categories where vName='" . $categoryName . "' AND iCategoryId!='" . $iCategoryId . "' AND iUserId='" . $user . "'";
        $checkResult = mysqli_query($conn, $checkCategoryName);
        $checkRow = mysqli_num_rows($checkResult);
        if ($checkRow >= 1) {
            echo "<script>alert('Name Already Exists');window.location.href='category-list.php';</script>";
        } else {
            if ($images == '') {
                $updateCategory = "UPDATE `categories` SET `vName`='" . $categoryName . "',`iOrder`='" . $order . "',`tiStatus`='" . $status . "' WHERE iCategoryId='" . $iCategoryId . "'";
            } else {
                if (!in_array($file_type, $allowed)) {
                    echo "<script>alert('pls Select Only jpeg/jpg/png');window.location.href='category-list.php';</script>";
                } else {

                    createImage($images);
                    createCategoryThumb($images);

                    if ($original_width > 1024 or $original_height > 720) {
                        createImage($images);
                        cropCategoryImage($images);
                    } else {
                        move_uploaded_file($tempname, $directory);
                    }
                }
                $query = "select * from categories where iCategoryId='" . $iCategoryId . "'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $file = $row['vImage'];
                    unlink("uploads/category/thumbnail/$file");
                    unlink("uploads/category/$file");
                }

                $updateCategory = "UPDATE `categories` SET `vImage`='" . $images . "',`vName`='" . $categoryName . "',`iOrder`='" . $order . "',`tiStatus`='" . $status . "' WHERE iCategoryId='" . $iCategoryId . "'";
            }
            $updateResult = mysqli_query($conn, $updateCategory);
            if ($updateResult) {
                header("location:category-list.php");
            } else {
                echo "unsuccessfull";
            }
        }
    }
}

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
    include 'header.html';
    ?>

    <div class="container-fluid">
        <div class="row my-10  ">
            <div class="col-md-3">
            </div>
            <div class="col-md-5 py-3">
                <h4 class="mb-3 borderLine">Category</h4>
                <form method="POST" id="categoryForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>Images</label><span class="text-muted"></span>
                        <input type="file" class="form-control" placeholder="" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label>Category Name</label><span class="text-muted"></span>
                        <input type="text" class="form-control" placeholder="Category Name" id="categoryName" name="categoryName" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label>Order</label><span class="text-muted"></span>
                        <input type="number" class="form-control" placeholder="" id="order" name="order">
                    </div>
                    <div class="radio">
                        <label>Status:</label>
                        <label><input type="radio" name="status" value="1" checked>Active</label>
                        <label><input type="radio" name="status" value="0">InActive</label>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" id="insert" name="insert">Add Category</button>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="jquery/validations.js"></script>
</body>

</html>