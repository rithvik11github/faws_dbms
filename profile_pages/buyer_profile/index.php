<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buyer Profile</title>
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
            $result = $mysqli->query("SELECT username, name, age, address, contactno, aadharno from buyer where username='$username' limit 1")or die($mysqli->error);
           
            $row= $result->fetch_assoc();      
           
?>  
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<div class="header">
				<h1>MY BUYER PROFILE</h1>
			</div>

	<header class="header-section">
		<h2>My Buyer Profile</h2>
		<a href="/new_try/main_page/login_pages/buyerlogin.html" class="button">Log Out</a>
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
									</ul>
								</div>
							</div>
							<div class="col-lg-6">
								<figure class="hero-image">
									<img src="f3.png">
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
							<a href="/new_try/data_input_pages/buyer_request_from/index.php"><img border="0" alt="" src="b3.png" width="300" height="300">
 							</a>
							<h2>Want To Buy Harvest?? </h2>
							<p>Request your details here</p>
						</div>
					</div>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="portfolio-item">
							<a href="/new_try/data_fetch_pages/buyer_listings.php"><img border="0" alt="" src="list.png" width="300" height="300">
 							</a>
							<h2>Want to See your Listings?? </h2>
							<p>Get Details of products your uploaded</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="footer">
				<h1>MY BUYER PROFILE</h1>
			</div>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>