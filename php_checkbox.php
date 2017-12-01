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
$checkbox1=$_POST['check_list'];  
foreach($checkbox1 as $chk1)  
    {  
          
        $sql = "UPDATE blood_types SET $chk1='Y' WHERE HID='$d'";
        if(!(mysqli_query($conn,$sql)))
            echo "error=".mysqli_error($conn);
            
    }
$conn->close();
?>
<html>
<body>    
<h3 style="color:#0f7777">Records Updated Succesfully</h3>
</body>    
</html>