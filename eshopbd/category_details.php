<!DOCTYPE html>
<html lang="zxx">
<?php
include "head.php";
?>

<body class="js">
	<?php
	include "header.php";
	?>

	<!--/ End Header -->

	<!--catgory banner start-->
	<div class="row" style="margin:5% 0">
		<div class="col-11 mx-auto">
			<div class="cat-ban-container">
				<div class="cat-ban-text">
					<h3>category heading</h3>
					<h6>category text will be here</h6>
					<button><a href="category-shop-grid.php?catid=<?php echo $_GET['id'];; ?>">shop now</a></button>
				</div>

			</div>
		</div>
	</div>

	<!--category banner ends up here-->

	<!-- subcategory -->
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>SUB categories</h2>
					</div>
				</div>
			</div>
			<?php
			$cid = $_GET['id'];
			$sqlcat = "SELECT * FROM sub_category WHERE cat_id='{$cid}'";
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
									<a href="shop-grid.php?sub-cat-id=<?php echo $datacat['sub_cat_id']; ?>">
										<img class="default-img" src="uploads/<?php echo $datacat['sub_cat_img']; ?>" alt="#">
									</a>
								</div>
								<div class="product-content">
									<h3><a href="shop-grid.php?sub-cat-id=<?php echo $datacat['sub_cat_id']; ?>"><?php echo $datacat['s_name']; ?><i class="fas fa-chevron-right"></i></a></h3>
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

	<!-- Start category related Midium Banner (category relatd offer banner/promotion banner) or category sub/medium banner-->
	<section class="midium-banner" style="margin-bottom:10%;">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/2.jpg" alt="#">
						<div class="offer-medium-banner">
							<p>Category banner</p>
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
							<p>Category banner</p>
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

	<!-- Start Footer Area -->
	<?php
	include "footer.php";
	?>

</body>

</html>