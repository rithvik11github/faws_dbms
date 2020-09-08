<?php 

$contactno = $_POST['contactno'];
$username = $_POST['uname'];
$query = $_POST['query'];

if(!empty($username) || !empty($contactno) || !empty($query))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "faws";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
        $INSERT = "INSERT INTO help(f_username, contactno, queries) values(?, ?, ?)";
     //Prepare statement
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sis",$username, $contactno, $query);
         $stmt->execute();
        echo "We have taken your query...we will contact you shortly";
    } 
     $stmt->close();
     $conn->close();  
} 
else
    die("enter all details");
  
?>