<!DOCTYPE html>
<html lang="zxx">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php

session_start();
include "head.php";


?>

<body class="js">
	<?php

	include "header.php";
	?>

	<?php
	$subcatid = $_GET['sub-cat-id'];
	$sql = "SELECT * FROM type WHERE sub_cat_id='{$subcatid}'";
	$result = mysqli_query($con, $sql) or die("query failed");
	?>
	<!-- Product Style -->
	<section class="product-area shop-sidebar shop section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<div class="shop-sidebar">
						<!-- Single Widget -->
						<div class="single-widget category">
							<h3 class="title">Type</h3>
							<ul class="categor-list">
								<?php
								while ($data1 = mysqli_fetch_assoc($result)) {

								?>
									<li class="typelist"><a><?php echo $data1['t_name']; ?>
											<span class="type d-none"><?php echo $data1['type_id']; ?></span></a></li>
								<?php } ?>
							</ul>
						</div>
						<!--/ End Single Widget -->
						<!-- Shop By Price -->
						<div class="single-widget range">
							<h3 class="title">Shop by Price</h3>
							<!-- <div class="price-filter">
								<div class="price-filter-inner">
									<div id="slider-range"></div>
									<div class="price_slider_amount">
										<div class="label-input">
											<span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
											<button class="btn btn-primary" id="pricebtn">click price</button>
										</div>
									</div>
								</div>
							</div>
							<ul class="check-box-list">
								<li>
									<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
								</li>
								<li>
									<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
								</li>
								<li>
									<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
								</li>
							</ul> -->


							<div class="list-group">
								<h3>Price</h3>
								<input type="hidden" id="hidden_minimum_price" value="0" />
								<input type="hidden" id="hidden_maximum_price" value="5000" />
								<p id="price_show">20 - 5000</p>
								<div id="price_range"></div>
							</div>



						</div>
						<!--/ End Shop By Price -->


					</div>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<div class="row">
						<div class="col-12">
							<!-- Shop Top -->
							<div class="shop-top">
								<div class="shop-shorter">
									<div class="single-shorter">
										<label>Show :</label>
										<select>
											<option selected="selected">09</option>
											<option>15</option>
											<option>25</option>
											<option>30</option>
										</select>
									</div>
									<div class="single-shorter">
										<label>Sort By :</label>
										<select>
											<option selected="selected">Name</option>
											<option>Price</option>
											<option>Size</option>
										</select>
									</div>
								</div>
							</div>
							<!--/ End Shop Top -->
						</div>
					</div>

					<?php
					$subcat = $_GET['sub-cat-id'];
					$sql2 = "SELECT * FROM product WHERE sub_cat_id='{$subcat}'";
					$result2 = mysqli_query($con, $sql2) or die("query failed");

					?>
					<div class="row type-data">
						<?php

						while ($data2 = mysqli_fetch_assoc($result2)) {
						?>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									<div class="product-img">
										<a href="product_details.php?p_id=<?php echo $data2['product_id']; ?>" style="width:80%;height:30vh;">

											<img src="uploads/<?php echo $data2['image']; ?>" alt="#">
										</a>
										<div class="button-head" style="background-color:#333333;padding:0 0.4rem">
											<div class="product-action">
												<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#" style="color:#fff;"><i class=" ti-eye"></i><span>Quick Shop</span></a>


												<a>
													<form action="wishlist_part.php" method="post">
														<input type="hidden" name="product_id" value="<?php echo $data2['product_id']; ?>">
														<input type="hidden" name="sub_cat_id" value="<?php echo $subcat ?>">
														<?php
														if (isset($_SESSION['email'])) {
															$email = $_SESSION['email'];

															$result3 = mysqli_query($con, "SELECT * FROM customer WHERE email='$email'");
															$data = mysqli_fetch_assoc($result3);
															$customer_id = $data['customer_id'];
														?>
															<input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
															<?php

															$sql3 = "SELECT * FROM wishlist WHERE customer_id = '$customer_id' and product_id ='$data2[product_id]'";
															$result4 = mysqli_query($con, $sql3);
															$row2 = mysqli_fetch_array($result4);
															$count2 = mysqli_num_rows($result4);

															if ($count2 > 0) {

															?>


																<a href="remove_wishlist.php?tid=<?php echo $row2['wish_id']; ?>&sub_cat_id=<?php echo $subcat ?>" class=""><i class="fas fa-heart"></i><span>Remove From Wishlist</span></a>


															<?php
															} else {
															?>

																<button type="submit" name="wishlist" class="btn btn-outline-success"><i class="fal fa-heart"></i><span>Add to Wishlist</span></button>
													</form>
												<?php
															}
														} else {

												?>
												<a href="wish_register.php?tid=<?php echo $data2['product_id']; ?>&sub_cat_id=<?php echo $subcat ?> " type="submit" name="nigar" class="btn btn-outline-success"><i class="fal fa-heart"><span>Add to Wishlist</span></i></a>


											<?php

														}

											?>

												</a>




												<!-- <a title="Wishlist" href="#" style="color:#fff;"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> -->
												<a title="Compare" href="#" style="color:#fff;"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
											</div>
											<div class="product-action-2">
												<button class="btn min" onclick="location.href='carthandler2.php?cart_id=<?php echo $data2['product_id'] ?>&sub_cat_id=<?php echo $subcat ?>&cart_name=<?php echo $data2['p_name'] ?>&cart_price=<?php echo $data2['price'] ?>'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
													Add to cart
												</button>
											</div>
										</div>
									</div>
									<div class="product-content">
										<h3><a href="product_details.php?p_id=<?php echo $data2['product_id']; ?>"><?php echo $data2['p_name']; ?></a></h3>
										<div class="product-price">
											<span><?php echo $data2['price']; ?></span>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Product Style 1  -->



	<!-- Start Footer Area -->
	<?php
	include('cart_js.php');
	?>
	<?php
	include "footer.php";
	?>


	<script>
		$(document).ready(function() {

			filter_data();

			function filter_data() {
				$('.filter_data').html('<div id="loading" style="" ></div>');
				var action = 'fetch_data';
				var minimum_price = $('#hidden_minimum_price').val();
				var maximum_price = $('#hidden_maximum_price').val();
				var brand = get_filter('brand');
				var ram = get_filter('ram');
				var storage = get_filter('storage');
				$.ajax({
					url: "fetch_data.php",
					method: "POST",
					data: {
						action: action,
						minimum_price: minimum_price,
						maximum_price: maximum_price,
						brand: brand,
						ram: ram,
						storage: storage
					},
					success: function(data) {
						$('.filter_data').html(data);
					}
				});
			}

			function get_filter(class_name) {
				var filter = [];
				$('.' + class_name + ':checked').each(function() {
					filter.push($(this).val());
				});
				return filter;
			}

			$('.common_selector').click(function() {
				filter_data();
			});

			$('#price_range').slider({
				range: true,
				min: 20,
				max: 5000,
				values: [20, 5000],
				step: 500,
				stop: function(event, ui) {
					$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
					$('#hidden_minimum_price').val(ui.values[0]);
					$('#hidden_maximum_price').val(ui.values[1]);
					filter_data();
				}
			});

		});
	</script>

	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-87739877-1', 'auto');
		ga('send', 'pageview');
	</script>


</body>

</html>