<!DOCTYPE html>
<html>
<head>
  <title>Supplier Listings</title>
  <meta charset="UTF-8">
<style>
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
            $result = $mysqli->query("SELECT pid, prod_name, prod_cost, manufacturer FROM supplier_products where username='$username' order by prod_name")or die($mysqli->error);        
?>   

<h1 align="center"><?php echo "Here is the Details of All the Products $username has Uploaded for Sale"; ?></h1>

<table>
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Cost</th>
    <th>Manufactured By</th>
  </tr>
  <?php while ($row= $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['pid'] ?></td>
    <td><?= $row['prod_name'] ?></td>
    <td><?= $row['prod_cost'] ?></td>
    <td><?= $row['manufacturer'] ?></td>
  </tr>
  <?php endwhile; ?>
</table>

</body>
</html>
