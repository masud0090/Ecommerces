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

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


	<style>
		.dropdown {
			padding: 2rem;
		}

		video {
			object-fit: cover;
			width: 100vw;
			height: 75vh;

			top: 0;
			left: 0;
		}

		.carousel-card {
			margin: 0 2rem;
		}

		.offer-medium-banner {
			position: absolute;
			z-index: 999;
			top: 25%;
			left: 21%;
			background-color: #fff;
			width: 60%;
			height: auto;
			padding: 1rem;
			border-radius: 5px;
			text-align: center;
		}

		.companny-banner {
			background-image: url('images/5.jpg');
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 70vh;
		}

		.cat-container {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			text-align: center;
			padding: 0.5rem;
		}

		.cat {
			height: 10vh;
			width: 100%;
		}

		.cat ul {}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="lla.css">
	<link href="a/all.css" rel="stylesheet" type="text/css" />

</head>

<body class="js">
	<?php include "config.php"; ?>


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
														<div class="cat-container" style="display: flex;flex-direction:row;">
															<div class="cat">
																<ul>
																	<li><a>Grocery</a></li>
																	<li><a href="cart.html">g1</a></li>
																	<li><a href="cart.html">g2</a></li>
																	<li><a href="cart.html">g3</a></li>
																</ul>
															</div>
															<div class="cat">
																<ul>
																	<li><a>Grocery</a></li>
																	<li><a href="cart.html">P1</a></li>
																	<li><a href="cart.html">P2</a></li>
																	<li><a href="cart.html">P3</a></li>
																</ul>
															</div>
															<div class="cat">
																<ul>
																	<li><a>Grocery</a></li>
																	<li><a href="cart.html">P1</a></li>
																	<li><a href="cart.html">P2</a></li>
																	<li><a href="cart.html">P3</a></li>
																</ul>
															</div>
															<div class="cat">
																<ul>
																	<li><a>Grocery</a></li>
																	<li><a href="cart.html">P1</a></li>
																	<li><a href="cart.html">P2</a></li>
																	<li><a href="cart.html">P3</a></li>
																</ul>
															</div>
															<div class="cat">
																<ul>
																	<li><a>Grocery</a></li>
																	<li><a href="cart.html">P1</a></li>
																	<li><a href="cart.html">P2</a></li>
																	<li><a href="cart.html">P3</a></li>
																</ul>
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


	<!-- our store -->
	<div class="row" style="background-color:#EEEEEE">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">

			<!-- our store 
		
		<div class="row">
			<div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto our-store-text mb-3">
				<h1>Our <span id="text">Store </span></h1>
			</div>
		</div>	-->
			<!-- buttons	
		<div class="row mb-3">
			<div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto store-options-div">
				<button class="store-options mb-3">ALL</button>
				<button class="store-options mb-3">CAKE</button>
				<button class="store-options mb-3">DOUGNUT</button>
				<button class="store-options mb-3">SWEET</button>
				<button class="store-options mb-3">CHOCOLATE</button>
				<button class="store-options mb-3">ICECREAM</button>
			</div>
		</div>		 -->
			<!-- search box 
		<div class="row mb-3">
			<div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto input-search">
				<button id="search" ><i class="fas fa-search"></i></button>
				<input id="input" type="text" placeholder="search items...">
				
			</div>
		</div> -->




			<div class="row clear mt-3 mx-auto" style="background-color:#EEEEEE">
				<!--left side category bar start-->
				<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mx-auto clear ml-2 order-card">
					<div class="row item-card-row clear ml-3 pt-3">
						<div class="sub-cat-container">
							<h1>sub-category will be placed here</h1>
							<?php

							$subcatid = $_GET['sub-cat-id'];
							$sql = "SELECT t_name FROM type WHERE sub_cat_id='{$subcatid}'";
							$result = mysqli_query($con, $sql) or die("query failed");
							?>
							<div class="sub-cat">
								<ul class="sub-cat-list">
									<?php
									while ($data = mysqli_fetch_assoc($result)) {
									?>
										<li class='type'><a href="type_product.php?id=<?php //echo $_GET['sub-cat-id'];
																						?>"><?php echo $data['t_name']; ?></a></li>
										<input type='hidden' name='subcatid' id='subcatid' val='<?php echo $_GET['sub-cat-id']; ?>'>
									<?php } ?>
								</ul>
							</div>

						</div>
					</div>
				</div>

				<!--right side category bar ends-->
				<?php
				$subcat = $_GET['sub-cat-id'];
				$sql2 = "SELECT * FROM product WHERE sub_cat_id='{$subcat}'";
				$result2 = mysqli_query($con, $sql2) or die("query failed");

				?>
				<!-- card items -->
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mx-auto clear ml-2 order-card">
					<div class="row item-card-row clear ml-3 pt-3">

						<?php

						while ($data2 = mysqli_fetch_assoc($result2)) {
						?>
							<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-10 mx-auto clear" id="cake1">
								<div class="card clear">
									<div class="img-container clear" style="width:200px;height:200px">
										<img src="uploads/<?php echo $data2['image']; ?>" class="card-img-top card-image clear" alt="...">
										<span onclick="order(`4Cake1`)" class="card-img-order-icon clear">
											<i class="fas fa-cart-arrow-down order-icon clear"></i>
										</span>
									</div>
								</div>

								<div class="card-body clear">
									<h5 class="card-title name clear"><?php echo $data2['p_name']; ?></h5>
									<h5 class="card-title price clear"><?php echo $data2['price']; ?></h5>
								</div>

							</div>
						<?php
						}
						?>


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
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
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
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
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
		var items_array = ["cake", "dougnut", "sweet", "chocolate", "icecream"];

		//<!-- anything display krar function -->
		function display(a) {
			for (let i = 1; i < 4; i++) {
				const show_id = a + i;
				document.getElementById(show_id).style.display = "block";

			}

			for (let j = 0; j < items_array.length; j++) {
				if (a !== items_array[j]) {

					document.getElementById(items_array[j] + 1).style.display = "none";
					document.getElementById(items_array[j] + 2).style.display = "none";
					document.getElementById(items_array[j] + 3).style.display = "none";

				}


			}
		}

		function displayforC(a, b) {

			for (let i = 1; i < 4; i++) {
				const show_id1 = a + i;
				const show_id2 = b + i;
				document.getElementById(show_id1).style.display = "block";
				document.getElementById(show_id2).style.display = "block";

			}

			for (let j = 0; j < items_array.length; j++) {
				if ((a !== items_array[j]) && (b !== items_array[j])) {

					document.getElementById(items_array[j] + 1).style.display = "none";
					document.getElementById(items_array[j] + 2).style.display = "none";
					document.getElementById(items_array[j] + 3).style.display = "none";

				}


			}
		}


		//<!-- display all function -->
		function displayall() {
			for (let c = 0; c < items_array.length; c++) {
				for (let x = 1; x < 4; x++) {
					const id = items_array[c] + x;
					document.getElementById(id).style.display = "block";
				}
			}
		}




		const get_input = document.getElementById("input");
		get_input.addEventListener("keyup", function(e) {

			const type = e.target.value;

			if ((type === "c") || (type === "C")) {

				displayforC("cake", "chocolate")

				get_input.addEventListener("keyup", function(e) {
					const typec = e.target.value;
					if (typec === "ca") {
						display("cake")
					} else if (typec === "ch") {
						display("chocolate")
					} else {

					}
				})
			} else if ((type === "D") || (type === "d")) {
				display("dougnut");
			} else if ((type === "S") || (type === "s")) {
				display("sweet");
			} else if ((type === "I") || (type === "i")) {
				display("icecream");
			} else {

			}
		})


		//<!-- button click things -->
		const buttons = document.querySelector(".store-options-div");
		buttons.addEventListener("click", function(e) {
			const clicked_type = e.target.innerHTML.toLowerCase();
			if (clicked_type === "all") {

				displayall()

			} else {
				display(clicked_type);
			}
		})



		/*
		document.getElementById("search").addEventListener("click",function(){
		var type=document.getElementById("input").value
			if(type==="Cake"){
				display("cake");
			}
			
			else if(type==="Dougnut"){
				display("dougnut");
			}
			
			else if(type==="Chocolate"){
				display("chocolate");
			}
			
			else if(type==="Sweet"){
				display("sweet");
			}
			
			else if(type==="Icecream"){
				display("icecream");
			}
			
			else{
			
			}
		})
		*/




		//<!-- order single icon function-->
		function order(parameters) {

			console.log(parameters);
			const orderinfo = parameters.split("");
			var price = parseInt(orderinfo[0]);
			var ordertypenmbr = orderinfo[orderinfo.length - 1];

			var ordertype = [];
			for (let i = 1; i < orderinfo.length - 1; i++) {
				ordertype = ordertype + orderinfo[i]
			}




			var Display_total_price = document.getElementById("display_total_price").innerHTML;
			var Total_items_count = document.getElementById("total_items_count").innerHTML;
			var Display_total_price_cal = parseFloat(Display_total_price) + price;
			document.getElementById("display_total_price").innerHTML = Display_total_price_cal;
			//<!-- cart er total cost  -->
			document.getElementById("carttotalcost").innerHTML = Display_total_price_cal;

			var Total_items_count_cal = parseInt(Total_items_count) + 1;
			document.getElementById("total_items_count").innerHTML = Total_items_count_cal;

			//<!-- work in ordered things already section -->
			const mainlists = document.getElementById("order-lists");
			//<!-- const row=document.createElement("tr"); -->

			const list = document.createElement("li");


			const item = document.createElement("h6");
			item.textContent = ordertype;


			item.className = "list";
			list.className = "wholelist";

			const image = document.createElement("img");
			image.className = "image"
			//<!-- image.src= "img/doughnut-1.jpg"; -->
			image.src = "img/" + ordertype + "-" + ordertypenmbr + ".jpg";


			const daam = document.createElement("h6");
			daam.textContent = "$" + orderinfo[0];
			daam.className = "daam";




			//<!-- row.appendChild(list); -->
			const listdelete = document.createElement("i");
			//<!-- listdelete.textContent=<i class="fas fa-phone"></i>; -->
			listdelete.className = "listdelete fas fa-trash-alt";


			list.appendChild(item);
			list.appendChild(image);
			list.appendChild(daam);
			list.appendChild(listdelete);

			//<!-- row.className="listrow"; -->
			mainlists.appendChild(list);

			//<!-- delete button -->
			listdelete.addEventListener("click", function(e) {
				//<!-- const baadprice=list.lastChild.previousSibling.innerHTML;//font awesome delete icon er jonno aikhane problem hoi bcoz last child dhorte pare na. -->
				const baadprice = list.lastElementChild.previousSibling.innerHTML[1]; //innerhtml e ashole $ sign soho "$4" ai jatio ashe, so eta to ar calculate kra jai na, ai jonno last a [1] dia last j string ase "4" seita dhora holo.
				console.log(baadprice);
				list.remove();
				//<!-- updating total price -->
				const gettotalprice = document.getElementById("display_total_price").innerHTML;
				const updatetotalprice = parseInt(gettotalprice) - parseInt(baadprice);
				console.log(gettotalprice);
				document.getElementById("display_total_price").innerHTML = updatetotalprice;
				//<!-- cart er total ta delete button click er sathe fix kra -->
				document.getElementById("carttotalcost").innerHTML = updatetotalprice;

				//<!-- updating total items count -->
				const gettotalitems = document.getElementById("total_items_count").innerHTML;
				const updatetotalitemscount = parseInt(gettotalitems) - 1;
				console.log(gettotalitems);
				document.getElementById("total_items_count").innerHTML = updatetotalitemscount;
			})

			alert(`${ordertype} $${price} added to the card`);
		}

		//<!-- top most right side button total price and items game -->
		const totalbutton = document.querySelector(".heading-order");
		totalbutton.addEventListener("click", function() {
			document.querySelector(".ordered-already").style.display = "block";
		})

		//<!-- ordered things already  confirm-->
		const confirm = document.querySelector(".confirm");
		confirm.addEventListener("click", function() {
			document.querySelector(".ordered-already").style.display = "none";
		})

		//<!-- ordered things already cancel -->
		const cancel = document.querySelector(".cancel");
		cancel.addEventListener("click", function() {

			const x = document.getElementById("order-lists");
			const y = document.querySelectorAll(".wholelist");
			for (let c = 0; c < y.length; c++) {
				y[c].remove();
			}

			document.getElementById("total_items_count").innerHTML = "0";
			document.getElementById("display_total_price").innerHTML = "00.00";
			//<!-- cart er total cost -->
			document.getElementById("carttotalcost").innerHTML = "00.00";

			document.querySelector(".ordered-already").style.display = "none";
		})
	</script>




	<script>
		$(document).ready(function() {
			$('.type').on('click', function(e) {
				e.preventDefault();

				var id = $('#subcatid').val();
				alert(id);
			})
		});
	</script>
</body>

</html>