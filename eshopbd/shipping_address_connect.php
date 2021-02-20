<?php
include "config.php";
session_start();
$custom_id = $_SESSION['customerid'];
if (isset($_POST['submit2'])) {
    $fnm = $_POST['fname'];
    $lnm = $_POST['lname'];
    $email = $_POST['email'];

    $phn = $_POST['phone'];
    $addr = $_POST['add1'];
    $biladdr = $_POST['add2'];
    $cty = $_POST['city'];
    $count = $_POST['country'];


    /* $sql = "update customer(first_name,last_name,Address,city,country,phone,email,billing_address)
        VALUES('{$fnm}','{$lnm}','{$addr}','{$cty}','{$count}','{$phn}','{$email}','{$biladdr}') where customer_id='$custom_id'";
    echo $sql; */

    /*  $sql = "insert into shipping_address first_name='$fnm', last_name='$lnm',email='$email',phone='$phn', Address='$addr',billing_address='$biladdr', city='$cty',country='$count' where customer_id='$custom_id'";
    echo $sql; */

    $sql = "insert into shipping_address(first_name,last_name,Address,city,country,phone,email,billing_address,customer_id) VALUES('$fnm','$lnm','$addr','$cty','$count','$phn','$email','$biladdr','$custom_id')";
    echo $sql;

    $res = mysqli_query($con, $sql);
    if ($res) {
        echo ("<script language='javascript'>
                    window.alert('Updated  successfully...');

                    window.location.href='address.php';</script>");
    } else {
        echo ("<script language='javascript'>
            window.alert('not successfully...');
            window.location.href='address.php';</script>");
    }
}
