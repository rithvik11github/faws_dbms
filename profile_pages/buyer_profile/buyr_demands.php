<?php 
session_start();
$username=$_SESSION['var'];
$cid = $_POST['c_id'];
$cname = $_POST['c_name'];
$ccostpkg = $_POST['c_pkg'];
$cdate = $_POST['c_date'];

if(!empty($cid) || !empty($cname) || !empty($cdate) || !empty($ccostpkg))
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
    $INSERT = "INSERT INTO buyer_demands(username, cid, cropname, costpkg, expected_hrvdate) values(?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssis",$username, $cid, $cname, $ccostpkg, $cdate);
    $stmt->execute();
    echo "New record inserted sucessfully";
    }
     $stmt->close();
     $conn->close();
} 
else 
{
 echo "All field are required";
 die();
}
 ?>