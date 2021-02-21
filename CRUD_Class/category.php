<?php
require 'database.php';
$userdata = new database();
$imagedata = new image();
session_start();
try {
    if (isset($_GET['Message'])) {
        echo $_GET['Message'];
    }
    if (!isset($_SESSION['userId'])) {
        header('Location:login.php');
    }
    // print_r($_SESSION['userId']);
    // $user = $_SESSION['userId'];
    if (isset($_POST['insert'])) {
        $categoryName = $_POST['categoryName'];
        $order = $_POST['order'];
        $status = $_POST['status'];

        $images = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $tempname = $_FILES['image']['tmp_name'];
        // $user = $_SESSION['userId'];
        $folder = "uploads/category/";

        $thumbnail = "uploads/category/thumbnail/";

        $allowed = array("image/jpeg", "image/jpg", "image/png");

        if (!in_array($file_type, $allowed)) {
            // echo "<script>alert('pls Select Only jpeg/jpg/png');window.location.href='category.php';</script>";
            $msg = "Pls Select Only jpeg/jpg/png";
            header("location:category.php?Message={$msg}");
        } else {
            if ($images != '') {
                $imagedata->createImage($images);
                $imagedata->createCategoryThumb($images);
                if ($original_width > 1024 or $original_height > 720) {
                    $imagedata->createImage($images);
                    $imagedata->cropCategoryImage($images);
                } else {
                    move_uploaded_file($tempname, $directory);
                }
            }
            if ($categoryName != '') {
                $where = "vName = '$categoryName'";
                $checkCategoryName = $userdata->select('vName', 'categories', '', $where);
                // $userdata->select('*','categories','','','iCategoryId');
                // $checkResult = mysqli_query($conn, $checkCategoryName);
                $checkRow = mysqli_num_rows($checkCategoryName);
                if ($checkRow >= 1) {
                    // echo "<script>alert('Name Already Exists');window.location.href='category.php';</script>";
                    $msg = "Name Already Exists";
                    header("location:category.php?Message={$msg}");
                } else {
                    $fields = array(
                        'vImage' => $images,
                        'vName' => $categoryName,
                        'iOrder' => $order,
                        'tiStatus' => $status
                    );
                    $categoryQuery = $userdata->insert('categories', $fields);
                    if ($categoryQuery) {
                        header("location:category_display.php");
                    } else {
                        echo "unsuccess";
                    }
                }
            }
        }
    }

    if (isset($_GET['iCategoryId'])) {

        $iCategoryId = $_GET['iCategoryId'];
        $where = "iCategoryId = '$iCategoryId'";
        $query = $userdata->select('*', 'categories', '', $where);
        // $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query)) {
            $file = $row['vImage'];
            unlink("uploads/category/thumbnail/$file");
            unlink("uploads/category/$file");
        }
        // $where = "iCategoryId= $iCategoryId";
        $deleteCategory = $userdata->delete('', 'categories', '', $where);
        header("location:category_display.php");
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
        // $folder = "images/";
        $allowed = array("image/jpeg", "image/jpg", "image/png");
        if ($categoryName !== '') {
            // $checkCategoryName = "select vName from categories where vName='" . $categoryName . "' AND iCategoryId!='" . $iCategoryId . "' AND iUserId='" . $user . "'";
            $where = "vName='$categoryName' AND iCategoryId != '$iCategoryId'";
            $checkCategoryName = $userdata->select('vName', 'categories', '', $where);
            // $checkResult = mysqli_query($conn, $checkCategoryName);
            $checkRow = mysqli_num_rows($checkCategoryName);
            if ($checkRow >= 1) {
                echo "<script>alert('Name Already Exists');window.location.href='category_display.php';</script>";
            } else {
                if ($images == '') {
                    // $updateCategory = "UPDATE `categories` SET `vName`='" . $categoryName . "',`iOrder`='" . $order . "',`tiStatus`='" . $status . "' WHERE iCategoryId='" . $iCategoryId . "'";
                    $dbField = array(
                        'vName' => $categoryName,
                        'iOrder' => $order,
                        'tiStatus' => $status
                    );
                    $where = "iCategoryId= $iCategoryId";
                    $updateCategory = $userdata->update('categories', $dbField, $where);
                } else {
                    if (!in_array($file_type, $allowed)) {
                        echo "<script>alert('pls Select Only jpeg/jpg/png');window.location.href='category_display.php';</script>";
                    } else {

                        $imagedata->createImage($images);
                        $imagedata->createCategoryThumb($images);

                        if ($original_width > 1024 or $original_height > 720) {
                            $imagedata->createImage($images);
                            $imagedata->cropCategoryImage($images);
                        } else {
                            move_uploaded_file($tempname, $directory);
                        }
                    }
                    $where = "iCategoryId = '$iCategoryId'";
                    $query = $userdata->select('*', 'categories', '', $where);
                    while ($row = mysqli_fetch_assoc($query)) {
                        $file = $row['vImage'];
                        unlink("uploads/category/thumbnail/$file");
                        unlink("uploads/category/$file");
                    }
                    $dbField = array(
                        'vImage' => $images,
                        'vName' => $categoryName,
                        'iOrder' => $order,
                        'tiStatus' => $status
                    );
                    $where = "iCategoryId= $iCategoryId";
                    $updateCategory = $userdata->update('categories', $dbField, $where);
                }
                if ($updateCategory) {
                    header("location:category_display.php");
                } else {
                    echo "unsuccessfull";
                }
            }
        }
    }
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
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
    <!-- <script src="bootstrappopper.min.js"></script> -->
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
                    <div class="mb-3">
                        <label>Status</label><span class="text-muted"></span>
                        <input type="text" name="status" id="status" class="form-control" placeholder="Enter Category Status" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" id="insert" name="insert">Add Category</button>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="validation.js"></script>
</body>

</html>