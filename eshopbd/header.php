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
						<div class="sinlge-bar shopping">

							<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							<!-- Shopping Item -->
							<div class="shopping-item">
								<?php
								//  session_start();

								// //check if session exists?
								if (!empty($_SESSION['email'])) {
								?>
									<div class="dropdown-cart-header" style="display:flex;flex-direction:row:align-items:center;justify-content:space-between">
										<a class="text-center" href="user_dashboard.php">My Account</a>
										<a class="text-center" href="customerlogout.php">Log out</a>
									</div>


								<?php } else {
								?>
									<div class="dropdown-cart-header" style="display:flex;flex-direction:row:align-items:center;justify-content:space-between">
										<div class="ulc-container" style="padding: 5px;">
											<a href="customerregister.php">Register</a><br>
										</div>




										<div class="ulc-container" style="padding: 5px;min-width: 100px;">
											<a Style="margin-right:70px;">SIGN IN</a><br>
											<form action="customerlogin.php" method="post" id="loginform">
												<input name="email" id="userNameTextBox" class="form-control" placeholder="Username" type="text">
												<span id="userNamSpan"></span>
												<br>
												<input id="passwordTextBox" name="password" class="form-control" placeholder="Password" type="password">
												<td><span id="passwordSpan"></span></td>
												<br>
												<button class="btn btn-success" data-toggle="tooltip" data-placement="bottom" id="submitButton" title="" value="Log In" name="login" type="submit">Log in</button>
												<span id="messageSpan"></span>
												<!-- <img id="loadingImg" src="demo_wait.gif" /> -->

												<!-- <a class="for-pass" href="" target="" onclick="">Forgot password?</a> -->



											</form>



										</div>
									</div>



								<?php } ?>
							</div>

						</div>
						<div class="single-bar shopping">
							<?php
							if (!empty($_SESSION['cart'])) {
								$qty = count($_SESSION['cart']); ?>
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="<?php echo $qty ?>">

									<?php
									$_SESSION['quan'] = $qty;

									?>

								<?php } else { ?>
									<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="0">
									<?php } ?>
									<i class="ti-bag "></i>
									</div>
									<!-- <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a> -->
									<!-- Shopping Item -->
									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<?php
											$quant = $_SESSION['quan'];
											?>
											<span><?php echo $quant ?> Items</span>
											<a href="cart.php">View Cart</a>
										</div>
										<!-- <ul class="shopping-list">
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
									   </ul> -->
										<div class="bottom">
											<!-- <div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div> -->
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
		$sql = "SELECT * FROM category";
		$result = mysqli_query($con, $sql) or die("query failed");

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
																while ($data = mysqli_fetch_assoc($result)) {
																?>

																	<ul style="margin-left:0px" class="menu-cat-subcat-ul">
																		<li class="category"><a style="font-size:1.2rem;font-weight:bold;color:#3B4449;"><?php echo $data['name']; ?></a></li>
																		<div class="subcat-lists">
																			<?php
																			$cat = $data['cat_id'];
																			$sql2 = "SELECT * FROM sub_category WHERE cat_id='{$cat}'";
																			$result2 = mysqli_query($con, $sql2) or die("query failed");
																			while ($data2 = mysqli_fetch_assoc($result2)) {
																			?>

																				<li style="" class="menu-cat-subcat-ul-li-subcat"><a href="shop-grid.php?sub-cat-id=<?php echo $data2['sub_cat_id']; ?>"><?php echo $data2['s_name']; ?></a></li>
																			<?php } ?>
																		</div>
																	</ul>
																<?php } ?>
															</div>


														</div>
													</ul>
												</li>
												<li><a href="#">About us<i class="ti-angle-down"></i></a></li>
												<li><a href="#">Contact us</a></li>
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