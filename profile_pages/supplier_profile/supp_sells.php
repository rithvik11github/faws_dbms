<!DOCTYPE html>
<html>
<body>
  <?php 
    session_start();
    $uname=$_SESSION['var'];
    $_SESSION['var']=$uname;
  ?>

<h2>Insert Product Details you want to sell</h2>

<form action="supp_supplies.php" method="POST">
  Product ID:<br>
  <input type="text" name="p_id" value="">
  <br>
  Product Name:<br>
  <input type="text" name="p_name" value="">
  <br>
  Product Cost(in INR):<br>
  <input type="number" name="p_cost" value="">
  <br>
  Product Manufacturer(Company):<br>
  <input type="text" name="p_manufacturer" value="">
  <br>
  <br>
  <button type="submit" name="Submit" value="Submit">Submit</button>
</form> 

</body>
</html>
