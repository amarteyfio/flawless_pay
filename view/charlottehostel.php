<?php 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Login/login.php");
    exit;
}


//Call controller to select all rooms in dufie
include "../Controller/user_controller.php";
include "../Controller/room_controller.php";

//var_dump($_SESSION['id']);

//select user
$user = sel_user_ctr($_SESSION['id']);
//echo($user);
//get gender
$gender = $user['user_gender'];
//echo $gender;


$available = selrooms_ctr(3,$gender);
//var_dump($available);
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charlotte Hostel</title>
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
	<link rel="stylesheet" href="../css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="../css/cs-select.css">
	<link rel="stylesheet" href="../css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="../css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/stylebook.css">


	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
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
					<h1 id="fh5co-logo"><a href="../index.php">Flawless Pay</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="../index.php">Home</a></li>
							<li>
								<a class="active" href="#" class="fh5co-sub-ddown">Hostel</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="tankohostel.php">Tanko Hostel</a></li>
								 	<li><a href="charlottehostel.php">Charlotte Hostel</a></li>
									</li>
									<li><a href="dufie.php">Dufie Hostel</a></li> 
									<li><a href="masere.php">Masere Hostel</a></li> 
									<li><a href="hosanna.php">Hosanna Hostel</a></li> 
								</ul>
							</li>
							<li><a href="services.php">Services</a></li>
							<li><a href="blog.php">Off Campus Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
							<!-- <li><a href="">Bookings</a></li> -->
							<li><a href="../Login/logout.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(../images/char.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Welcome To Charlotte Hostel</h1>
						<p>Facilities: DSTV, Food Court, Wifi, Car Parking, Kitchen</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-hotel-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(../images/charslide1.jpg);">
						</div>
						<div class="desc">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(../images/charslide2.jpg);">
						</div>
						<div class="desc">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(../images/charslide3.jpg);">
						</div>
						<div class="desc">
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center mb-4">Rooms Available</h1>
				<div class="table-wrap">
					<table class="table">
					<thead class="thead-primary">
					  <tr>
						<th>Room Number</th>
						<th>Room Type</th>
						<th>Price</th>
						<th>Book</th>
					  </tr>
					</thead>
					<tbody>
					  <?php foreach($available as $a):?>
					  <tr>
						<th scope="row" class="scope" ><?php echo $a['room_name'];?></th>
						<td><?php echo $a['room_type'];?></td>
						<td>GH₵<?php echo $a['room_price'];?></td>
						<td><a href="confirmbooking.php?room=<?php echo $a['room_id'];?>" class="btn btn-primary">Book Now</a></td>
					  </tr>
					  <?php endforeach?>
					</tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>
	
	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="../js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="../js/hoverIntent.js"></script>
	<script src="../js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="../js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="../js/classie.js"></script>
	<script src="../js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>

	<script src="../js/custom.js"></script>

</body>
</html>