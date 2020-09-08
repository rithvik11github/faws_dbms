<!DOCTYPE html>
<html>
<head>
  <title>Buyer Listings</title>
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
            $result = $mysqli->query("SELECT cid, cropname, costpkg, expected_hrvdate FROM buyer_demands where username='$username' order by cropname")or die($mysqli->error);        
?>   

<h1 align="center"><?php echo "Here is the Details of All the Crops $username has Requested from Farmers"; ?></h1>

<table>
  <tr>
    <th>Crop ID</th>
    <th>Crop Name</th>
    <th>Cost Per KG</th>
    <th>Expected Harvest Date</th>
  </tr>
  <?php while ($row= $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['cid'] ?></td>
    <td><?= $row['cropname'] ?></td>
    <td><?= $row['costpkg'] ?></td>
    <td><?= $row['expected_hrvdate'] ?></td>
  </tr>
  <?php endwhile; ?>
</table>

</body>
</html>
