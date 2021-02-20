<?php
 
$con=mysqli_connect('localhost','root','','eshop');
$id=$_GET['id'];
$sql="select type.type_id, type.t_name, sub_category.s_name, sub_category.sub_cat_id FROM type, sub_category where type.sub_cat_id=sub_category.sub_cat_id and type.type_id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
if(isset($_POST['update'])){
	
    $uname1=$_POST['type'];
    $uname2=$_POST['subcategory'];
	$sqlupdate="Update type SET t_name='$uname1', sub_cat_id='$uname2' WHERE type_id='$id'";
	$res=mysqli_query($con,$sqlupdate);
	if($res){
		echo 'Information Successfully updated';
		header("location:type_list.php");
		
	}
	else{
		echo 'Information not updated';
	}
	
}


?>
	
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity= 
"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous" /> 
		<link rel="stylesheet" type="text/css" href="designpage.css">
	</head>
	<body>


	<form action=""  method="post" enctype="multipart/form-data" style="background-color: rgb(80, 181, 240); padding: 50px; margin:300px; margin-top: 100px; ">
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <h4 style="text-align: center;">Edit Types</h4>
                                        <hr>
                                        
                        <div class="form-group">
                            <label for="email"><span style="color:#FF0000; margin-left: 140px;"  >*</span><b> Type Name:</b></label>
                            <input type="text" name="type" value="<?php echo $row["t_name"] ?>" >
                        </div>
                        <div class="form-group">
                            <?php
		  $uname2=$row['sub_cat_id'];
          $q="SELECT * FROM sub_category where sub_cat_id!=$uname2";
          $res1=mysqli_query($con,$q) or die("wrong query");
          if(mysqli_num_rows($res1)>0){
          ?>
			
<label for="subcategory"><span style="color:#FF0000; margin-left: 140px;">*</span> <b>Choose subcategory:</b></label>
  <select name="subcategory" id="subcategory">
    <option value="0">Select Subcategory</option>
   
	 <option value="<?php echo $row['sub_cat_id']?>" selected><?php echo $row['s_name']?></option>
	 <?php
      while($row2=mysqli_fetch_assoc($res1)){
    ?>
    <option value="<?php echo $row2['sub_cat_id']?>"><?php echo $row2['s_name']?></option>
	
    <?php }?>
  </select><br>
  <?php }?>
                        </div>


			</div>
		</div>

        <input type="submit" name="update" value="Update" style="margin-left: 290px;">
	</form>                                








	
	</body>
</html>
		