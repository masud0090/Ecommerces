<?php
$con= mysqli_connect('localhost','root','','eshop');

if(isset($_POST['submit'])){
   
    $type=$_POST['type'];
	$subcategory=$_POST['subcategory'];
   
    $sql2="insert into type(t_name, sub_cat_id) VALUES ('$type','$subcategory')";
    $res=mysqli_query($con,$sql2) or die("wrong query");
	$myText = "Information Added Successfully!";

	if($res){
        echo 'Information Successfully added';
		header("location:type_list.php?id='$myText'");
	}
	else{
		echo 'Information not added';
    }
}
    
?>
