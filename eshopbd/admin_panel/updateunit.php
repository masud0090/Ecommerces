<?php
 
$con=mysqli_connect('localhost','root','','eshop');
$id=$_GET['id'];
$sql="select * FROM unit WHERE unit_id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
if(isset($_POST['update'])){
	
	$uname=$_POST['unit'];
	$sqlupdate="Update unit SET u_name='$uname' WHERE unit_id='$id'";
	$res=mysqli_query($con,$sqlupdate);
	$myText = "Information Updated Successfully!";

	if($res){
        echo 'Information Successfully updated';
		header("location:unit_list.php?id='$myText'");
	}
	else{
		echo 'Information not updated';
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


	<form action=""  method="post" enctype="multipart/form-data" style="background-color: rgb(80, 181, 240); padding: 50px; margin:300px; margin-top: 100px; ">
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <h4 style="text-align: center;">Edit unit</h4><hr>
                        <div class="form-group">
                            <label for="email"><span style="color:#FF0000; margin-left: 140px;"  >*</span><b> Unit Name:</b></label>
                            <input type="text" name="unit" value="<?php echo $row["u_name"] ?>" >
                        </div>
						<br>

        <input type="submit" name="update" value="Update" style="margin-left: 290px;">
	</form>                                
	</body>
</html>
		