<?php
include_once('db.php');
if(isset($_POST['submit'])){
    
    $name = $_POST['rname'];
    $many = $_POST['pmany'];
    $date = $_POST['datetime'];
    $result = mysqli_query($conn, "INSERT INTO tables (name, many, time) VALUES('$name','$many','$date')");
    echo "<br/><font color='white'>your table has been reserved";
     #"<br/><font color='green'>Thank you!";
}

                    
                    
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AMA - RESERVATION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
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

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Date Time -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html">AMA<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li class="has-dropdown">
								<a href="gallery.html">Gallery</a>
								<ul class="dropdown">
									<li><a href="#">Events</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Coffees</a></li>
								</ul>
							</li>
							<li class="active"><a href="reservation.html">Reservation</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

<!-- Reservation Background -->
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/ReserveaTable.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>Reserve a Table Today!</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-reservation-form" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">

					<!--reservation description-->
					<h2>Reservation</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Due to high demand, it's difficult for people to find available tables, which is why we offer you the ability to reserve your table before hand. Below, you can fill the form with your name, the number of People, and the date that suits you.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
					<form name="form" method="post" action="reservation.php" id="form-wrap">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Your Name</label>
								<input type="text" name="rname" class="form-control" id="name">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">How Many People</label>
								<input type="text" name="pmany" class="form-control" id="many">
								<!--<select name="pmany" id="many" class="form-control custom_select">
									<option style="background-color: firebrick" value="#">1</option>
									<option style="background-color: firebrick" value="#">2</option>
									<option style="background-color: firebrick" value="#">3</option>
									<option style="background-color: firebrick" value="#">4+</option>
								</select>-->
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="taskdatetime">When</label>
								<input type="text" name="datetime" placeholder="year-mounth-day hour:minutes" class="form-control"/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" name="submit" class="btn btn-primary btn-outline btn-lg" value="Reserve a table">
							</div>
						</div>

					</form>
					
				</div>
				
				
			</div>
		</div>
	</div>

	

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4 style = "font-size: 15rem;">AMA<span style="color: red;">.</span></h4>
					</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="gallery.html">Gallery</a></li>
					</ul>
				</div>

				

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li><em>Riyadh, Saudi Arabia</em></li>
						<li><a href="tel://1234567920">+ (966) 50 123 4567</a></li>
						<li><a href="mailto:info@yoursite.com"><email>AMA@gmail</email></a></li>
					</ul>
				</div>

			</div>
		</center>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2020 AMA. All Rights Reserved.</small> 
						
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.twitter.com/"><i class="icon-twitter2"></i></a></li>
							<li><a href="https://www.facebook.com/"><i class="icon-facebook2"></i></a></li>
							<li><a href="https://www.linkedin.com/"><i class="icon-linkedin2"></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="icon-instagram2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Date Time -->
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
