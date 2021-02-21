<?php
include 'database.php';
include 'header.html';
$productdata = new database();
$imagedata = new image();
session_start();
try {
    if (isset($_GET['Message'])) {
        echo $_GET['Message'];
    }

    if (!isset($_SESSION['userId'])) {
        header('Location:login.php');
    }
    $thumPath = "uploads/product/thumbnail/";
    $folder = "uploads/product/";
    // $user = $_SESSION['userId'];
    if (isset($_POST['submit'])) {

        $productName = $_POST['productName'];
        $productCategory = $_POST['categoryName'];
        $productPrice = $_POST['productPrice'];
        $salePrice = $_POST['salePrice'];
        $$quantity = $_POST['quantity'];
        $order = $_POST['order'];
        $status = $_POST['status'];
        $productCode = bin2hex(random_bytes(16));

        $file_size = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];

        $productArray = array(
            'vProductName' => $productName,
            'iCategoryId' => $productCategory,
            'vProductCode' => $productCode,
            'fPrice' => $productPrice,
            'fSalePrice' => $salePrice,
            'iProductQuantity' => $$quantity,
            'iOrder' => $order,
            'tiStatus' => $status
        );
        $productQuery = $productdata->insert('products', $productArray);
        $last_id = $productdata->getInsertId();

        $allowed = array('image/jpeg', 'image/png', 'image/jpg');
        if (!in_array($filetype, $allowed)) {
            // echo "<script>alert('pls select jpeg or png');window.location.href=product.php;</script>";
            $msg = "Pls Select Only jpeg/jpg/png";
            header("location:product.php?Message={$msg}");
        } else {
            foreach ($images = $_FILES['image']['name'] as $key => $value) {
                if ($images != '') {
                    $images = $_FILES['image']['name'][$key];
                    $images = time() . '-' . rand() . '-' . $images;

                    $fdir = $folder . $images;
                    $tempFile = $_FILES['image']['tmp_name'][$key];

                    $imagedata->productImage($images);
                    $imagedata->createProductThumb($images);

                    if ($original_width > 1024 or $original_height > 720) {
                        $imagedata->productImage($images);
                        $imagedata->cropProductImage($images);
                        $insertQrySplit[] = "('$images')";
                    } else {
                        if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $fdir)) {
                            $insertQrySplit[] = "('$images')";
                        } else {
                            echo "not uploaded";
                        }
                    }
                }
                if (!empty($insertQrySplit)) {
                    $query = implode($insertQrySplit);
                    $imageArray = array(
                        'iProductId' => $last_id,
                        'vImageName' => $images
                    );
                    $imageQuery = $productdata->insert('images', $imageArray);
                    header("location:product_display.php");
                }
            }
            $imageLastId = $productdata->getInsertId();
            $updateArray = array(
                'tiMarked' => 1,
            );
            $where = "iImageId= '$imageLastId'";
            $update = $productdata->update('images', $updateArray, $where);
        }
    }

    if (isset($_GET['iProductId'])) {
        $productId = $_GET['iProductId'];
        // for Unlink image from Folder
        //-------------------------------
        $deleteImages = $productdata->select('*', 'images', 'left join products on images.iProductId=products.iProductId', 'images.iProductId="' . $productId . '"');
        // $result = mysqli_query($conn, $query);
        foreach ($deleteImages as $images => $imageRow) {
            $file = $imageRow['vImageName'];
            unlink($thumPath . $file);
            unlink($folder . $file);
        }
        // $deleteCategory = $db->delete('products','', 'iProductId="' . $productId . '"');
        $deleteCategory = $productdata->delete('', 'images', '', 'iProductId="' . $productId . '"');
        header("location:product_display.php");
    }
    if (isset($_GET['iImageId'])) {
        $imageId = $_GET['iImageId'];
        $deleteSingleImage = $productdata->select('*', 'images', '', 'iImageId="' . $imageId . '"');
        foreach ($deleteSingleImage as $image => $imageDelete) {
            $file = $imageDelete['vImageName'];
            unlink($thumPath . $file);
            unlink($folder . $file);
        }
        $deleteImage = $productdata->delete('', 'images', '', 'iImageId="' . $imageId . '"');
        header("location:product_display.php");
    }
    if (isset($_POST['iProductId'])) {
        $productId = $_POST['iProductId'];
        $productName = $_POST['productName'];
        $productCategory = $_POST['categoryName'];
        $productPrice = $_POST['productPrice'];
        $salePrice = $_POST['salePrice'];
        $quantity = $_POST['quantity'];
        $order = $_POST['order'];
        $status = $_POST['status'];
        $image = $_POST['image'];

        $filetype = $_FILES['image']['type'];

        $productArray = array(
            'vProductName' => $productName,
            'iCategoryId' => $productCategory,
            'fPrice' => $productPrice,
            'fSalePrice' => $salePrice,
            'iProductQuantity' => $quantity,
            'iOrder' => $order,
            'tiStatus' => $status
        );
        $productUpdate = $productdata->update('products', $productArray, 'iProductId="' . $productId . '"');

        $allowed = array('image/jpeg', 'image/png', 'image/jpg');
        if (in_array($filetype, $allowed)) {
            // echo "<script>alert('pls select jpeg or png');window.location.href=product.php;</script>";
            $msg = "Pls Select Only jpeg/jpg/png";
            header("location:category.php?Message={$msg}");
        } else {
            foreach ($images = $_FILES['image']['name'] as $key => $value) {
                if ($images != '') {
                    $images = $_FILES['image']['name'][$key];
                    $images = time() . '-' . rand() . '-' . $images;
                    $fdir = $folder . $images;
                    $tempFile = $_FILES['image']['tmp_name'][$key];
                    if ($filename == '') {
                        $updateImageArray = array(
                            'tiMarked' => 0,
                        );
                        $updateImage = $productdata->update('images', $updateImageArray, "iProductId='" . $productId . "' ");
                        $updateImageArray2 = array(
                            'tiMarked' => 1,
                        );
                        $updateImage2 = $productdata->update('images', $updateImageArray2, 'iImageId="' . $image . '"');
                        header("location:product_display.php");
                    }

                    $imagedata->productImage($images);
                    $imagedata->createProductThumb($images);

                    if ($original_width > 1024 or $original_height > 720) {
                        $imagedata->productImage($images);
                        $imagedata->cropProductImage($images);
                        $insertQrySplit[] = "('$images')";
                    } else {
                        if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $fdir)) {
                            $success[] = "uploaded";
                            $insertQrySplit[] = "('$images')";
                        } else {
                            echo "not uploaded";
                        }
                    }
                }
                if (!empty($insertQrySplit)) {
                    $query = implode($insertQrySplit);
                    $imageArray = array(
                        'iProductId' => $productId,
                        'vImageName' => $images,
                    );
                    $imageQuery = $productdata->insert('images', $imageArray);
                    header("location:product_display.php");
                }
            }
        }
    }
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}
?>

<html>

<head>
    <title>product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <!-- <script src="bootstrappopper.min.js"></script> -->
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/slim.min.js"></script>


    <style>
        .bg1 {
            background-color: lightgrey;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body class="bg1">

    <div class="container">
        <div class="py-3 text-center">

        </div>
        <form action="#" id="productForm" method="POST" enctype="multipart/form-data">
            <div class="row py-5">

                <div class="col-md-2 ">
                </div>
                <div class="col-md-8 ">
                    <h4 class="mb-3">Product</h4>
                    <form method="POST" id="registerForm">
                        <div class=" mb-3">
                            <label>Choose Image</label>
                            <input type="file" class="form-control" id="image" name="image[]" required multiple />

                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="productName">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Category</label>
                                <select class="form-control" id="categoryName" required name="categoryName">
                                    <option disabled="disabled" selected>---Select Category---</option>
                                    <?php
                                    $query = $productdata->select('*', 'categories');
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        echo "<option value='" . $row['iCategoryId'] . "'>" . $row['vName'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>Product price</label>
                                <input type="number" class="form-control" name="productPrice">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Sale Price</label>
                                <input type="number" class="form-control" name="salePrice">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Qunatity</label><span class="text-muted"></span>
                            <input type="number" class="form-control" placeholder="" id="quantity" name="quantity">
                        </div>
                        <div class="mb-3">
                            <label>Order</label><span class="text-muted"></span>
                            <input type="number" class="form-control" placeholder="" id="order" name="order">
                        </div>
                        <div class="mb-3">
                            <label>Product Status</label><span class="text-muted"></span>
                            <input type="text" name="status" class="form-control" placeholder="">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" id="submit" name="submit">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="validation.js"></script>
</body>

</html>