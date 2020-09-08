	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="colorlib">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>Welcome Interface</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">

			<style type="text/css">
			.header {
  				padding: 5px;
  				text-align: center;
  				background: #0f0300;
  				color: white;
  				font-size: 15px;
  				color:  #ffffff;
				}	

				.footer {
  				padding: 5px;
  				text-align: center;
  				background: #0f0300;
  				color: white;
  				font-size: 15px;
  				color:  #ffffff;
				}	

			</style>
		</head>
		<body>	
			<div class="header">
				<h1>Welcome Buyer</h1>
			</div>
			
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>Welcome To Your Profile</h6>
							<h1><?php  session_start();
								$uname=$_SESSION['var'];
								echo "$uname";  ?> </h1>
							<p>
								Please Click below to proceed to your profile to use our services
							</p>
							<a href="/new_try/profile_pages/buyer_profile/index.php" class="primary-btn text-uppercase">Proceed</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="img/f3.png" alt="">
						</div>
					</div>
				</div>					
			</section>

			<div class="footer">
				<h1>Welcome Buyer</h1>
			</div>	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>