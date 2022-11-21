<?php
//check if user is logged in already.
//Session Start
ob_start();
session_start();

//if user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: View/index.php");
    exit;
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Flawless Pay </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Flawless Pay</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Hostel</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="view/tankohostel.php">Tanko Hostel</a></li>
								 	<li><a href="view/charlottehostel.php">Charlotte Hostel</a></li>
									<li>
										<a href="view/dufie.php" class="fh5co-sub-ddown">Dufie Hostel</a>
<!-- 										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Annex</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Platinum</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Gold</a></li>
											<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">F Block</a></li>
											<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">M Block</a></li>
										</ul> -->
									</li>
									<li><a href="view/masere.php">Masere Hostel</a></li> 
									<li><a href="view/hosanna.php">Hosanna Hostel</a></li> 
								</ul>
							</li>
							<li><a href="view/services.php">Services</a></li>
							<li><a href="view/blog.php">Off Campus Blog</a></li>
							<li><a href="view/contact.php">Contact</a></li>
							<!-- <li><a href="">Bookings</a></li> -->
							<li><a href='Login/login.php'>Log In</a></li>
						
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/dufie.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Dufie Hostel</span></p>
		   						<h2>Reserve A Room For The Semester</h2>
			   					<p>
			   						<a href="view/dufie.php" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/tanko.JPG);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Tanko Hostel</span></p>
		   						<h2>Make Your Semester Comfortable</h2>
			   					<p>
			   						<a href="view/tankohostel.php" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/masere.JPG);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Masere Hostel</span></p>
		   						<h2>A Good Place To Enjoy Your Semester</h2>
			   					<p>
			   						<a href="view/masere.php" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
			   <li style="background-image: url(images/newhosanna.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-12 col-md-offset-0 text-center slider-text">
						<div class="slider-text-inner js-fullheight">
							<div class="desc">
								<p><span>Hosanna Hostel</span></p>
								<h2>Make Your Semester Comfortable</h2>
								<p>
									<a href="view/hosanna.php" class="btn btn-primary btn-lg">Book Now</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(images/char.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-12 col-md-offset-0 text-center slider-text">
						<div class="slider-text-inner js-fullheight">
							<div class="desc">
								<p><span>Charlotte Hostel</span></p>
								<h2>A Good Place To Enjoy Your Semester</h2>
								<p>
									<a href="view/charlottehostel.php" class="btn btn-primary btn-lg">Book Now</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<!--<div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
					<form action="#">

						<div class="a-col">
							<section>
								<select class="cs-select cs-skin-border">
									<option value="" disabled selected>Select Hostels</option>
									<option value="">Tanko Hostel</option>
									<option value="">Charlotte Hostel</option>
									<option value="">Dufie Hostel</option>
									<option value="">Masere Hostel</option>
									<option value="">Hosanna Hostel</option>
								</select>
							</section>
						</div>
						<div class="a-col alternate">
							<section>
								<select class="cs-select cs-skin-border">
									<option value="" disabled selected>Select Semester</option>
									<option value="">Semester One</option>
									<option value="">Semester Two</option>
								</select>
							</section>
						</div>
						<div class="a-col alternate">
							<section>
								<select class="cs-select cs-skin-border">
									<option value="" disabled selected>Room Type</option>
									<option value="">One In A Room</option>
									<option value="">Two In A Room</option>
									<option value="">Three In A Room</option>
									<option value="">Four In A Room</option>
								</select>
							</section>
						</div>
						<div class="a-col action">
							<a href="#">
								<span>Check</span>
								Availability
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>-->
	<br>
	<br>
	<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="754" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Students</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Hostels</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="1340" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Transactions</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Reviews</span>
				</div>
			</div>
		</div>
	</div>

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Hostels</h2>
					</div>
				</div>
			</div>

			<div class="row">
				
				<!-- Tanko Hostel -->
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/tanko.JPG);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>¢6000/Semester</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Tanko Hostel</h3>
						<p>Tanko Hostel is one of the most luxurious hostels in Ashesi with the modern facilities needed to make your stay as a student very comfortable and enjoyable. The rooms are very spacious with a very serene environment. Security in this hostel is top-notch.</p>
						<p><a href="view/tankohostel.php" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<!-- Dufie Hostel -->
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/dufie.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>¢4000/Semester</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Dufie Hostel</h3>
						<p>Dufie Platinum Hostel is one of the most popular hostels in Ashesi University College and is known by most students. It is well equipped with modern facilities needed to make your stay as a student very comfortable and enjoyable. The rooms are very spacious with a very serene environment. Security in this hostel is top-notch.</p>
						<p><a href="view/dufie.php" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<!-- Masere Hostel -->
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/masere.JPG);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>¢5200/Semester</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Masere Hostel</h3>
						<p>Masere Hostel is well equipped with modern facilities needed to make your stay as a student very comfortable and enjoyable. The rooms are very spacious with a very serene environment. Security in this hostel is top-notch.</p>
						<p><a href="view/masere.php" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<!-- Hosanna Hostel -->
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/newhosanna.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>¢4500/Semester</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Hosanna Hostel</h3>
						<p>Hosanna Hostel is well-equipped with the modern facilities needed to make your stay as a student very comfortable and enjoyable. The rooms are very spacious with a very serene environment. Security in this hostel is top-notch.</p>
						<p><a href="view/hosanna.php" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<!-- Charlotte Hostel -->
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/char.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>¢4700/Semester</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Charlotte Hostel</h3>
						<p>Charlotte Court Hostel is well-equipped with the modern facilities needed to make your stay as a student very comfortable and enjoyable. The rooms are very spacious with a very serene environment. Security in this hostel is top-notch.</p>
						<p><a href="view/charlottehostel.php" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>
			</div>

		</div>
	</div>

<!-- 	<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Hotel Facilities</h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<nav class="tabs-nav">
					<a href="#" class="active" data-tab="tab1">
						<i class="flaticon-restaurant icon"></i>
						<span>Restaurant</span>
					</a>
					<a href="#" data-tab="tab2">
						<i class="flaticon-cup icon"></i>
						<span>Bar</span>
					</a>
					<a href="#" data-tab="tab3">
					
						<i class="flaticon-car icon"></i>
						<span>Pick-up</span>
					</a>
					<a href="#" data-tab="tab4">
						
						<i class="flaticon-swimming icon"></i>
						<span>Swimming Pool</span>
					</a>
					<a href="#" data-tab="tab5">
						
						<i class="flaticon-massage icon"></i>
						<span>Spa</span>
					</a>
					<a href="#" data-tab="tab6">
						
						<i class="flaticon-bicycle icon"></i>
						<span>Gym</span>
					</a>
				</nav>
				<div class="tab-content-container">
					<div class="tab-content active show" data-tab-content="tab1">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_1.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Restaurant</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab2">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_2.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Bars</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab3">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_3.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Pick Up</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab4">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_4.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Swimming Pool</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_5.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Spa</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab6">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_6.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Gym</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Happy Clients Says...</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;"Saves student the stress of looking for hostel information and booking"&rdquo;
						</blockquote>
						<p class="author"><cite>Obed Agyemang</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;Information on websites are reliable and are always updated&rdquo;
						</blockquote>
						<p class="author"><cite>Ohemaa Boadu</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;"Payment for hostels are simple and room bookings are so convenient"&rdquo;
						</blockquote>
						<p class="author"><cite>Prince Yeboah</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/voltafootball.jpg);">
						<div class="date text-center">
							<span>21</span>
							<small>Oct</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Volta Football</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/ubora.jpg);">
						<div class="date text-center">
							<span>02</span>
							<small>Dec</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Ubora</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/ashletics.png);">
						<div class="date text-center">
							<span>05</span>
							<small>Dec</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Ashletics</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2016. <br> Men In Tech Industries <br>
						<!-- Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p> -->
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Flawless Pay</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hostels</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
<!-- 						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div> -->
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Subscribe to our mailing list for hostel updates</p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="https://twitter.com"><i class="icon-twitter-with-circle"></i></a>
							<a href="https://www.facebook.com"><i class="icon-facebook-with-circle"></i></a>
							<a href="https://www.instagram.com"><i class="icon-instagram-with-circle"></i></a>
							<a href="https://www.linkedin.com"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

</body>
</html