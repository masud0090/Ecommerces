
	<?php
$con= mysqli_connect('localhost','root','','eshop');
 if(isset($_POST['ok'])){

	$category=$_POST['category'];

	
	$image1=$_FILES['cat_img']['name'];
    $temp=$_FILES['cat_img']['tmp_name']; 
	move_uploaded_file($temp, "$image1"); 

	$image2=$_FILES['cat_ban']['name'];
    $temp=$_FILES['cat_ban']['tmp_name']; 
	move_uploaded_file($temp, "$image2"); 


	/* $image1=$_FILES['cat_img']['name'];
    $temp=$_FILES['cat_img']['tmp_name']; 
	move_uploaded_file($temp, $image1);

	$image2=$_FILES['cat_ban']['name'];
    $temp=$_FILES['cat_ban']['tmp_name']; 
	move_uploaded_file($temp, $image2); */

	
	$q="insert into category(name, cat_img, cat_ban)values('$category','$image1','$image2')";
	
	$res=mysqli_query($con,$q) or die("wrong query");
	$myText = "Information Updated Successfully!";

	if($res){
        echo 'Information Successfully updated';
		header("location:category_list.php?id='$myText'");
	}
	else{
		echo 'Information not added';
	}
	mysqli_close($con);
	//header("location:category_list.php");
	
	

}