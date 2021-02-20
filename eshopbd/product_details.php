<!DOCTYPE html>
<html lang="zxx">
<?php

include "head.php";
?>

<body class="js">

	<?php
	include "header.php";
	?>



	<!--main content of the product details start-->
	<?php
	include "config.php";
	$pro_id = $_GET['p_id'];
	$sql = "SELECT * FROM product WHERE product_id='{$pro_id}'";
	$result = mysqli_query($con, $sql) or die('query failed');
	$data = mysqli_fetch_assoc($result);

	?>
	<div class="modal-body">
		<div class="row no-gutters">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

				<img src="uploads/<?php echo $data['image']; ?>" width="400px" height="300px">
				<!-- Product Slider -->
				<!--
										<div class="product-gallery">
											<div class="quickview-slider-active" style="width:80%;height:60%">
												<div class="single-slider">
													<img src="" alt="#">
												</div>
												<div class="single-slider">
													<img src="" alt="#">
												</div>
												<div class="single-slider">
													<img src="" alt="#">
												</div>
												<div class="single-slider">
													<img src="" alt="#">
												</div>
											</div>
										</div>
										-->
				<!-- End Product slider -->
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="quickview-content">
					<h2><?php echo $data['p_name']; ?></h2>
					<div class="quickview-ratting-review">
						<div class="quickview-ratting-wrap">
							<div class="quickview-ratting">
								<i class="yellow fa fa-star"></i>
								<i class="yellow fa fa-star"></i>
								<i class="yellow fa fa-star"></i>
								<i class="yellow fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<a href="#"> (1 customer review)</a>
						</div>
						<div class="quickview-stock">
							<span><i class="fa fa-check-circle-o"></i> in stock</span>
						</div>
					</div>
					<h3><?php echo $data['price']; ?></h3>
					<div class="quickview-peragraph">
						<p><?php echo $data['product_details']; ?></p>
					</div>
					<div class="size">
						<div class="row">
							<div class="col-lg-6 col-12">
								<h5 class="title">Size</h5>
								<select>
									<option selected="selected">s</option>
									<option>m</option>
									<option>l</option>
									<option>xl</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<h5 class="title">Color</h5>
								<select>
									<option selected="selected">orange</option>
									<option>purple</option>
									<option>black</option>
									<option>pink</option>
								</select>
							</div>
						</div>
					</div>
					<div class="quantity">
						<!-- Input Order -->
						<div class="input-group">
							<div class="button minus">
								<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
									<i class="ti-minus"></i>
								</button>
							</div>
							<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
							<div class="button plus">
								<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
									<i class="ti-plus"></i>
								</button>
							</div>
						</div>
						<!--/ End Input Order -->
					</div>
					<div class="add-to-cart">
						<!-- <a href="#" class="btn">Add to cart</a> -->
						<button class="btn min" onclick="location.href='carthandler.php?cart_id=<?php echo $data['product_id'] ?>&cart_name=<?php echo $data['p_name'] ?>&cart_price=<?php echo $data['price'] ?>'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
							Add to cart
						</button>
						<a href="#" class="btn min"><i class="ti-heart"></i></a>
						<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
					</div>
					<div class="default-social">
						<h4 class="share-now">Share:</h4>
						<ul>
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--main contnent of the product details end -->


	<?php
	include('cart_js.php');
	?>
	<!-- Start Footer Area -->
	<?php
	include "footer.php";
	?>
</body>

</html>