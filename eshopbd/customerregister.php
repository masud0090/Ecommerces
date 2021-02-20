<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Jquery Ui -->
    <link rel="stylesheet" href="css/jquery-ui.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


	<style>

	</style>
	
	
</head>
<body class="js">
		<?php 
			include "config.php";
		?>
		<!-- Header -->
		<header class="header shop">

    <div class="middle-inner">
	 <div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-12">
				<!-- Logo -->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="logo"></a>
				</div>
				<!--/ End Logo -->
				<!-- Search Form -->
				<div class="search-top">
					<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
					<!-- Search Form -->
					<div class="search-top">
						<form class="search-form">
							<input type="text" placeholder="Search here..." name="search">
							<button value="search" type="submit"><i class="ti-search"></i></button>
						</form>
					</div>
					<!--/ End Search Form -->
				</div>
				<!--/ End Search Form -->
				<div class="mobile-nav"></div>
			</div>
			<div class="col-lg-8 col-md-7 col-12">
				<div class="search-bar-top">
					<div class="search-bar">
						<form>
							<input name="search" placeholder="Search Products Here....." type="search">
							<button class="btnn"><i class="ti-search"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-12">
				<div class="right-bar">
					<!-- Search Form -->
					<div class="sinlge-bar">
						<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
					</div>
					<div class="sinlge-bar">
						<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
					</div>
					<div class="sinlge-bar shopping">
						<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
						<!-- Shopping Item -->
						<div class="shopping-item">
							<div class="dropdown-cart-header">
								<span>2 Items</span>
								<a href="#">View Cart</a>
							</div>
							<ul class="shopping-list">
								<li>
									<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
									<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
									<h4><a href="#">Woman Ring</a></h4>
									<p class="quantity">1x - <span class="amount">$99.00</span></p>
								</li>
								<li>
									<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
									<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
									<h4><a href="#">Woman Necklace</a></h4>
									<p class="quantity">1x - <span class="amount">$35.00</span></p>
								</li>
							</ul>
							<div class="bottom">
								<div class="total">
									<span>Total</span>
									<span class="total-amount">$134.00</span>
								</div>
								<a href="checkout.html" class="btn animate">Checkout</a>
							</div>
						</div>
						<!--/ End Shopping Item -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
 $sql="SELECT * FROM category";
 $result=mysqli_query($con,$sql) or die("query failed");

?>
<!-- Header Inner -->
<div class="header-inner">
	<div class="container">
		<div class="cat-nav-head">
			<div class="row">
				<div class="col-lg-9 col-12">
					<div class="menu-area">
						<!-- Main Menu -->
						<nav class="navbar navbar-expand-lg">
							<div class="navbar-collapse">	
								<div class="nav-inner">	
									<ul class="nav main-menu menu navbar-nav">
							
											<li><a href="#">Shop Products<i class="ti-angle-down"></i></a>
												<ul class="dropdown">
													<div class="cat-container" style="">
														<div class="">
															<?php
																while($data=mysqli_fetch_assoc($result)){
															?>
																<ul>
																	<li><a><?php echo $data['name'];?></a></li>
																	<?php 
																		echo $cat=$data['cat_id'];
																		$sql2="SELECT * FROM sub_category WHERE cat_id='{$cat}'";
																		$result2=mysqli_query($con,$sql2) or die("query failed");
																		while($data2=mysqli_fetch_assoc($result2)){
																			
																	?>
																	<li><a href="shop-grid.php?sub-cat-id=<?php echo $data2['sub_cat_id'];?>"><?php echo $data2['name'];?></a></li>
																	<?php }?>
																</ul>
															<?php }?>
														</div>
						
													</div>
												</ul>
											</li>
											<li><a href="#">About us<i class="ti-angle-down"></i></a></li>
											<li><a href="#">Special offers</a></li>
										</ul>
								</div>
							</div>
						</nav>
						<!--/ End Main Menu -->	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Header Inner -->

</header>
<!--/ End Header -->

            
     <div style="margin:4% 0;">
     <div class="row mx-auto">
	 <div style="margin-left:110px;" class="col-lg-4 col-md-5 col-sm-11 col-xl-4 ">
	 <p>
		<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Login for Existing User</a>
		<!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button> -->
		<!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button> -->
		</p>
		<div class="row">
		 <div class="col">
			<div class="collapse multi-collapse" id="multiCollapseExample1">
				<div class="card card-body">
				 <form action="customerlogin.php" method="POST">
				                    <div class="form-group">
                                        <label for="email"><span style="color:#FF0000"></span> Email</label>
                                        <div>
                                        <input type="email" class="form-control from-control-login" id="email" placeholder="Enter Email" name="email" required>
                                       
                                        </div>
                                    </div>
									<div name="frmCheckPassword" id="frmCheckPassword">
                                        <div class="form-group">
                                            <label for="pwd"><span style="color:#FF0000"></span> Password:</label>
                                            <input type="password" class="form-control demoInputBox" id="password" placeholder="Enter password" name="password" onKeyUp="checkPasswordStrength();">
                                            <div id="password-strength-status"></div>
                                        </div>
                                    </div>
									<div class="text-left">
									<button type="submit" id="sh" name="login" class="btn btn-info"value="Log in">Log in"</button>
									</div>
									</form>
				</div>
			</div>
		 </div>
		   <!-- <div class="col">
			<div class="collapse multi-collapse" id="multiCollapseExample2">
			<div class="card card-body">
				Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
			</div>
			</div> -->
		  
		</div>
	 </div>
	 </div>

	 </div>

        <form name="book_details" action="customerregistertemp.php" method="post" style="margin:4% 0;">
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
                                        <br>
                                    <h4>Your Password</h4>
                                    <hr>


                                    <div name="frmCheckPassword" id="frmCheckPassword">
                                        <div class="form-group">
                                            <label for="pwd"><span style="color:#FF0000">*</span> Password:</label>
                                            <input type="password" class="form-control demoInputBox" id="password" placeholder="Enter password" name="password" onKeyUp="checkPasswordStrength();">
                                            <div id="password-strength-status"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpwd"><span style="color:#FF0000">*</span> Confirm Password</label>
                                        <input type="password" class="form-control" id="cpwd" placeholder="Enter Confirm-password" name="cpwd" required>
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
                                  <input type="submit" id="sh" name="submit1" class="btn btn-info"value="continue"></label>
                                </div>
                            </div>
                        </div>
        </form>

		
		<!-- Start Footer Area -->
		<footer class="footer">
			<!-- Footer Top -->
			<div class="footer-top section">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer about">
								<div class="logo">
									<a href="index.html"><img src="images/logo2.png" alt="#"></a>
								</div>
								<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
								<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer links">
								<h4>Information</h4>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Faq</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer links">
								<h4>Customer Service</h4>
								<ul>
									<li><a href="#">Payment Methods</a></li>
									<li><a href="#">Money-back</a></li>
									<li><a href="#">Returns</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer social">
								<h4>Get In Tuch</h4>
								<!-- Single Widget -->
								<div class="contact">
									<ul>
										<li>NO. 342 - London Oxford Street.</li>
										<li>012 United Kingdom.</li>
										<li>info@eshop.com</li>
										<li>+032 3456 7890</li>
									</ul>
								</div>
								<!-- End Single Widget -->
								<ul>
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-flickr"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Top -->
			<div class="copyright">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="left">
									<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="right">
									<img src="images/payments.png" alt="#">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /End Footer Area -->
	
	
    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>



</body>
</html>