<!DOCTYPE html>
<html>
<body>
<p id="content" align="left">
            <table>
            <?php
           
            session_start();
            $username=$_SESSION['var'];
            $conn = mysqli_connect("localhost", "root", "", "faws");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT pid, prod_name, prod_cost, manufacturer FROM supplier_products where username='$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>Procuct id:" . $row["pid"] . "</td></tr><tr><td>Product Name;" . $row["prod_name"] . "</td></tr><tr><td>Product Cost:" . $row["prod_cost"] . "</td></tr><tr><td>Manufactured by:" . $row["manufacturer"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>  
            </table>
        </p>
</body>
</html>
