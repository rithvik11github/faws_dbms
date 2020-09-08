<!DOCTYPE html>
<html>
<head>
  <title>Sort by Minimum Cost of All Products</title>
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
           
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'faws';

            $mysqli = new mysqli($host,$user,$pass,$db);
           
            $result = $mysqli->query("SELECT supplier.name, supplier.address, supplier.contactno, supplier_products.pid, supplier_products.prod_name, supplier_products.prod_cost,  supplier_products.manufacturer  from supplier inner join supplier_products where supplier.username=supplier_products.username order by supplier_products.prod_cost")or die($mysqli->error);        
?>   

<h1 align="center"><?php echo "Here are Results sorted by Minimum Cost of Products"; ?></h1>

<table>
  <tr>
    <th>Supplier Name</th>
    <th>Supplier Address</th>
    <th>Supplier Contact No</th>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Cost</th>
    <th>Manufactured By</th>
  </tr>
  <?php while ($row= $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['address'] ?></td>
    <td><?= $row['contactno'] ?></td>
    <td><?= $row['pid'] ?></td>
    <td><?= $row['prod_name'] ?></td>
    <td><?= $row['prod_cost'] ?></td>
    <td><?= $row['manufacturer'] ?></td>
  </tr>
  <?php endwhile; ?>
</table>


</body>
</html>
