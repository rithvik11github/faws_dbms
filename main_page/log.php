<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
           
           
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'faws';

            $mysqli = new mysqli($host,$user,$pass,$db);
            $result = $mysqli->query("CALL logview();")or die($mysqli->error);        
		?>   

<h1 align="center"><?php echo "Contents of Log table are:"; ?></h1>

<table>
  <tr>
    <th>S.no</th>
    <th>ID Type</th>
    <th>Username</th>
  </tr>
  <?php while ($row= $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['s.no'] ?></td>
    <td><?= $row['id_type'] ?></td>
    <td><?= $row['id_username'] ?></td>
  </tr>
  <?php endwhile; ?>
</table>

</body>
</html>
