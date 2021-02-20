<?php
 
$con=mysqli_connect('localhost','root','','eshop');
$id=$_GET['id'];
$sql="select sub_category.sub_cat_id, sub_category.s_name, category.cat_id, category.name FROM sub_category, category where 
sub_category.cat_id=category.cat_id and sub_cat_id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
if(isset($_POST['update'])){
	
    $uname1=$_POST['subcategory'];
    $uname2=$_POST['category'];
	$sqlupdate="Update sub_category SET s_name='$uname1', cat_id='$uname2' WHERE sub_cat_id='$id'";
	$res=mysqli_query($con,$sqlupdate);
	if($res){
		echo 'Information Successfully updated';
		header("location:subcategory_list.php");
		
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
	<form  action="" method="post" enctype="multipart/form-data">

		<table class="table" >		
		
		<thead  class="thead-dark"> 
		<tr style="text-align:center;">
			<th>Subcategory ID</th>
            <th>Subcategory Name</td>
            <th>Category Name</td>
			</tr>
</thead>
		
<?php
		  $uname2=$row['cat_id'];
          $q="SELECT * FROM category where cat_id!=$uname2";
          $res1=mysqli_query($con,$q) or die("wrong query");
          if(mysqli_num_rows($res1)>0){
          ?>
		<tr style="text-align:center;">


			<td><input type="text" name="sub_cat_id" value="<?php echo $row["sub_cat_id"] ?>" ></td>
            <td><input type="text" name="subcategory" value="<?php echo $row["s_name"] ?>" ></td>

			
                           <td> <label for="category">Choose a category:</label>
  <select name="category" id="category">
    <option value="0">Select a Category</option>
   
	 <option value="<?php echo $row['cat_id']?>" selected><?php echo $row['name']?></option>
	 <?php
      while($row2=mysqli_fetch_assoc($res1)){
    ?>
    <option value="<?php echo $row2['cat_id']?>"><?php echo $row2['name']?></option>
	
    <?php }?>
  </select></td><br>
  <?php }?>
			
			
		</tr>

		</table>
		<br>
		<input type="submit" name="update" value="Update">
	</form>
	</body>
</html>
		