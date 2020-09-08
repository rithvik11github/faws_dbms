<!DOCTYPE html>
<html>
<body>
  <?php 
    session_start();
    $uname=$_SESSION['var'];
    $_SESSION['var']=$uname;
  ?>

<h2>Enter the products your want to buy</h2>

<form action="buyr_demands.php" method="POST">
  Crop ID:<br>
  <input type="text" name="c_id" value="">
  <br>
  Crop Name:<br>
  <input type="text" name="c_name" value="">
  <br>
  Expected Harvest Date:<br>
  <input type="Date" name="c_date" value="">
  <br>
  <br>
  <button type="submit" name="Submit" value="Submit">Submit</button>
</form> 

</body>
</html>
