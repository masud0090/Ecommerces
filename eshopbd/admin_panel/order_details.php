


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
                        <h1 class="mt-4">Order Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Order Details</li>
                        </ol>

                      <!--   <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div> -->
                        
                        <?php
$con=mysqli_connect('localhost','root','','eshop');
$order_id=$_GET['order_id'];
$sql="select product.product_id, product.image, product.p_name, product.price, product.product_limit, product.product_details, 
Sub_category.sub_cat_id, Sub_category.s_name, type.type_id, type.t_name, unit.unit_id, unit.u_name
FROM product, sub_category, type, unit where product.sub_cat_id=sub_category.sub_cat_id and 
product.type_id=type.type_id and product.unit_id=unit.unit_id" ;
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


<!-- Modal -->
<div class="modal fade" id="btn_add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <?php
          $q1="SELECT * FROM sub_category";
          $r1=mysqli_query($con,$q1) or die("wrong query");
         
         
          $q2="SELECT * FROM type";
          $r2=mysqli_query($con,$q2) or die("wrong query");
        
         
          $q3="SELECT * FROM unit";
          $r3=mysqli_query($con,$q3) or die("wrong query");
         
          ?>

<script type="text/javascript">

function confirmation(delUrl){
//var answer = confirm('Are you sure you want to delete?');
if(confirm("Are u sure you want to delete")){
  document.location = delUrl;
}

}
</script>

        <form action="addproduct.php" method="POST" class="navbar-form navbar-left" enctype="multipart/form-data">
               
        <input type="text" class="demo">
        <input type="hidden" id="hidden-field">

        <span style="color:#FF0000;">* </span><label for="subcategory">Choose Subcategory:</label>
  <select class="form-control" name="subcategory" id="subcategory" required>
    <option value="">Select Subcategory</option>
    <?php
      while($d=mysqli_fetch_assoc($r1)){
    ?>
    <option value="<?php echo $d['sub_cat_id']?>"><?php echo $d['s_name']?></option>
    <?php }?>
  </select><br>

  



                
  

                        <!-- <input type="submit" name="submit"  class="btn btn-success" value="submit"> -->
        </form>
      </div>
      <div class="modal-footer">
        
        <!-- <button type="button" class="btn btn-primary">Save</button> -->
      </div>
    </div>
  </div>
</div>

<hr>
                <?php
                $sql_query="select orders.*, customer.*, orders.phone o_phone, concat(concat(customer.first_name,' '),customer.last_name) as fullname from orders, customer where orders.id=$order_id and orders.customer_id=customer.customer_id";
                $sql_res=mysqli_query($con,$sql_query);
                $sql_data=mysqli_fetch_assoc($sql_res);

                ?>
                <div class="container">
                <div class="row">
                <div class="col-lg-12">
                <label><h4>Order #<?php echo $sql_data['id'] ?> Details</h4></label><br>
                <label><h5>Payment via <?php echo $sql_data['pay_method'] ?>. Customer Name: <?php echo $sql_data['first_name'] ?> </h5></label><br><br>

                </div>
                </div>
                
                <hr>

                <div class="row">
                <div class="col-lg-6">
                <label for="general"><h5>General</h5></label>
                <h6>Date created:</h6>
                <p><?php echo $sql_data['created_at'] ?></p>
                <h6>Status:</h6>
                <select style="width:400px" class="form-control" name="status"  >
                    <option value="pending">pending</option>
                    <option value="processing">processing</option>
                    <option value="shipping">shipping</option>
                    <option value="completed">completed</option>
                
                </select><br>
                </div>
                <div class="col-lg-6">
                <label for="shipping"><h5>Shipping</h5></label><br>
                <label>Name</lebel>
                <input style="width:400px" type = "text" name="last_name" class="form-control" value="<?php echo $sql_data['fullname'] ?>" >
                <label>Address</lebel>
                <input style="width:400px" type = "text" name="last_name" class="form-control" value="<?php echo $sql_data['address'] ?>" >
                <label>Phone</lebel>
                <input style="width:400px" type = "text" name="last_name" class="form-control" value="<?php echo $sql_data['o_phone'] ?>" >

                </div>

                </div>
                <br>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" style="margin-left: 880px;" data-toggle="modal" data-target="#btn_add_product">
  +Add Products
</button><br>
                <hr>
              
                <div class="container">
                <div class="row">
                <div class="col-lg-3">
                <label for="billing">Item</label>
                </div>
                <div class="col-lg-3">
                <label for="billing">Cost</label>
                </div>
                <div class="col-lg-3">
                <label for="billing">Qty</label>
                </div>
                <div class="col-lg-3">
                <label for="billing">Total</label>
                </div>
                </div>



                </div>
                
 


     <!-- <div> -->
 <!-- </div>
 </div> -->

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























 
