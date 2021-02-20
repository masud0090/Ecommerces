<?php
$con= mysqli_connect('localhost','root','','eshop') or die("can not connect");

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $price=$_POST['price'];
    $limit=$_POST['limit'];
    $subcategory=$_POST['subcategory'];
    $type=$_POST['type'];
    $unit=$_POST['unit'];
    $image=$_FILES['fileToUpload']['name'];
    $temp=$_FILES['fileToUpload']['tmp_name']; 
    move_uploaded_file($temp, "$image"); 
    $details=mysqli_real_escape_string($con,$_POST['details']);

   
    $sql2="INSERT INTO product(p_name, price, product_limit, sub_cat_id, type_id, unit_id, image, product_details) 
    VALUES ('$name', '$price', '$limit','$subcategory', '$type','$unit','$image','$details')";
     // echo $sql2;
     $res=mysqli_query($con,$sql2) or die("wrong query");
	$myText = "Information Added Successfully!";

	if($res){
        echo 'Information Successfully added';
		header("location:product_list.php?id='$myText'");
	}
	else{
		echo 'Information not added';
	}
   
} 
?>
