<?php
$con= mysqli_connect('localhost','root','','eshop');

if(isset($_POST['submit'])){
   
    $subcategory=$_POST['subcategory'];
    $category=$_POST['category'];
    $image=$_FILES['fileToUpload']['name'];
    $temp=$_FILES['fileToUpload']['tmp_name']; 
    move_uploaded_file($temp, "$image"); 
   
    $sql2="insert into sub_category(s_name, cat_id, sub_cat_img) VALUES ('$subcategory', '$category','$image')";
    $res=mysqli_query($con,$sql2) or die("wrong query");
	$myText = "Information Added Successfully!";

	if($res){
        echo 'Information Successfully added';
		header("location:subcategory_list.php?id='$myText'");
	}
	else{
		echo 'Information not added';
	}
   
} 
?>
