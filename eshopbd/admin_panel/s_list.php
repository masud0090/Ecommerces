


<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include "layouts/head.php";
    ?>
</head>

<body class="sb-nav-fixed">
     <!-- top navigation -->
     <div class="top_nav">
        <?php
            include "layouts/top_nav.php";
            ?>
    </div>
        <!-- /top navigation -->
      <!--   <div class="layoutSidenav_nav">
           
    </div>
 -->
 <div id="layoutSidenav">
            <?php
            include "layouts/sidebar_menu.php";
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Subcategories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Subcategories</li>
                        </ol>

                      <!--   <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div> -->
                        
                        <?php
$con=mysqli_connect('localhost','root','','eshop');
$sql="select sub_category.sub_cat_id, sub_category.s_name, sub_category.s_name, category.name FROM sub_category, category where sub_category.cat_id=category.cat_id";
$res=mysqli_query($con,$sql);
?>

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity= "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" /> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="designpage.css">
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" style="margin-left: 922px;" data-toggle="modal" data-target="#btn_add_subcategory">
  +Add Subcategories
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="btn_add_subcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Subcategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <?php
          $q="SELECT * FROM category";
          $r=mysqli_query($con,$q) or die("wrong query");
          if(mysqli_num_rows($r)>0){
          ?>
        <form action="addsubcategory.php" method="POST" class="navbar-form navbar-left" >
                Subcategory Name: <input type = "text" name="subcategory" class="form-control"> <br>

                <label for="category">Choose a category:</label>
  <select name="category" id="category">
    <option value="grocery">Select a Category</option>
    <?php
      while($d=mysqli_fetch_assoc($r)){
    ?>
    <option value="<?php echo $d['cat_id']?>"><?php echo $d['name']?></option>
    <?php }?>
  </select><br>
  <?php }?>

                        <input type="submit" name="submit"  class="btn btn-success" value="submit">
        </form>
      </div>
      <div class="modal-footer">
        
        <!-- <button type="button" class="btn btn-primary">Save</button> -->
      </div>
    </div>
  </div>
</div>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead  class="thead-dark"> 
<tr style="text-align:center;">
<th>Serial</th>
<th>Subcategory Name</th>
<th>Category Name</th>
<th>Delete</th>
<th>Edit</th>
</tr>
</thead>


<?php
$serial=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr style="text-align:center;">
<td width="20%"><?php echo $serial++; ?> </td>

<td width="20%"><?php echo $row["s_name"]; ?> </td>
<td width="20%"><?php echo $row["name"]; ?> </td>
<td width="20%"><a href="deletesubcategory.php?id=<?php echo $row["sub_cat_id"]?>" class="btn btn-danger">DELETE </a></td>
<td width="20%" >

<a href="?id=<?php echo $row["sub_cat_id"]?>" class="btn btn-success"  data-toggle="modal" data-target="#btn_edit_subcategory">EDIT </a>


</td>

</tr>

<?php
}
?>

  </table>
</div>
<div class="modal fade" id="btn_edit_subcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Subcategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
		<?php
		  $uname2=$row['cat_id'];
          $q="SELECT * FROM category where cat_id!=$uname2";
          $res1=mysqli_query($con,$q) or die("wrong query");
          if(mysqli_num_rows($res1)>0){
          ?>
        <form action="" method="POST" class="navbar-form navbar-left" >
                Subcategory Name: <input type="text" name="subcategory" value="<?php echo $row["s_name"] ?>" > <br>

                <label for="category">Choose a category:</label>
  <select name="category" id="category">
    <option value="0">Select a Category</option>
   
	 <option value="<?php echo $row['cat_id']?>" selected><?php echo $row['name']?></option>
	 <?php
      while($row2=mysqli_fetch_assoc($res1)){
    ?>
    <option value="<?php echo $row2['cat_id']?>"><?php echo $row2['name']?></option>
    <?php }?>
  </select><br>
  <?php }?>

                        <input type="submit" name="update"  class="btn btn-success" value="submit">
        </form>
      </div>
      <!-- <div class="modal-footer">
        
         <button type="button" class="btn btn-primary">Save</button> 
    </div>-->
    </div>
  </div>
</div>
</div> 
</body>
</html>
               
                   
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>
</div>

       

        <!-- page content -->
        <!-- <div class="right_col" role="main"> -->
        
                                        
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
    
            <?php

            include "layouts/footer.php";
            ?>
</body>
</html>























 
