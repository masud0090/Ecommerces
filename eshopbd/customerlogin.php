<?php
session_start();

if(isset($_POST['login'])){

include('config.php');



$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * from customer Where email='$email' AND password='$password'";
$results=mysqli_query($con,$sql);
$final=mysqli_fetch_assoc($results);


$_SESSION['email']=$final['email'];
$_SESSION['password']=$final['password'];

$_SESSION['customerid']=$final['customer_id'];



if($email=$final['email'] AND $password=$final['password']){
  header('location: cart.php');
}else{
  echo "<script> alert('Credentials are wrong');
        window.location.href='customerregister.php';
        </script>";
}






}



?>