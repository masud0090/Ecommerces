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

	<!--bootstrap 4.5 cdn css-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	 <!--fontawesome link below taken from w3schools.com-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


	<style>

		.menu-cat-subcat{
			z-index:999;
			border-radius:5px;
			background-color:#fff;
			position:absolute;
			left:0;
			top:5%;
			display:flex;
			flex-direction:row;
			fle-wrap:wrap;
			padding:1rem;
			margin-left:5%;
		}
		.menu-cat-subcat-ul{
			width:30%;
			background:transparent
		}


		.menu-cat-subcat-ul-li-subcat{
			padding:0.3rem 0;
		}

		.dropdown{
			padding: 2rem;

		}
		video {
		object-fit: cover;
		width: 100vw;
		height: 75vh;

		top: 0;
		left: 0;
		}

		.carousel-card{
			margin:0 2rem;
		}

		.offer-medium-banner{
			position:absolute;
			z-index: 999;
			top:25%;
			left: 21%;
			background-color: #fff;
			width: 60%;
			height: auto;
			padding: 1rem;
			border-radius: 5px;
			text-align: center;
		}

		.companny-banner{
			background-image: url('images/5.jpg');
			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
			height: 70vh;
		}
		
		.cat-container{
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			text-align: center;
			width: 100%;
	
		}

		.cat{
			height: 10vh;
			
			padding: 0.5rem;
		}

		.cat ul{
		
		}

		.promise{
				/*background-color: #EDEDEF;*/
				background-color:#D3E5FC;
				width:100%;
				height:45%;
				margin:16% 0;
				display:flex;
				flex-direction: column;
				text-align: center;
				align-items: center;
				justify-content: center;
		}

		.promise-image{
			position: absolute;
			top: -41%;
			text-align: center;
			margin: 0 15%;
			width: 70%;
		}
		.promise-image h2{
			font-size:1.3rem;
			font-weight:bold;
			padding:2% 0;

		}

		.promise-image img{
			width: 35%;
			height: 25%;
			border-radius: 50%; 
			box-shadow: 5px 5px 10px #333333;
		}

		.promise-image button{
			border-radius: 20px;
			outline:none;
		}

		.promise-image button:hover{
			background-color:crimson;
		}

		.companny-banner-content{
			color:#fff;
			width: 30%;
			float: left;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
			margin: 20vh 0;
		}
		.companny-banner-content h2{
			font-size:1.4rem;
			margin:0.7rem 0;
			font-weight:bold;
		
		}

		.companny-banner-content h6{
			font-size:1rem;
			margin:0.7rem 0;
			
		}

		.companny-banner-content button{
			font-size:1rem;
			margin:0.7rem 0;
			border-radius: 20px;
		}
		.companny-banner-content button:hover{
			background-color:crimson;
		}

		/*category poriton */
		.product-content h3{
			font-size:1.5rem;
			text-transform:uppercase;
			font-weight:bold;
		}

		.product-content h3 i{
			color:crimson;
			margin-left:5px;
		}


		@media(max-width:568px){
			.companny-banner-content{
				color:#fff;
				width:100%;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				text-align: center;
				margin: 20vh 0;
			}
		}

		@media(max-width:755px){
				.menu-cat-subcat{
				z-index:999;
				border-radius:5px;
				background-color:#fff;
				position:sticky;
				padding:0.5rem;
				margin-left:0;
				display:flex;
				flex-direction:row;
				flex-wrap:wrap;
				text-align:center;
				border:2px solid grey;
			}
			.menu-cat-subcat-ul{
				width:30%;
				background:transparent;
			}


			.menu-cat-subcat-ul-li-subcat{
				padding:0;
			}
			.cat-container{
				display: block;
				
		
			}
		}

        /*customer account details */
        .my-lists{
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:space-around;
        }

	</style>
	
</head>
<body class="js">

		<?php 
			include "config.php";
		?>
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
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
									
													<li><a href="#" class='small-screen-cat-subcat'>Shop Products<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<div class="cat-container" style="">
																
																<div class="menu-cat-subcat" style="">
																	<?php
																		while($data=mysqli_fetch_assoc($result)){
																	?>
																	
																		<ul style="" class="menu-cat-subcat-ul">
																			<li class="category"><a style="font-size:1.2rem;font-weight:bold;color:#3B4449;"><?php echo $data['name'];?></a></li>
																			<div class="subcat-lists">
																			<?php 
																				 $cat=$data['cat_id'];
																				$sql2="SELECT * FROM sub_category WHERE cat_id='{$cat}'";
																				$result2=mysqli_query($con,$sql2) or die("query failed");
																				while($data2=mysqli_fetch_assoc($result2)){	
																			?>
																			
																			<li style="" class="menu-cat-subcat-ul-li-subcat"><a href="shop-grid.php?sub-cat-id=<?php echo $data2['sub_cat_id'];?>"><?php echo $data2['name'];?></a></li>
																			<?php }?>
																			</div>
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
	
    <div class="my-order-details" style="margin:4% 0;">
       <div class="row">
          <div class="col-xl-10 col-lg-10 col-md-11 col-11 mx-auto">
               <div class="row">
                   <div class="col-xl-10 col-lg-10 col-md-11 col-11 mx-auto" style="background-color:grey;">
                         <ul class="my-lists">
                              <li class='my-lists-li'>order list</li>
                              <li class='my-lists-li'>wish list</li>
                              <li class='my-lists-li'>my info</li>
                         </ul>
                   </div>
               </div>
               <div class="row">
                   <div class="col-xl-10 col-lg-10 col-md-11 col-11 mx-auto">
                         <ul class="show">

                         </ul>
                   </div>
               </div>
          </div>
       </div>
    </div>

	
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
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
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

	<script>
        $(document).ready(function(){
           $('.my-lists-li').on('click',function(){
               var text=$(this).html();
              // alert(text);

               $.ajax({
                   url:'my-lists-display.php',
                   type:"POST",
                   data:{listtext:text},
                   success:function(data){
                    $('.show').html(data);
                   }
               })
           })
        })
    </script>


	
</body>
</html>