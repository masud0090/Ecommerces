<?php
session_start();
    $fnm=$_POST['fname'];
    $lnm=$_POST['lname'];
    $email=$_POST['email'];
    $pwd=$_POST['cpwd'];
    $phn=$_POST['phone'];
    $addr=$_POST['add1'];
    $biladdr=$_POST['add2'];
    $cty=$_POST['city'];
    $count=$_POST['country'];
    include "config.php";

    $sql="INSERT INTO customer(first_name,last_name,Address,city,country,phone,email,password,billing_address)
        VALUES('{$fnm}','{$lnm}','{$addr}','{$cty}','{$count}','{$phn}','{$email}','{$pwd}','{$biladdr}')";

    if(mysqli_query($con,$sql)){
        $_SESSION['email']=$email;
       $_SESSION['password']=$pwd;
    //    $_SESSION['customerid']=$final['id'];
        header("location:index.php");
    }
  


?>