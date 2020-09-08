<?php 

	$error=''; //Variable to Store error message;
	if(isset($_POST['login']))
	{
 		if(empty($_POST['uname']) || empty($_POST['psw']))
 		{
 			$error = "Username or Password is Invalid";
 		}
		else
 		{
 			$user=$_POST['uname'];
 			$pass=$_POST['psw'];

 			$host = "localhost";
    		$dbUsername = "root";
    		$dbPassword = "";
    		$dbname = "faws";
 			$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

 			if (mysqli_connect_error()) {
     		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
     		}
     		else{
 			//sql query to fetch information of registerd user and finds user match.
 			$query = "SELECT * FROM buyer_login WHERE password='$pass' AND username='$user'";
			$stmt = $conn->prepare($query);
			$stmt->bind_param("ss", $pass, $user);
			$stmt->execute();
			$stmt->bind_result($pass, $user);
			$stmt->store_result();
			$rows = $stmt->num_rows;

 			if($rows == 1)
 			{
 				session_start();
 				$_SESSION['var']=$user;
 				header("Location: /new_try/main_page/welcome_pages/buyer_wlcm/index.php"); // Redirecting to other page
 			}
 			else
 			{
 				die("Invalid Username or Password");
 			}
 			$conn->close(); // Closing connection
 		}
 	}
 	}

 ?>