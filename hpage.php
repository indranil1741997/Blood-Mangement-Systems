<!DOCTYPE html>
<html>
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
        $sql = "SELECT hname FROM hospital where hid='$d'";
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
             $demo=$row["hname"];
        }
    } else {
    echo "0 results";
    }
$conn->close();
?>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
    
<style>
    .button {
        background-color: olive;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        transition: all 0.5s;
        width : 250px;
        box-shadow: 4px 4px #E0FFFF;
    }
    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
    .button:hover
    {
        background-image:none;
        background-color:black;
        opacity: 0.6;
    }
    .button1 {
        margin-top: 60px;
        margin-left: 70px;
        margin-bottom: 30px;
    }
    .button2 {
        margin-top: 30px;
        margin-left: 70px;
        margin-bottom: 30px;
    }
    .button3 {
        margin-top: 30px;
        margin-left: 70px;
        margin-bottom: 30px;
    }
    .button4 {
	margin-top: 30px;
	margin-left: 70px;
	margin-bottom: 30px;
    } 
</style>
 <script>
    function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
        }
$(document).ready(function(){
    $('iframe').css('display','none');
    $('.button2').click(function(){
           $('iframe').attr('src',"fill.php");
            $('iframe').show();
        });
    $('.button3').click(function(){
           $('iframe').attr('src',"bsel.html");
            $('iframe').show();
        });
    
})
</script>   
<body background="hoi.jpg">
    <h1 style="margin-left:450px;color:white">Welcome <?php echo " $demo"?></h1>
    <div style="position:relative; top: 40px;right:40px; float: right;">
        <iframe width="400px" height="500px" name="iframe_a"></iframe>
    </div>
    <a href=connectp.php><button class="button button1"><span>PATIENT RECORD</span></button></a><br>
    <button class="button button2"><span>ADD PATIENT</span></button><br>
    <button  class="button button3"><span>UPDATE BLOOD AVAILIBILITY</span></button><br>
    <a href=connecthb.php><button class="button button4"><span>REQUEST BLOOD</span></button><br>
</body>
</html>