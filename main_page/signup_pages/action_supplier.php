<?php 
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$contactno = $_POST['contactno'];
$aadharno = $_POST['aadharno'];
$password = $_POST['psw'];
$username = $_POST['username'];
if(!empty($name) || !empty($age) || !empty($address) || !empty($contactno) || !empty($aadharno) || !empty($password)|| !empty($username) ){
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "faws";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT aadharno From supplier Where aadharno = ? Limit 1";
     $INSERT = "INSERT Into supplier(username, name, age, address, contactno, aadharno) values(?, ?, ?, ?, ?, ?)";
     $INSERT1 = "INSERT Into supplier_login(username, password) values (?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $aadharno);
     $stmt->execute();
     $stmt->bind_result($aadharno);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssisii",$username, $name, $age, $address, $contactno, $aadharno);
      $stmt->execute();
      $stmt->close();
      $stmt = $conn->prepare($INSERT1);
      $stmt->bind_param("ss",$username, $password);
      $stmt->execute();
            echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this aadharno";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
 ?>