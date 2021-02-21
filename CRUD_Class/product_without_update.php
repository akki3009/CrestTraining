<?php
include 'database.php';
include 'header.html';
$productdata = new database();
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
// $user = $_SESSION['userId'];
if (isset($_POST['submit'])) {

    $productName = $_POST['productName'];
    $productCategory = $_POST['categoryName'];
    $productPrice = $_POST['productPrice'];
    $salePrice = $_POST['salePrice'];
    $quality = $_POST['quantity'];
    $order = $_POST['order'];
    $status = $_POST['status'];
    $productCode = bin2hex(random_bytes(16));

    $file_size = $_FILES['image']['size'];
    $filetype = $_FILES['image']['type'];
    $folder = "uploads/product/";

    $fields = array(
        'vProductName' => $productName,
        'iCategoryId' => $productCategory,
        'vProductCode' => $productCode,
        'fPrice' => $productPrice,
        'fSalePrice' => $salePrice,
        'iProductQuantity' => $quality,
        'iOrder' => $order,
        'tiStatus' => $status
    );
    $productQuery = $productdata->insert('products', $fields);
    $last_id = $productdata->getInsertId();

    $allowed = array('image/jpeg', 'image/png', 'image/jpg');
    if (in_array($filetype, $allowed)) {
        echo "<script>alert('pls select jpeg or png');window.location.href=product.php;</script>";
    } else {
        foreach ($images = $_FILES['image']['name'] as $key => $value) {
            if ($images != '') {
                $images = $_FILES['image']['name'][$key];
                $images = time() . '-' . rand() . '-' . $images;

                $fdir = $folder . $images;
                $tempFile = $_FILES['image']['tmp_name'][$key];

                $productdata->productImage($images);
                $productdata->createProductThumb($images);

                if ($original_width > 1024 or $original_height > 720) {
                    $productdata->productImage($images);
                    $productdata->cropProductImage($images);
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
        $imageLastId = $db->getInsertId();
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
    $query = "select * from images left join products on images.iProductId=products.iProductId where images.iProductId='" . $productId . "'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $file = $row['vImageName'];
        unlink("uploads/product/thumbnail/$file");
        unlink("uploads/product/$file");
    }

    $deleteProduct = "DELETE images from images LEFT JOIN products on images.iProductId=products.iProductId where images.iProductId='.$productId.'";
    $deleteResult = mysqli_query($conn, $deleteProduct);
    header("location:product-list.php");
}
if (isset($_GET['iImageId'])) {
    $imageId = $_GET['iImageId'];
    $iProductId = $_GET['iProductId'];
    // for Unlink image from Folder
    //-------------------------------
    $query = "select * from images where iImageId='$imageId'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $file = $row['vImageName'];
        unlink("uploads/product/thumbnail/$file");
        unlink("uploads/product/$file");
    }

    $deleteProduct = "DELETE from images where iImageId='$imageId'";

    $deleteResult = mysqli_query($conn, $deleteProduct);
    header("location:product-list.php");
}
if (isset($_POST['iProductId'])) {
    $productId = $_POST['iProductId'];
    $productName = $_POST['productName'];
    $productCategory = $_POST['categoryName'];
    $productPrice = $_POST['productPrice'];
    $salePrice = $_POST['salePrice'];
    $quatity = $_POST['quantity'];
    $order = $_POST['order'];
    $status = $_POST['status'];
    $image = $_POST['image'];

    $filetype = $_FILES['image']['type'];
    $folder = "uploads/product/";

    $productUpdate = "update products set vProductName='" . $productName . "',iCategoryId='" . $productCategory . "',fPrice='" . $productPrice . "',fSalePrice='" . $salePrice . "',iProductQuantity='" . $quatity . "',iOrder='" . $order . "',tiStatus    ='" . $status . "' where iProductId='" . $productId . "'";

    $productResult = mysqli_query($conn, $productUpdate);
    // print_r($productResult);

    $allowed = array('image/jpeg', 'image/png', 'image/jpg');
    if (in_array($filetype, $allowed)) {
        echo "<script>alert('pls select jpeg or png');window.location.href=product.php;</script>";
    } else {

        foreach ($images = $_FILES['image']['name'] as $key => $value) {
            if ($images != '') {
                $images = $_FILES['image']['name'][$key];
                $images = time() . '-' . rand() . '-' . $images;
                $fdir = $folder . $images;
                $tempFile = $_FILES['image']['tmp_name'][$key];
                if ($filename == '') {
                    $updateImage = "update images set tiMarked=0 where iProductId='" . $productId . "' ";
                    $upateResult = mysqli_query($conn, $updateImage);

                    $updateImage2 = "update images set tiMarked=1 where iImageId='" . $image . "'";
                    $updateResult2 = mysqli_query($conn, $updateImage2);

                    header("location:product-list.php");
                }

                productImage($images);
                createProductThumb($images);

                if ($original_width > 1024 or $original_height > 720) {
                    productImage($images);
                    cropProductImage($images);
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
                // $imageQuery = "update images set vImageName='" . $images . "',tiMarked='" . $marked . "' where iProductId='$productId' ";
                $imageQuery = "insert into images (vImageName,iProductId) value('" . $images . "','" . $productId . "') ";
                $imageResult = mysqli_query($conn, $imageQuery);
                header("location:product-list.php");
            }
        }
    }
}
?>

<html>

<head>
    <title>product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrappopper.min.js"></script>
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
    <script src="jquery/validations.js"></script>
</body>

</html>