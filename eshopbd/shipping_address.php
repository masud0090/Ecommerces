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

        <div class="col-md-8">
            <main>
                <!-- <div>
                    <table class="table table-bordered">

                        <h1>Hello admin (not admin? Log out)</h1>
                        <br>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit <br>
                            your password and account details.
                        </p>


                    </table>
                </div> -->


                <h2 style="margin-left: 80px;">Shipping Address</h2>
                <form name="book_details" action="shipping_address_connect.php" method="post" style="margin:4% 0;">
                    <div class="row mx-auto">

                        <div class="col-lg-4 col-md-5 col-sm-11 col-xl-4 mx-auto">


                            <h4>Your Personal Details</h4>
                            <hr>

                            <div class="form-group">
                                <label for="fname"><span style="color:#FF0000">*</span> First Name </label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter first-name" name="fname" required>
                            </div>
                            <div class="form-group">
                                <label for="lname"><span style="color:#FF0000">*</span> Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Enter Last-name" name="lname" required>
                            </div>

                            <div class="form-group">
                                <label for="email"><span style="color:#FF0000">*</span> Email</label>
                                <div>
                                    <input type="email" class="form-control from-control-login" id="email" placeholder="Enter Email" name="email" required>
                                    <?php if (isset($_GET['error1'])) : ?>
                                        <span><?php echo $_GET['error1']; ?></span>
                                    <?php endif ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-11 col-xl-4 mx-auto">
                            <h4>Your Address</h4>
                            <hr>

                            <div class="form-group">
                                <label for="cname">Phone no</label>
                                <input type="text" class="form-control" id="cname" placeholder="Enter phone no" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="add1"><span style="color:#FF0000">*</span> Address</label>
                                <input type="text" class="form-control" id="add1" placeholder="Enter Address" name="add1" required>
                            </div>
                            <div class="form-group">
                                <label for="add1"><span style="color:#FF0000">*</span>Billing address</label>
                                <input type="text" class="form-control" id="add1" placeholder="Enter Address" name="add2" required>
                            </div>
                            <div class="form-group">
                                <label for="city"><span style="color:#FF0000">*</span> City</label>
                                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><span style="color:#FF0000">*</span> Country</label>
                                <select class="form-control" id="country" name="country">
                                    <option>Country</option>
                                    <option>Bangladesh</option>
                                    <option>Canada</option>
                                    <option>USA</option>
                                    <option>India</option>
                                    <option>Thailand</option>
                                    <option>Japan</option>
                                    <option>Russia</option>

                                </select>
                            </div>
                            <br>


                            <div class="row text-right">

                                <label>I have read and agree to the <a href=""> Privacy Policy</a>
                                    <input type="checkbox" id="check">
                                    <input type="submit" id="sh" name="submit2" class="btn btn-info" value="continue"></label>
                            </div>
                        </div>
                    </div>
                </form>

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