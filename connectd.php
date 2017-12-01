<!DOCTYPE html>
<html>
<style>
    table,tr,td{
        border: 1px solid black;
        margin: 2px;
        margin-left: 120px;
        padding: 2px;
    }    
</style>
<body bgcolor="#00ffff">    
<table>
<th>DID</th><th>DNAME</th><th>ADDRESS</th><th>BLOOD GROUP</th><th>PHONE</th>
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

$sql = "SELECT * FROM donor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["DID"]. "</td><td>" . $row["DNAME"]. "</td><td>" . $row["ADDRESS"]."</td><td>". $row["B_TYPE"]."</td><td>". $row["PHONE"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>    
</html>