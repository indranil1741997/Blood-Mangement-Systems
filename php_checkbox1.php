<?php
session_start();
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
$d=$_SESSION['user'];
$checkbox=$_POST['check_list'];  
foreach($checkbox as $chk1)  
    {  
        $sql = "UPDATE bbblood_types SET $chk1='Y' WHERE BID='$d'";
        if(!(mysqli_query($conn,$sql)))
            echo "error=".mysqli_error($conn);
            
    }
$conn->close();
?>
<html>
<body>    
<h3 style="color:#ffffff">Records Updated Succesfully</h3>
</body>    
</html>