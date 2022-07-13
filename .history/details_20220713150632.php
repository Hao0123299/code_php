	<?php
	include 'inc/header.php';
	include 'inc/slider.php';
	?>

	<div class="main">
		<div class="content">
			<div class="section group">
				<div class="cont-desc span_1_of_2">
					<div class="grid images_3_of_2">
						<img src="images/preview-img.jpg" alt="" />
					</div>
					<div class="desc span_3_of_2">
						<h2>Lorem Ipsum is simply dummy text </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
						<div class="price">
							<p>Price: <span>$500</span></p>
							<p>Category: <span>Laptop</span></p>
							<p>Brand:<span>Samsnumg</span></p>
						</div>
						<div class="add-cart">
							<form action="cart.html" method="post">
								<input type="number" class="buyfield" name="" value="1" />
								<input type="submit" class="buysubmit" name="submit" value="Buy Now" />
							</form>
						</div>
					</div>
					<div class="product-desc">
						<h2>Product Details</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>

				</div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
						<li><a href="productbycat.html">Mobile Phones</a></li>
						<li><a href="productbycat.html">Desktop</a></li>
						<li><a href="productbycat.html">Laptop</a></li>
						<li><a href="productbycat.html">Accessories</a></li>
						<li><a href="productbycat.html#">Software</a></li>
						<li><a href="productbycat.html">Sports & Fitness</a></li>
						<li><a href="productbycat.html">Footwear</a></li>
						<li><a href="productbycat.html">Jewellery</a></li>
						<li><a href="productbycat.html">Clothing</a></li>
						<li><a href="productbycat.html">Home Decor & Kitchen</a></li>
						<li><a href="productbycat.html">Beauty & Healthcare</a></li>
						<li><a href="productbycat.html">Toys, Kids & Babies</a></li>
					</ul>

				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrapper">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h4>Information</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="#"><span>Contact Us</span></a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="faq.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html"><span>Site Map</span></a></li>
						<li><a href="preview-2.html"><span>Search Terms</span></a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
					<ul>
						<li><a href="contact.html">Sign In</a></li>
						<li><a href="index.html">View Cart</a></li>
						<li><a href="#">My Wishlist</a></li>
						<li><a href="#">Track My Order</a></li>
						<li><a href="faq.html">Help</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
					<ul>
						<li><span>+91-123-456789</span></li>
						<li><span>+00-123-000000</span></li>
					</ul>
					<div class="social-icons">
						<h4>Follow Us</h4>
						<ul>
							<li class="facebook"><a href="#" target="_blank"> </a></li>
							<li class="twitter"><a href="#" target="_blank"> </a></li>
							<li class="googleplus"><a href="#" target="_blank"> </a></li>
							<li class="contact"><a href="#" target="_blank"> </a></li>
							<div class="clear"></div>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>Compant Name © All rights Reseverd</a> </p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
	</body>

	</html>