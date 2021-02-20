


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
$sql="select sub_category.sub_cat_id, sub_category.s_name, sub_category.sub_cat_img, category.name FROM sub_category, category where sub_category.cat_id=category.cat_id";
$res=mysqli_query($con,$sql);
?>

<html>
<!-- <head>
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
<body> -->

<?php

     
        if(isset($_REQUEST['id'])){
         echo '<div id="success-alert" class="alert alert-success alert-dismissible fade show"><strong>
                successfull</strong></div>';
           

        }
      ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" style="margin-left: 905px;" data-toggle="modal" data-target="#btn_add_subcategory">
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
          $q="SELECT * FROM category;";
          $r=mysqli_query($con,$q) or die("wrong query");
          if(mysqli_num_rows($r)>0){
          ?>
        <form action="addsubcategory.php" method="POST" class="navbar-form navbar-left" enctype="multipart/form-data">
        <span style="color:#FF0000;">* </span> Subcategory Name: <input type = "text" name="subcategory" class="form-control" required> <br>

                <label for="category"><span style="color:#FF0000;">* </span> Choose a category:</label>
  <select class="form-control" name="category" id="category" required>
    <option value="">Select a Category</option>
    <?php
      while($d=mysqli_fetch_assoc($r)){
    ?>
    <option value="<?php echo $d['cat_id']?>"><?php echo $d['name']?></option>
    <?php }?>
  </select><br>

  Subcategory Image: <input type="file" name="fileToUpload"class="form-control" > <br>
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
<th>Image</th>
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
<td width="20%"><img src="<?php echo $row["sub_cat_img"]; ?>"
  style="width:80px;height:70px;"></td>
<td width="20%">
<?php
$u_id=$row['sub_cat_id'];
   $d_sql="select distinct sub_category.sub_cat_id from sub_category, type, product where product.sub_cat_id=$u_id 
   and type.sub_cat_id=$u_id";
   $d_res=mysqli_query($con,$d_sql);
   $count=mysqli_num_rows( $d_res);
  //  echo $count."<br>".$d_sql;
   if($count<1){
  ?>
<a href="deletesubcategory.php?id=<?php echo $row["sub_cat_id"]?>" class="btn btn-danger" 
onClick="return confirm('Are you sure you want to delete?');">DELETE </a>
<?php
   }else{
?>
<!-- <a  type="button" class="disabled" style="cursor:not-allowed !important;">DELETE</a> -->

<span style="cursor: not-allowed;">
   <button class="btn btn-danger"  style="pointer-events: none;
     opacity: 0.7;"> DELETE</button>
</span>


<?php
   }
   ?>
</td>
<td width="20%"><a href="updatesubcategory.php?id=<?php echo $row["sub_cat_id"] ?>" class="btn btn-success">EDIT</a></td>
</tr>

<?php
}
?>
</table>
  </table>
</div>
</body>
</html>
                        
                    </div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
            $("#success-alert").slideUp(500);
        });
    </script>

</body>
</html>























 
