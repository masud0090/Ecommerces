<?php
 
$con=mysqli_connect('localhost','root','','eshop');
$id=$_GET['id'];
$sql="select sub_category.sub_cat_id, sub_category.s_name, sub_category.sub_cat_img, category.cat_id, category.name FROM sub_category, category where 
sub_category.cat_id=category.cat_id and sub_cat_id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
if(isset($_POST['update'])){
	
    $uname1=$_POST['subcategory'];
    $uname2=$_POST['category'];
    $image=$_FILES['sub_cat_img']['name'];
    $temp=$_FILES['sub_cat_img']['tmp_name']; 
    move_uploaded_file($temp, "$image"); 
    if($image){
	$sqlupdate="Update sub_category SET s_name='$uname1', cat_id='$uname2', sub_cat_img='$image' WHERE sub_cat_id='$id'";
	$res=mysqli_query($con,$sqlupdate);
	$myText = "Information Updated Successfully!";

	if($res){
        echo 'Information Successfully updated';
		header("location:subcategory_list.php?id='$myText'");
	}
	else{
		echo 'Information not updated';
    }
}else{
    $sqlupdate="Update sub_category SET s_name='$uname1', cat_id='$uname2' WHERE sub_cat_id='$id'";
	$res=mysqli_query($con,$sqlupdate);
	$myText = "Information Updated Successfully!";

	if($res){
        echo 'Information Successfully updated';
		header("location:subcategory_list.php?id='$myText'");
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
        integrity= 
"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous" /> 
		<link rel="stylesheet" type="text/css" href="designpage.css">
	</head>
	<body>


	<form action=""  method="post" enctype="multipart/form-data" style="background-color: rgb(80, 181, 240); padding: 50px; margin:300px; margin-top: 100px; ">
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <h4 style="text-align: center;">Edit Subcategories</h4>
                                        <hr>
                                        
                        <div class="form-group">
                            <label for="email"><span style="color:#FF0000; margin-left: 140px;"  >*</span><b> Subcategory Name:</b></label>
                            <input type="text" name="subcategory" value="<?php echo $row["s_name"] ?>" >
                        </div>
                        <div class="form-group">
                            <?php
		  $uname2=$row['cat_id'];
          $q="SELECT * FROM category where cat_id!=$uname2";
          $res1=mysqli_query($con,$q) or die("wrong query");
          if(mysqli_num_rows($res1)>0){
          ?>
			
                            <label for="category"><span style="color:#FF0000; margin-left: 140px;">*</span> <b>Choose a category:</b></label>
  <select name="category" id="category">
    <option value="0">Select a Category</option>
   
	 <option value="<?php echo $row['cat_id']?>" selected><?php echo $row['name']?></option>
	 <?php
      while($row2=mysqli_fetch_assoc($res1)){
    ?>
    <option value="<?php echo $row2['cat_id']?>"><?php echo $row2['name']?></option>
	
    <?php }?>
  </select><br>
  
  <div class="form-group">
                            <label for="sub_cat_img"><span style="color:#FF0000; margin-left: 150px;"  ></span><b> Subcategory Image:</b></label>
                            <input type="file" name="sub_cat_img" />"<?php echo $row["sub_cat_img"] ?>" 
                        </div>

  <?php }?>
                        </div>


			</div>
		</div>

        <input type="submit" name="update" value="Update" style="margin-left: 290px;">
	</form>                                








	
	</body>
</html>
		