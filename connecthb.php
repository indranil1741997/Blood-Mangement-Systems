<!DOCTYPE html>
<html>
<body bgcolor="#00ffff">
<style>
    table,tr,td{
        border: 1px solid black;
    }    
</style>
<table>
<th>BLOOD BANK NAME</th><th>ADDRESS</th><th>PHONE</th><th>A+</th><th>A-</th><th>B+</th><th>B-</th><th>AB+</th><th>AB-</th><th>O+</th><th>O-</th>
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

$sql = "SELECT blood_bank.bname,blood_bank.address,blood_bank.phone,bbblood_types.a_plus,bbblood_types.a_neg,bbblood_types.b_plus,bbblood_types.b_neg,bbblood_types.ab_plus,bbblood_types.ab_neg,bbblood_types.o_plus,bbblood_types.o_neg FROM blood_bank,bbblood_types WHERE blood_bank.bid=bbblood_types.bid;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["bname"]. "</td><td>" . $row["address"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["a_plus"]. "</td><td>" . $row["a_neg"]. "</td><td>" . $row["b_plus"]. "</td><td>" . $row["b_neg"]. "</td><td>" . $row["ab_plus"]. "</td><td>" . $row["ab_neg"]. "</td><td>" . $row["o_plus"]. "</td><td>" . $row["o_neg"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>    
</html>