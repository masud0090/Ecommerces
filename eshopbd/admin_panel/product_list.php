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
          <h1 class="mt-4">Products</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Products</li>
          </ol>

          <!--   <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div> -->

          <?php
          $con = mysqli_connect('localhost', 'root', '', 'eshop');
          $sql = "select product.product_id, product.image, product.p_name, product.price, product.product_limit, product.product_details, 
Sub_category.sub_cat_id, Sub_category.s_name, type.type_id, type.t_name, unit.unit_id, unit.u_name
FROM product, sub_category, type, unit where product.sub_cat_id=sub_category.sub_cat_id and 
product.type_id=type.type_id and product.unit_id=unit.unit_id";
          $res = mysqli_query($con, $sql);
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


          if (isset($_REQUEST['id'])) {
            echo '<div id="success-alert" class="alert alert-success alert-dismissible fade show"><strong>
                successfull</strong></div>';
          }
          ?>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" style="margin-left: 922px;" data-toggle="modal" data-target="#btn_add_product">
            +Add Products
          </button><br><br>

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
                  $q1 = "SELECT * FROM sub_category";
                  $r1 = mysqli_query($con, $q1) or die("wrong query");


                  $q2 = "SELECT * FROM type";
                  $r2 = mysqli_query($con, $q2) or die("wrong query");


                  $q3 = "SELECT * FROM unit";
                  $r3 = mysqli_query($con, $q3) or die("wrong query");

                  ?>

                  <script type="text/javascript">
                    function confirmation(delUrl) {
                      //var answer = confirm('Are you sure you want to delete?');
                      if (confirm("Are u sure you want to delete")) {
                        document.location = delUrl;
                      }

                    }
                  </script>

                  <form action="addproduct.php" method="POST" class="navbar-form navbar-left" enctype="multipart/form-data">

                    <span style="color:#FF0000;">* </span> Product Name: <input type="text" name="name" class="form-control" required> <br>
                    <span style="color:#FF0000;">* </span> Product Price: <input type="text" name="price" class="form-control" required> <br>
                    <span style="color:#FF0000;">* </span> Product Limit: <input type="text" name="limit" class="form-control" required> <br>

                    <span style="color:#FF0000;">* </span><label for="subcategory">Choose Subcategory:</label>
                    <select class="form-control" name="subcategory" id="subcategory" required>
                      <option value="">Select Subcategory</option>
                      <?php
                      while ($d = mysqli_fetch_assoc($r1)) {
                      ?>
                        <option value="<?php echo $d['sub_cat_id'] ?>"><?php echo $d['s_name'] ?></option>
                      <?php } ?>
                    </select><br>

                    <span style="color:#FF0000;">* </span><label for="type">Choose Type:</label>
                    <select class="form-control" name="type" id="type" required>
                      <option value="">Select Type</option>
                      <?php
                      while ($d = mysqli_fetch_assoc($r2)) {
                      ?>
                        <option value="<?php echo $d['type_id'] ?>"><?php echo $d['t_name'] ?></option>
                      <?php } ?>
                    </select><br>

                    <span style="color:#FF0000;">* </span><label for="unit">Choose Unit:</label>
                    <select class="form-control" name="unit" id="unit" required>
                      <option value="">Select Unit</option>
                      <?php
                      while ($d = mysqli_fetch_assoc($r3)) {
                      ?>
                        <option value="<?php echo $d['unit_id'] ?>"><?php echo $d['u_name'] ?></option>
                      <?php } ?>
                    </select><br>

                    Product Image: <input type="file" name="fileToUpload" class="form-control"> <br>
                    Product Details: <input type="text" name="details" class="form-control"> <br>




                    <input type="submit" name="submit" class="btn btn-success" value="submit">
                  </form>
                </div>
                <div class="modal-footer">

                  <!-- <button type="button" class="btn btn-primary">Save</button> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <table class="table table-bordered" id="dataTable">

              <thead class="thead-dark">
                <tr style="text-align:center;">
                  <th>SL</th>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th>Product Details</th>
                  <th>Subcategory Name</th>
                  <th>Type Name</th>
                  <th>Unit Name</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
              </thead>


              <?php
              $serial = 1;
              while ($row = mysqli_fetch_array($res)) {
              ?>
                <tr style="text-align:center;">
                  <td><?php echo $serial++; ?> </td>

                  <td><img src="uploads/<?php echo $row["image"]; ?>" style="width:70px;height:100px;"></td>
                  <td><?php echo $row['p_name'] ?></td>
                  <td><?php echo $row['price'] ?></td>
                  <td><?php
                      $description = substr($row['product_details'], 0, 100);

                      echo $description;
                      if (strlen($row['product_details']) >= 100) {
                        echo "...";
                      }
                      ?></td>
                  <td><?php echo $row['s_name'] ?></td>
                  <td><?php echo $row['t_name'] ?></td>
                  <td><?php echo $row['u_name'] ?></td>

                  <td><a href="deleteproduct.php?id=<?php echo $row["product_id"] ?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?');">DELETE </a></td>
                  <td><a href="updateproduct.php?id=<?php echo $row["product_id"] ?>" class="btn btn-success">EDIT</a></td>

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