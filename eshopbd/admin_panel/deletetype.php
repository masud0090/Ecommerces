<?php
$con=mysqli_connect('localhost','root','','eshop');
$did=$_GET['id'];
$sql="DELETE FROM type WHERE type_id='$did'";
$res=mysqli_query($con,$sql);
$myText = "Information Deleted Successfully!";

	if($res){
        echo 'Information Successfully Deleted';
		header("location:type_list.php?id='$myText'");
	}
	else{
		echo 'Information not Deleted';
	}
?>
