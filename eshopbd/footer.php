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
							<p class="text">Skillhutch is a full service digital advertising agency expertise in digital branding strategy, Social media marketing, Viral, SEO, Display and search marketing etc.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="+88 01906060558">+88 01906060558</a></span></p>
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
									<li>Flat# B1, House# 7E, Road# 127</li>
									<li>Gulshan – 1, Dhaka – 1212, Bangladesh</li>
									<li>info@skillhutch.com</li>
									<li>+88 01906060558</li>
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
								<p>Copyright © 2021 <a href="https://www.skillhutch.com/" target="_blank">Skillhutch</a>  -  All Rights Reserved.</p>
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
			
			$('.typelist').on('click',function(e){
				e.preventDefault();
				var typeval=$(this).text();
				var matches = typeval.match(/(\d+)/);
				if(matches){
					var number=parseInt(matches[0]);
					//alert(number);

					$.ajax({
					url:"sub-category-product.php",
					type:"POST",
					data:{typeid:number},
					success:function(getdata){
						console.log(getdata);
						$('.type-data').html(getdata);
					},
					error:function(){
						console.log("error");
					}
				});
				}
				//alert(number);
				//var vl=$('#a').val();
				//alert(vl);
			});
		
		});

        
    </script>
    <script>
		$(document).ready(function(){
			var type_id_no=[0];
			$('.typelist').on('click',function(e){
				e.preventDefault();
				var typeval=$(this).text();
				var matches = typeval.match(/(\d+)/);
				if(matches){
					var number=parseInt(matches[0]);
					//alert(number);
					type_id_no.push(number);
					console.log(type_id_no)

					$.ajax({
					url:"type_product.php",
					type:"POST",
					data:{typeid:number},
					success:function(getdata){
						console.log(getdata);
						$('.type-data').html(getdata);
					},
					error:function(){
						console.log("error");
					}
				});
				}
				//alert(number);
				//var vl=$('#a').val();
				//alert(vl);
			});

			$("#pricebtn").on('click',function(){
				var pr=$('#amount').val();
				var prind=pr.split("-");
				var prindval1=prind[0].slice(1);
				var prindval2=prind[1].slice(2);
				var typeindex=type_id_no[type_id_no.length-1];
				alert(prindval1+" "+prindval2/*+" "+type_id_no[array.length-1]*/);
				console.log(typeindex)
				
				$.ajax({
					url:"pricefilter.php",
					type:"POST",
					data:{price1:prindval1,price2:prindval2,tind:typeindex},
					success:function(data){
						$('.type-data').html(data);
					}
				})
				

			})
	
		});
	</script>
