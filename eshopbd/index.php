<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();
include "head.php";
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

	<!-- Slider Area -->
	<!-- <section class="" style="">
		<video controls autoplay muted loop id="myVideo" style="width:90%;margin:0 5%" >
			<source src="video/rain.mp4" type="video/mp4">
		</video>

	</section>
 -->
	<div class="ParallaxVideo">
		<video autoplay muted loop>
			<source src="video/rain.mp4" type="video/mp4">

		</video>

	</div>
	<!--/ End Slider Area -->

	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->


	<!-- 4th position sub Banner with carousel -->
	<!-- category -->
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Categories</h2>
					</div>
				</div>
			</div>
			<?php
			$sqlcat = "SELECT * FROM category";
			$rescat = mysqli_query($con, $sqlcat) or die("qurey failed");

			?>
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel popular-slider">
						<?php
						while ($datacat = mysqli_fetch_assoc($rescat)) {
						?>
							<!-- Start Single category -->
							<div class="single-product">
								<div class="product-img">
									<a href="category_details.php?id=<?php echo $datacat['cat_id']; ?>">
										<img class="default-img" src="uploads/<?php echo $datacat['cat_img']; ?>" alt="#">
									</a>
								</div>
								<div class="product-content">
									<h3><a href="category_details.php?id=<?php echo $datacat['cat_id']; ?>"><?php echo $datacat['name']; ?><i class="fas fa-chevron-right"></i></a></h3>
								</div>
							</div>
							<!-- End Single category -->
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Most Popular Area -->
	<!-- End 4th position sub Banner with carousel -->


	<!-- Start Midium Banner (offer banner/promotion banner) or home page banner-->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/2.jpg" alt="#">
						<div class="offer-medium-banner">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/1.jpg" alt="#">
						<div class="offer-medium-banner">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner (offer banner/promotion banner) -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->

	<!--promise and guarantee start-->
	<div class="row promise" style="">
		<div class="col-12">
			<div style="" class="promise-image">
				<img src="images/3a.jpg" style="">
				<h2>Our 100% satiesfaction guarantee and Customer Service program</h2>
				<button class="btn btn-secondary" style="">view our promises</button>
			</div>
		</div>
	</div>
	<!--end of promise and guarantee end-->

	<!--companny details/company promotion banner-->
	<div class="row" style="margin: 10% 0;">
		<div class="col-12 companny-banner">
			<div class="companny-banner-content" style="">
				<h2>This is SKILLHUTCH</h2>
				<h6>Learn about this company,history and how SKILLHUTCH has empowered entreprenaurs with business opportunities</h6>
				<button class="btn btn-secondary" style=""><a href="https://www.skillhutch.com/">Learn more</button>
			</div>
		</div>
	</div>
	<!--end companny details/company promotion banner-->


	<!-- Start Footer Area -->


	<?php
	include "footer.php";
	?>




</body>

</html>