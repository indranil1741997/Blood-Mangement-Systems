<?php
$link = mysqli_connect("localhost", "root", "", "blood_donation");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$pid = mysqli_real_escape_string($link, $_REQUEST['PID']);
$pname = mysqli_real_escape_string($link, $_REQUEST['PNAME']);
$bg = mysqli_real_escape_string($link, $_REQUEST['BLOOD_GROUP']);
$address = mysqli_real_escape_string($link, $_REQUEST['ADDRESS']);
$phone = mysqli_real_escape_string($link, $_REQUEST['PHONE']);

$sql = "INSERT INTO patient (PID, NAME,BLOOD_GROUP,ADDRESS,PHONE) VALUES ('$pid', '$pname', '$bg', '$address', '$phone')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>