<?php 
session_start();
$username=$_SESSION['var'];
$pid = $_POST['p_id'];
$pname = $_POST['p_name'];
$pcost = $_POST['p_cost'];
$pmanufacturer = $_POST['p_manufacturer'];

if(!empty($pid) || !empty($pname) || !empty($pcost) || !empty($pmanufacturer))
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
    $INSERT = "INSERT INTO supplier_products(username, pid, prod_name, prod_cost, manufacturer) values(?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssis",$username, $pid, $pname, $pcost, $pmanufacturer);
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