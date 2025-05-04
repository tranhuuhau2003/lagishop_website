<?php
session_start();
?>
<?php include 'inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Single Product</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include 'inc/header.php' ?>

		<div class="fs_menu_overlay"></div>

		<!-- Hamburger Menu -->

		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item has-children">
						<a href="#">
							usd
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">cad</a></li>
							<li><a href="#">aud</a></li>
							<li><a href="#">eur</a></li>
							<li><a href="#">gbp</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							English
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">French</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">German</a></li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							My Account
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
							<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
						</ul>
					</li>
					<li class="menu_item"><a href="#">home</a></li>
					<li class="menu_item"><a href="#">shop</a></li>
					<li class="menu_item"><a href="#">promotion</a></li>
					<li class="menu_item"><a href="#">pages</a></li>
					<li class="menu_item"><a href="#">blog</a></li>
					<li class="menu_item"><a href="#">contact</a></li>
				</ul>
			</div>
		</div>

		<div class="container single_product_container">
			<div class="row">
				<div class="col">

					<!-- Breadcrumbs -->

					<div class="breadcrumbs d-flex flex-row align-items-center">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Category</a></li>
							<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product</a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php
			$db = new Database();
			$conn = $db->connect();
			// Lấy thông tin sản phẩm từ cơ sở dữ liệu
			$productName = $_GET['productName']; // Lấy id sản phẩm từ URL
			// Thực hiện truy vấn để lấy thông tin sản phẩm
			$sql = "SELECT * FROM product WHERE productName = '$productName'";
			$result = mysqli_query($conn, $sql);

			// Kiểm tra kết quả truy vấn và hiển thị sản phẩm
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
			?>
					<div class="row">
						<div class="col-lg-7">
							<div class="single_product_pics">
								<div class="row">
									<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
										<div class="single_product_thumbnails">
											<ul>
												<li class="active"><img src="<?php echo "admin/" . $row['image']; ?>" alt="" data-image="<?php echo "admin/" . $row['image']; ?>"></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-9 image_col order-lg-2 order-1">
										<div class="single_product_image">
											<div class="single_product_image_background" style="background-image:url(<?php echo "admin/" . $row['image']; ?>)"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="product_details">
								<div class="product_details_title">
									<h2><?php echo $row['productName']; ?></h2>
									<p><?php echo $row['product_desc']; ?></p>
								</div>
								<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
									<span class="ti-truck"></span><span>free delivery</span>
								</div>
								<?php
								$price_discount = number_format($row['price_discount'], 0, ',', '.') . '₫';
								$price = number_format($row['price'], 0, ',', '.') . '₫';
								?>
								<div class="original_price"><?php echo $price; ?></div>
								<div class="product_price"><?php echo $price_discount; ?></div>
								<!-- <ul class="star_rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul> -->
								<!-- <div class="product_color">
									<span>Select Color:</span>
									<ul>
										<li style="background: #e54e5d"></li>
										<li style="background: #252525"></li>
										<li style="background: #60b3f3"></li>
									</ul>
								</div> -->
								<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
									<span>Quantity:</span>
									<div class="quantity_selector">
										<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
										<span id="quantity_value">1</span>
										<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
									</div>
									<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									<script>
										// Lấy tham chiếu đến các phần tử trên trang
										const quantityValue = document.getElementById('quantity_value');
										const minusButton = document.querySelector('.quantity_selector .minus');
										const plusButton = document.querySelector('.quantity_selector .plus');

										// Xử lý sự kiện click nút minus
										minusButton.addEventListener('click', function() {
											let quantity = parseInt(quantityValue.innerText);
											if (quantity > 1) {
												quantityValue.innerText = quantity;
											}
										});

										// Xử lý sự kiện click nút plus
										plusButton.addEventListener('click', function() {
											let quantity = parseInt(quantityValue.innerText);
											quantityValue.innerText = quantity;
										});

										// Xử lý sự kiện click nút add to cart
										const addToCartButton = document.querySelector('.add_to_cart_button a');
										addToCartButton.addEventListener('click', function(event) {
											event.preventDefault();
											let quantity = parseInt(quantityValue.innerText);
											let productId = <?php echo json_encode($row['productId']); ?>;
											window.location.href = "addcart.php?productId=" + productId + "&quantity=" + quantity;
										});
									</script>
									<!-- <div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div> -->
								</div>
							</div>
						</div>
					</div>
			<?php
				}
			} else {
				echo "0 results";
			}
			?>
		</div>

		<!-- Tabs -->

		<div class="tabs_section_container">

			<div class="container">
				<div class="row">
					<div class="col">
						<div class="tabs_container">
							<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
								<li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
								<li class="tab" data-active-tab="tab_2"><span>Additional Information</span></li>
								<li class="tab" data-active-tab="tab_3"><span>Reviews (2)</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<!-- Tab Description -->

						<div id="tab_1" class="tab_container active">
							<div class="row">
								<div class="col-lg-5 desc_col">
									<div class="tab_title">
										<h4>Description</h4>
									</div>
									<div class="tab_text_block">
										<h2>Pocket cotton sweatshirt</h2>
										<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
									</div>
									<div class="tab_image">
										<img src="images/desc_1.jpg" alt="">
									</div>
									<div class="tab_text_block">
										<h2>Pocket cotton sweatshirt</h2>
										<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
									</div>
								</div>
								<div class="col-lg-5 offset-lg-2 desc_col">
									<div class="tab_image">
										<img src="images/desc_2.jpg" alt="">
									</div>
									<div class="tab_text_block">
										<h2>Pocket cotton sweatshirt</h2>
										<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
									</div>
									<div class="tab_image desc_last">
										<img src="images/desc_3.jpg" alt="">
									</div>
								</div>
							</div>
						</div>

						<!-- Tab Additional Info -->

						<div id="tab_2" class="tab_container">
							<div class="row">
								<div class="col additional_info_col">
									<div class="tab_title additional_info_title">
										<h4>Additional Information</h4>
									</div>
									<p>COLOR:<span>Gold, Red</span></p>
									<p>SIZE:<span>L,M,XL</span></p>
								</div>
							</div>
						</div>

						<!-- Tab Reviews -->

						<div id="tab_3" class="tab_container">
							<div class="row">

								<!-- User Reviews -->

								<div class="col-lg-6 reviews_col">
									<div class="tab_title reviews_title">
										<h4>Reviews (2)</h4>
									</div>

									<!-- User Review -->

									<div class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<div class="review_date">27 Aug 2016</div>
											<div class="user_name">Brandon William</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>

									<!-- User Review -->

									<div class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<div class="review_date">27 Aug 2016</div>
											<div class="user_name">Brandon William</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
								</div>

								<!-- Add Review -->

								<div class="col-lg-6 add_review_col">

									<div class="add_review">
										<form id="review_form" action="post">
											<div>
												<h1>Add Review</h1>
												<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
												<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
											</div>
											<div>
												<h1>Your Rating:</h1>
												<ul class="user_star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
												<textarea id="review_message" class="input_review" name="message" placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
											</div>
											<div class="text-left text-sm-right">
												<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
											</div>
										</form>
									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

		</div>

		<!-- Benefit -->

		<div class="benefit">
			<div class="container">
				<div class="row benefit_row">
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>free shipping</h6>
								<p>Suffered Alteration in Some Form</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>cach on delivery</h6>
								<p>The Internet Tend To Repeat</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>45 days return</h6>
								<p>Making it Look Like Readable</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>opening all week</h6>
								<p>8AM - 09PM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<div class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
							<h4>Newsletter</h4>
							<p>Subscribe to our newsletter and get 20% off your first purchase</p>
						</div>
					</div>
					<div class="col-lg-6">
						<form action="post">
							<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
								<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
								<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<?php include 'inc/footer.php'; ?>

	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script src="js/single_custom.js"></script>
</body>

</html>