<?php
$con=mysqli_connect('localhost','root','','eshop');
$did=$_GET['id'];
$sql="DELETE FROM sub_category WHERE sub_cat_id='$did'";
$res=mysqli_query($con,$sql);
$myText = "Information Deleted Successfully!";

	if($res){
        echo 'Information Successfully Deleted';
		header("location:subcategory_list.php?id='$myText'");
	}
	else{
		echo 'Information not Deleted';
	}
?>
