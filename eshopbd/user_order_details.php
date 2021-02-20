<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();
include "head.php";
include "customersession.php";
?>

<body class="js">

    <?php
    include "config.php";
    ?>

    <!-- Preloader -->
    <!-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> -->
    <!-- End Preloader -->


    <!-- Header -->
    <header class="header shop">

        <?php
        include "header.php";
        ?>

        <!--/ End Header Inner -->

    </header>
    <!--/ End Header -->
    <?php
    // $custom_id = $_SESSION['customerid'];
    // $query = "SELECT product.product_id,product.p_name,product.price,orders.created_at,orders.status,orders.pay_method, customer.first_name FROM product,orders, customer, order_details WHERE customer.customer_id=$custom_id  and customer.customer_id=$custom_id and orders.customer_id=$custom_id  and order_details.product_id=product.product_id and orders.id=order_details.order_id";
    $order_id = $_GET['order_id'];
    $product_id = $_GET['product_id'];
    $query = "SELECT product.*,orders.pay_method,order_details.quantity from product,orders,order_details where orders.id= $order_id and order_details.order_id=$order_id and order_details.product_id=$product_id and product.product_id=$product_id";

    $res3 = mysqli_query($con, $query);
    $rows = mysqli_fetch_array($res3);
    $price = $rows['price'];

    $quantity = $rows['quantity'];

    $subtotal = $price * $quantity;

    ?>


    <!--companny details/company promotion banner-->
    <div class="row" style="margin: 0 0;">
        <div class="col-12 companny-banner">
            <div class="companny-banner-content" style="">
                <h2>This is SKILLHUTCH</h2>
                <h6>Learn about this company,history and how SKILLHUTCH has empowered entreprenaurs with business opportunities</h6>
                <button class="btn btn-secondary" style=""><a href="https://www.skillhutch.com/">Learn more</a></button>
            </div>
        </div>
    </div>

    <!--end companny details/company promotion banner-->
    <div class="row" style="margin: 10% 0;">
        <div class="col-md-4">
            <div style="margin-left:190px;">
                <table class="table table-bordered" style="text-align: ">
                    <tr>

                        <td>
                            <a href="user_dashboard.php">
                                <h4> Dashboard</h4>
                            </a>
                            <hr>
                            <a href="user_order.php">
                                <h4> Order</h4>
                            </a>
                            <hr>
                            <a href="address.php">
                                <h4> Address</h4>
                            </a>
                            <hr>
                            <a href="user_wishlist.php">
                                <h4> Wishlist</h4>
                            </a>
                            <hr>
                            <a href="customerlogout.php">
                                <h4> Log Out</h4>
                            </a>



                        </td>
                    </tr>
                    <tr>

                </table>
            </div>
        </div>
        <div class="col-md-6">
            <main>
                <div style="margin-left:70px;">
                    <h2> Order Details </h2>
                    <table class="table table-bordered" style="font-size: 17px;">

                        <tr>
                            <th><?php echo $rows['p_name']; ?> x <?php echo $rows['quantity']; ?></th>
                            <td><?php echo $rows['price']; ?></td>
                        </tr>

                        <tr>
                            <th>Subtotal</th>

                            <td><?php echo $subtotal ?></td>
                        </tr>

                        <tr>
                            <th>Payment Method</th>
                            <td><?php echo $rows['pay_method']; ?></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td><?php echo $subtotal; ?></td>
                        </tr>

                        <tr>



                    </table>
                    <br> <br>

                    <?php

                    $query1 = "SELECT customer.* from customer";
                    $res1 = mysqli_query($con, $query1);
                    $rows1 = mysqli_fetch_array($res1);
                    ?>


                    <table class="table table-bordered" style="font-size: 17px;">
                        <tr>

                            <td>
                                <h2> Billing address </h2>
                                <hr>
                                <?php echo $rows1['first_name']; ?> <br>
                                <?php echo $rows1['Address']; ?> <br>
                                <?php echo $rows1['city']; ?> <br>
                                <?php echo $rows1['country']; ?> <br>
                                <i class="fas fa-phone"></i> <?php echo $rows1['phone']; ?> <br>
                                <i class="far fa-envelope"></i> <?php echo $rows1['email']; ?> <br>

                            </td>


                        </tr>



                        <tr>



                    </table>

                </div>
            </main>
        </div>
    </div>


    <!-- Start Footer Area -->


    <?php
    include "footer.php";
    ?>




</body>

</html>