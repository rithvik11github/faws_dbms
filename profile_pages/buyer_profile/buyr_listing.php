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
            $sql = "SELECT cid, cropname, expected_hrvdate FROM buyer_demands where username='$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>Crop id:" . $row["cid"] . "</td></tr><tr><td>Crop Name:" . $row["cropname"] . "</td></tr><tr><td>Expected Harvest Date:" . $row["expected_hrvdate"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>  
            </table>
        </p>
</body>
</html>
