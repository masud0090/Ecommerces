<?php
session_start();
include('config.php');

$total=$_POST['total'];
$name=$_POST['name'];

$phone=$_POST['phone'];

$address=$_POST['address'];
$customerid=$_SESSION['customerid'];
$payment=$_POST['payment'];

$sql="INSERT INTO orders(customer_id,name, address, phone, total, pay_method) VAlUES('$customerid','$name','$address','$phone','$total', '$payment')";
$connect=mysqli_query($con,$sql);


$sql2="Select id from orders order by id DESC limit 1";
$result=mysqli_query($con,$sql2);
$final=mysqli_fetch_assoc($result);
$orderid=$final['id'];



foreach ($_SESSION['cart'] as $key => $value) {
	$proid=$value['item_id'];
	$quantity=$value['quantity'];


	$sql3="INSERT Into order_details(order_id,product_id,quantity) VAlUES('$orderid','$proid','$quantity')";
	$connect2=mysqli_query($con,$sql3);
	# code...
}
if ($payment=="paypal") {
	$_SESSION['total']=$total;
	header('location: paypal.php');
}else{
	echo "<script> alert('ORDER IS PLACED');
		window.location.href='index.php';
		</script>";
}
unset($_SESSION['cart']);

?>