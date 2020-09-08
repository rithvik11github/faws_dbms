<!DOCTYPE html>
<html>
<head>
  <title>Search Buyer Listings</title>
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

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

</style>
</head>
<body>

<?php
           
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'faws';
            $cpname= $_POST['search'];
            $mysqli = new mysqli($host,$user,$pass,$db);
            $result = $mysqli->query("SELECT buyer.name, buyer.address, buyer.contactno, buyer_demands.cid, buyer_demands.cropname, buyer_demands.costpkg,  buyer_demands.expected_hrvdate  from buyer inner join buyer_demands where buyer.username=buyer_demands.username and buyer_demands.cropname='$cpname'")or die($mysqli->error);        
            session_start();
           $_SESSION['var']=$cpname;
?>  

<h1 align="center"><?php echo "Here is the Result by your search"; ?></h1>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href="mincostsearch_b.php" class="button">MINIMUM COST</a>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href="maxcostsearch_b.php" class="button">MAXIMUM COST</a>
<br>
<br>
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
