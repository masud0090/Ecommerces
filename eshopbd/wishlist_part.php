<?php
// Database connection
include("config.php");
$sub_cat_id = $_GET['sub_cat_id'];
if (isset($_POST['wishlist'])) {

    $sub_cat_id = $_POST['sub_cat_id'];
    $product_id = $_POST['product_id'];
    $customer_id = $_POST['customer_id'];

    if ($con->connect_error) {
        echo "$con->connect_error";
        die("Connection Failed : " . $con->connect_error);
    } else {
        $sql = "insert into wishlist(product_id, customer_id) values( $product_id, $customer_id)";
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Wishlist Added');
            window.location.href='shop-grid.php?sub-cat-id=$sub_cat_id';
            </script>";
        } else {
            echo "<script>alert('Wishlist Not Added');
            window.location.href='shop-grid.php?sub-cat-id=$sub_cat_id';
            </script>";
        }
    }
}
