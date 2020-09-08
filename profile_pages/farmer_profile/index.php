<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farmer Profile</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/style.css"/>

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
				.button {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

	</style>
</head>
<body>
<?php
           
            session_start();
            $username=$_SESSION['var'];
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'faws';

            $mysqli = new mysqli($host,$user,$pass,$db);
            $result = $mysqli->query("SELECT username, name, age, address, contactno, aadharno, land_area, crops_grown from farmer where username='$username' limit 1")or die($mysqli->error);
            
            $row= $result->fetch_assoc();      
            
?>  

	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<div class="header">
				<h1>MY FARMER PROFILE</h1>

			</div>

	<header class="header-section">
		<h2>My Farmer Profile</h2>
		<a href="/new_try/main_page/login_pages/farmerlogin.html" class="button">Log Out</a>
	</header>

	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
							<div class="col-lg-6">
								<div class="hero-text">
									<h2><?= $row['name'] ?></h2>
								</div>
								<div class="hero-info">
									<h2>My Info</h2>
									<ul>
										<li><span>Username</span><?= $row['username'] ?></li>
										<li><span>Full Name</span><?= $row['name'] ?></li>
										<li><span>Age</span><?= $row['age']?></li>
										<li><span>Address</span><?= $row['address']?></li>
										<li><span>Contact No.</span><?= $row['contactno']?></li>
										<li><span>Aadhar No.</span><?= $row['aadharno']?></li>
										<li><span>Land Area (in Acres)</span><?= $row['land_area']?></li>
										<li><span>Crops Grown</span><?= $row['crops_grown']?></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6">
								<figure class="hero-image">
								<img src="indian-farmer.png">
								</figure>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-section spad pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-md-8 offset-xl-2 ">
					<div class="section-title">
						<h2>Buy and Sell Options</h2>
					</div>
				</div>
			
			</div>
			<div class="portfolio-warp">
				<div class="row">
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="portfolio-item">
							<a href="/new_try/data_fetch_pages/farmer_slistings.php"><img border="2" alt="" src="tool.jpg" width="320" height="380">
 							</a>
							<h2>Want Supplies !!</h2>
							<p>Get Details of All Suppliers Near You</p>
						</div>
					</div>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="portfolio-item">
							<a href="/new_try/data_fetch_pages/farmer_blistings.php"><img border="2" alt="" src="f2.jpg" width="320" height="380">
 							</a>
							<h2>Want to Sell ??</h2>
							<p>Get Details of All Buyers Near You</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="footer">
				<h1>MY FARMER PROFILE</h1>
			</div>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>