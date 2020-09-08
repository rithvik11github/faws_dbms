<!DOCTYPE html>
<html>
<head>
  <title>Sort by Minimum Cost of All Crops</title>
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
            $result = $mysqli->query("SELECT buyer.name, buyer.address, buyer.contactno, buyer_demands.cid, buyer_demands.cropname, buyer_demands.costpkg,  buyer_demands.expected_hrvdate  from buyer inner join buyer_demands where buyer.username=buyer_demands.username order by buyer_demands.costpkg")or die($mysqli->error);        
?>  

<h1 align="center"><?php echo "Here are Results sorted by Minimum Cost per KG of Crops"; ?></h1>

<table>
  <tr>
    <th>Buyer Name</th>
    <th>Buyer Address</th>
    <th>Contact No.</th>
    <th>Crop ID</th>
    <th>Crop Name</th>
    <th>Cost Per KG</th>
    <th>Expected Harvest Date</th>
  </tr>
  <?php while ($row= $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['address'] ?></td>
    <td><?= $row['contactno'] ?></td>
    <td><?= $row['cid'] ?></td>
    <td><?= $row['cropname'] ?></td>
    <td><?= $row['costpkg'] ?></td>
    <td><?= $row['expected_hrvdate'] ?></td>
  </tr>
  <?php endwhile; ?>
</table>


</body>
</html>
