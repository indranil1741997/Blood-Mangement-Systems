<!DOCTYPE html>
<html>
<body>
<style>
    table,tr,td{
        border: 1px solid black;
    }    
</style>
<table>
<th>HOSPITAL NAME</th><th>ADDRESS</th><th>PHONE</th>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hospital";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["HName"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["Phone"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>    
</html>