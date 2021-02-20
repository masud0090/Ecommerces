


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
                        <h1 class="mt-4">Orders</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>

                      <!--   <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div> -->
                        
                        <?php
$con=mysqli_connect('localhost','root','','eshop');
$sql="select orders.*, concat(concat(orders.id, ', '),  customer.first_name) as order_name from orders, customer where orders.customer_id=customer.customer_id   ";
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
<body>
 -->
<?php

     
        if(isset($_REQUEST['id'])){
         echo '<div id="success-alert" class="alert alert-success alert-dismissible fade show"><strong>
                successfull</strong></div>';
           

        }
      ?>

<script type="text/javascript">

      function confirmation(delUrl){
      //var answer = confirm('Are you sure you want to delete?');
      if(confirm("Are u sure you want to Cancel")){
      document.location = delUrl;
       }

      }
     </script>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead  class="thead-dark"> 
<tr style="text-align:center;">
<th>Serial</th>
<th>Order ##</th>
<th>Date</th>
<th>Status</th>
<th>Total</th>
<th>Action</th>
</tr>
</thead>


<?php
$serial=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr style="text-align:center;">
<td width="20%"><?php echo $serial++; ?> </td>

<td width="20%"><?php echo $row["order_name"]; ?> </td>
<td width="20%"><?php echo $row["created_at"]; ?> </td>

<td width="20%"><?php echo $row["status"]; ?> </td>
<td width="20%"><?php echo $row["total"]; ?> </td>

<td width="20%" class="text-center " >

  <a  href="order_details.php?order_id=<?php echo $row["id"]?>" class="btn btn-danger btn-sm"
onClick="return confirm('Are you sure you want to delete?');">VIEW </a><br>
<?php

$status=$row['status'];

  //  echo $count."<br>".$d_sql;
   if( $status=='completed' ){
  ?>
  <span style="cursor: not-allowed;">
   <button class="btn btn-danger btn-sm"  style="pointer-events: none;
     opacity: 0.7;">CANCEL</button>
</span>

<?php
   }else{
?>
<!-- <a  type="button" class="disabled" style="cursor:not-allowed !important;">DELETE</a> -->
<a href="deletetype.php?id=<?php echo $row["type_id"]?>" class="btn btn-danger btn-sm"
onClick="return confirm('Are you sure you want to delete?');">CANCEL </a>



<?php
   }
   ?>
</td>

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























 
