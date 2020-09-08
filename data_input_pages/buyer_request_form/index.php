<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buyer Request Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(farm.jpg);">
				<span class="contact100-form-title-1">
					Upload Request Details
				</span>
				<span class="contact100-form-title-2">
					Insert details of Harvest you Want to Request
				</span>
			</div>
			<form class="contact100-form validate-form" action="/new_try/profile_pages/buyer_profile/buyr_demands.php" method="POST">
				<div class="wrap-input100 validate-input" data-validate="Crop Id is required">
					<span class="label-input100">Crop ID:</span>
					<input class="input100" type="text" name="c_id" placeholder="Enter cid" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Crop Name is Required">
					<span class="label-input100">Crop Name:</span>
					<input class="input100" type="text" name="c_name" placeholder="Enter crop name" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Cost Per Kg is required">
					<span class="label-input100">Cost Per KG:</span>
					<input class="input100" type="text" name="c_pkg" placeholder="Enter Cost Per KG" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Date is required">
					<span class="label-input100">Expected Harvest Date:</span>
					<input class="input100" type="Date" name="c_date" placeholder="Enter date" required>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/map-custom.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
