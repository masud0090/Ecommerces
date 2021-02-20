<?php
 
$con=mysqli_connect('localhost','root','','eshop');
$id=$_GET['id'];
$sql="select * FROM category WHERE cat_id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
if(isset($_POST['update'])){
	
	$uname=$_POST['name'];

	$image1=$_FILES['cat_img']['name'];
    $temp=$_FILES['cat_img']['tmp_name']; 
	move_uploaded_file($temp, "$image1"); 

	$image2=$_FILES['cat_ban']['name'];
    $temp=$_FILES['cat_ban']['tmp_name']; 
	move_uploaded_file($temp, "$image2"); 
	if(	$image1 && $image2){

		$sqlupdate="Update category SET name='$uname', cat_img='$image1', cat_ban='$image2' WHERE cat_id='$id'";
		$res=mysqli_query($con,$sqlupdate);
		$myText = "Information Updated Successfully!";
		if($res){
			
			$myText="Successfully Updated";
		
			echo 'Information Successfully updated';
			header("location:category_list.php?id='$myText'");
			 
		}
		else{
			echo 'Information not updated';
		}
		
	}else if($image1){
	
	
	  $sqlupdate1="Update category SET name='$uname', cat_img='$image1' WHERE cat_id='$id'";
	  $res1=mysqli_query($con,$sqlupdate1);
	  $myText = "Information Updated Successfully!";
	if($res){
	  
	  $myText="Successfully Updated";
	
		  echo 'Information Successfully updated';
	  header("location:category_list.php?id='$myText'");
	   
	}
	else{
	  echo 'Information not updated';
	}
	
	
	  
	}else if($image2){
	
	
	  $sqlupdate2="Update category SET name='$uname', cat_ban='$image2' WHERE cat_id='$id'";
	  $res2=mysqli_query($con,$sqlupdate2);
	  $myText = "Information Updated Successfully!";
	if($res){
	  
	  $myText="Successfully Updated";
	
		  echo 'Information Successfully updated';
	  header("location:category_list.php?id='$myText'");
	   
	}
	else{
	  echo 'Information not updated';
	}
	
	
	  
	}else{
	
	  $sqlupdate3="Update category SET name='$uname' WHERE cat_id='$id'";
	  $res3=mysqli_query($con,$sqlupdate3);
	  $myText = "Information Updated Successfully!";
	if($res){
	  
	  $myText="Successfully Updated";
	
		  echo 'Information Successfully updated';
	  header("location:category_list.php?id='$myText'");
	   
	}
	else{
	  echo 'Information not updated';
	}
	
	
	}
	
	
	
	
	}


?>
	
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity= "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous" /> 
		<link rel="stylesheet" type="text/css" href="designpage.css">
	</head>
	<body>



	<!-- <script>
  function showAlert() {
    var myText = "Information Updated Successfully!";
    alert (myText);
  }
  </script> -->


	<form action=""  method="post" enctype="multipart/form-data" style="background-color: rgb(80, 181, 240); padding: 50px; margin:300px; margin-top: 100px; ">
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <h4 style="text-align: center;">Edit categories</h4>
                                        <hr>
                                        
                        <div class="form-group">
                            <label for="name"><span style="color:#FF0000; margin-left: 140px;"  >*</span><b> category Name:</b></label>
                            <input type="text" name="name" value="<?php echo $row["name"] ?>" required >
                        </div>
						<br>

						<div class="form-group">
                            <label for="cat_img"></span><b> Category Image:</b></label>
                            <input type="file" name="cat_img" />"<?php echo $row["cat_img"] ?>" 
                        </div>

						<div class="form-group">
                            <label for="cat_ban"><b> Category Banner:</b></label>
                            <input type="file" name="cat_ban" />"<?php echo $row["cat_ban"] ?>" 
                        </div>

        <input type="submit" name="update" value="Update" style="margin-left: 290px;">
	</form>                                
	</body>
</html>
		