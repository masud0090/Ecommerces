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
    $custom_id = $_SESSION['customerid'];
    $query = "SELECT product.product_id,product.p_name,product.price,orders.created_at,orders.status, customer.first_name FROM product,orders, customer, order_details WHERE customer.customer_id=$custom_id  and customer.customer_id=$custom_id and orders.customer_id=$custom_id  and order_details.product_id=product.product_id and orders.id=order_details.order_id";
    $res = mysqli_query($con, $query);
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
            <div style="margin-left:130px;">
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
                <div>
                    <table class="table table-bordered">

                        <h1>Hello admin (not admin? Log out)</h1>
                        <br>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit <br>
                            your password and account details.
                        </p>


                    </table>
                </div>
            </main>
        </div>
    </div>

    <br> <br>
    <!-- Start Footer Area -->


    <?php
    include "footer.php";
    ?>




</body>

</html>