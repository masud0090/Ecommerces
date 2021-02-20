<?php 
	$con=mysqli_connect("localhost","root","","eshop") or die("database failed");
	$unit=$_POST['unit'];
	$q="insert into unit(u_name)values('$unit')";
	$res=mysqli_query($con,$q) or die("wrong query");
	$myText = "Information Added Successfully!";

	if($res){
        echo 'Information Successfully added';
		header("location:unit_list.php?id='$myText'");
	}
	else{
		echo 'Information not added';
	}
	
