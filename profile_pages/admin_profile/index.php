<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMINISTRATOR</title>
	<meta charset="UTF-8">
	<meta name="description" content="Administrator">
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
.button1 {
  background-color: #33ff42;
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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
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
            $result = $mysqli->query("SELECT username, fullname, doj, designation from admin_login where username='$username' limit 1")or die($mysqli->error);
            
            $row= $result->fetch_assoc();      
            
?>  

	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<div class="header">
				<h1>ADMINISTRATOR PROFILE</h1>

			</div>

	<header class="header-section">
		<h2>Administrator Profile</h2>
		<a href="/new_try/main_page/login_pages/adminlogin.html" class="button">Log Out</a>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="/new_try/main_page/log.php" class="button1">View Log</a>
	</header>

	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
							<div class="col-lg-6">
								<div class="hero-text">
									<h2><?= $row['fullname'] ?></h2>
								</div>
								<div class="hero-info">
									<h2>My Info</h2>
									<ul>
										<li><span>Username</span><?= $row['username'] ?></li>
										<li><span>Full Name</span><?= $row['fullname'] ?></li>
										<li><span>Date of Join</span><?= $row['doj']?></li>
										<li><span>Designation</span><?= $row['designation']?></li>
										
									</ul>
								</div>
							</div>
							<div class="col-lg-6">
								<figure class="hero-image">
								<img src="admin.png">
								</figure>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'faws';
 $mysqli = new mysqli($host,$user,$pass,$db);
 $result = $mysqli->query("CALL complaints_view();")or die($mysqli->error);        
?>   

<h1 align="center"><?php echo "View the Queries by Farmers"; ?></h1>

<table>
  <tr>
    <th>Farmer Username</th>
    <th>Farmer Contact No</th>
    <th>Queries</th>
  </tr>
  <?php while ($row= $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['f_username'] ?></td>
    <td><?= $row['contactno'] ?></td>
    <td><?= $row['queries'] ?></td>
  </tr>
  <?php endwhile; ?>
</table>

	<div class="footer">
				<h1>ADMINSTRATOR PROFILE</h1>
			</div>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>