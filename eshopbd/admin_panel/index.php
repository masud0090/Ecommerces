

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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Categories</div>
                                    <?php
                                        $con=mysqli_connect("localhost","root","","eshop") or die("database failed");
                                        $sql="SELECT COUNT(cat_id) AS Total_category FROM category";
                                        $res=mysqli_query($con,$sql) or die("query failed");
                                        $data=mysqli_fetch_assoc($res);
                                       
                                    ?>
                                    <h3 style="margin-left:82px"><?php echo $data['Total_category'];?></h3>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tcompany.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Sub-Categories</div>
                                    <?php
                                        $con=mysqli_connect("localhost","root","","eshop") or die("database failed");
                                        $sql="SELECT COUNT(sub_cat_id) AS Total_sub_category FROM sub_category";
                                        $res=mysqli_query($con,$sql) or die("query failed");
                                        $data=mysqli_fetch_assoc($res);
                                       
                                    ?>
                                    <h3 style="margin-left:82px"><?php echo $data['Total_sub_category'];?></h3>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tcategory.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Products</div>
                                    <?php
                                        $con=mysqli_connect("localhost","root","","eshop") or die("database failed");
                                        $sql="SELECT COUNT(product_id) AS Total_product FROM product";
                                        $res=mysqli_query($con,$sql) or die("query failed");
                                        $data=mysqli_fetch_assoc($res);
                                       
                                    ?>
                                    <h3 style="margin-left:82px"><?php echo $data['Total_product'];?></h3>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tJob.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Type</div>
                                    <?php
                                        $con=mysqli_connect("localhost","root","","eshop") or die("database failed");
                                        $sql="SELECT COUNT(type_id) AS Total_type FROM type";
                                        $res=mysqli_query($con,$sql) or die("query failed");
                                        $data=mysqli_fetch_assoc($res);
                                       
                                    ?>
                                    <h3 style="margin-left:82px"><?php echo $data['Total_type'];?></h3>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tUser.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-globe"></i>
                                Products
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>Serial No</th>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Type</th>
                                                <th>Unit</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $con=mysqli_connect("localhost","root","","eshop") or die("could not connect to db");
                                            
                                            $sql="SELECT product.image, product.p_name, type.t_name, unit.u_name FROM product,type,unit 
                                            where product.type_id=type.type_id and product.unit_id=unit.unit_id";
                                            $result=mysqli_query($con,$sql) or die("query failed");
                                                $count=1;
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                        echo'<tr style="text-align:center;"><td width="20%">'.$count.'';
                                        ?>		
                                                        <td width="20%"><img src="<?php echo $row["image"]; ?>"
                                                            style="width:50px;height:50px;"></td>
                                                        <td width="20%"><?php echo $row['p_name']?></td>
                                                        <td width="20%"><?php echo $row['t_name']?></td>
                                                        <td width="20%"><?php echo $row['u_name']?></td>
                                                    </tr>
                                        <?php
                                            $count++;
                                            }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
</body>
</html>

