<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
$user = $_SESSION['userId'];
$productId = $_GET['iProductId'];

$productQuery = "select * from products left join images on products.iProductId=images.iProductId where products.iProductId='$productId'";
// print_r($productQuery);
// die();
$productResult = mysqli_query($conn, $productQuery);
$productRow = mysqli_fetch_assoc($productResult);
$img = $productRow['vImageName'];
$folder = "uploads/product/thumbnail/";

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
    <script>
        function deleteRow(iImageId) {
            // alert(iImageId);
            window.location.href = 'product.php?iImageId=' + iImageId + '';
        }
    </script>
    <style>
        .bg1 {
            background-color: lightgrey;
        }

        .error {
            color: red;
        }

        input:disabled {
            color: lightslategray;
        }
    </style>
</head>

<body class="bg1">

    <div class="container">
        <div class="py-3 text-center">
            <?php
            include 'header.html';
            ?>
        </div>

        <div class="row py-5">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-8 ">
                <h4 class="mb-3 text-center">Product Update</h4>
                <form action="product.php" method="POST" id="productForm1" enctype="multipart/form-data">
                    <!-- <form action method="POST" id="registerForm"> -->
                    <input type="hidden" placeholder="" id="iProductId" name="iProductId" value="<?php echo $productRow['iProductId']; ?>">
                    <input type="hidden" placeholder="" id="iImageId" name="iImageId" value="<?php echo $productRow['iImageId']; ?>">

                    <div class=" mb-3">
                        <label>Choose Image</label>
                        <input type="file" class="form-control" id="image" name="image[]" multiple />
                        <div class="d-flex my-2">
                            <?php
                            $query = "select * from images where iProductId='$productId'";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_array($result)) {
                                $image = $folder . $row['vImageName'];
                                $marked = $row['tiMarked'];
                            ?>
                                <div class="d-flex flex-wrap">

                                    <img src='<?php echo $image; ?>' name="image2" id="image2">
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <input type="radio" name="image" value="<?php echo $row['iImageId'] ?>" <?php if ($row['tiMarked'] == '1') {
                                                                                                                    echo "checked";
                                                                                                                } ?>>
                                        <input type="button" class='btn btn-primary btn-sm mx-3' name="myradio" id="radio1" onclick="deleteRow(<?php echo $row['iImageId']; ?>);" value="Delete">
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="productName" value="<?php echo $productRow['vProductName']; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Category</label>
                            <select class="form-control" name="categoryName">
                                <?php
                                include 'connection.php';
                                $selectCategory = "select * from categories";
                                $categoryResult = mysqli_query($conn, $selectCategory);
                                while ($row = mysqli_fetch_array($categoryResult)) {
                                    echo "<option value='" . $row['iCategoryId'] . "'>" . $row['vName'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Product price</label>
                            <input type="number" class="form-control" name="productPrice" value="<?php echo $productRow['fPrice']; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Sale Price</label>
                            <input type="number" class="form-control" name="salePrice" value="<?php echo $productRow['fSalePrice']; ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Product Code</label><span class="text-muted"></span>
                        <input type="text" class="form-control" disabled placeholder="" id="ProductCode" name="productCode" value="<?php echo $productRow['vProductCode']; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Qunatity</label><span class="text-muted"></span>
                        <input type="number" class="form-control" placeholder="" id="quantity" name="quantity" value="<?php echo $productRow['iProductQuantity']; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Order</label><span class="text-muted"></span>
                        <input type="number" class="form-control" placeholder="" id="order" name="order" value="<?php echo $productRow['iOrder']; ?>">
                    </div>
                    <div class="radio">
                        <label>Status:</label>
                        <label><input type="radio" name="status" value="1" <?php if ($productRow['tiStatus'] == '1') {
                                                                                echo "checked";
                                                                            } ?>>Active</label>
                        <label><input type="radio" name="status" value="0" <?php if ($productRow['tiStatus'] == '0') {
                                                                                echo "checked";
                                                                            } ?>>InActive</label>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" id="update" name="update">Update Product</button>
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