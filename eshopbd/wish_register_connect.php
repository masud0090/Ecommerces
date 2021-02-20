<?php
session_start();
$fnm = $_POST['fname'];
$lnm = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['cpwd'];
$phn = $_POST['phone'];
$addr = $_POST['add1'];
$biladdr = $_POST['add2'];
$cty = $_POST['city'];
$count = $_POST['country'];
$product = $_POST['product_id'];
include "config.php";

$sql = "INSERT INTO customer(first_name,last_name,Address,city,country,phone,email,password,billing_address)
        VALUES('{$fnm}','{$lnm}','{$addr}','{$cty}','{$count}','{$phn}','{$email}','{$pwd}','{$biladdr}')";

if (mysqli_query($con, $sql)) {
    $customer_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pwd;


    if ($con->connect_error) {
        echo "$con->connect_error";
        die("Connection Failed : " . $con->connect_error);
    } else {
        $sql = "insert into wishlist(product_id, customer_id) values( $product, $customer_id)";
        if (mysqli_query($con, $sql)) {
            //  header('location:mainindex.php');
        } else {
            echo "not successfull ";
        }
    }


    //    $_SESSION['customerid']=$final['id'];
    header("location:index.php");
}
