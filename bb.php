<!DOCTYPE html>
<html>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
    
<style>
    .button {
        background-color: #FF4500;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        opacity: 0.7;
        transition: all 0.5s;
        width : 250px;
        box-shadow: 4px 4px black;
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
        background-color:#9932CC;
        opacity: 0.6;
    }
    .button1 {
        margin-top: 100px;
        margin-left: 70px;
        margin-bottom: 30px;
    }
    .button2 {
        margin-top: 20px;
        margin-left: 70px;
        margin-bottom: 30px;
    }
    .button3 {
        margin-top: 20px;
        margin-left: 70px;
        margin-bottom: 30px;
    }
    .button4 {
        margin-top: 20px;
        margin-left: 70px;
    }
</style>
<script>
    function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
        }
$(document).ready(function(){
    $('iframe').css('display','none');
    $('.button1').click(function(){
           $('iframe').attr('src',"nd.html");
            $('iframe').show();
        });
    $('.button2').click(function(){
           $('iframe').attr('src',"receive.html");
            $('iframe').show();
        });
    
})
</script>    
    
<body background="medical.jpg">
    <h1 style="margin-left:450px;color:white"><b>Blood Management Systems</b></h1>
    <iframe width="70%" height="550px" margin-top="400px" name="iframe_a" align="right"></iframe>
    <button class="button button1"><span>DONATE</span></button><br>
    <button class="button button2"><span>REQUEST</span></button><br>
    <a href="bloodbank.html"><button  class="button button3"><span>BLOOD BANKS</span></button></a><br>
    <a href="hospital.html"><button class="button button4"><span>HOSPITALS</span></button></a>
   
</body>
</html>