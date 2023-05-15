<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Report</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
</head>
<style>
    body{
        background-color: #ffffa1;
    }

    #loginblock{height:70px;width: 600px;
        text-align:right;
        display:block;
    position:flex;
    float: left;
    background-color: #DABA9E;

    }

    #my-button{ background-color: #f7d0af;
        padding: 20px 40px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 30px;
        margin-right: 30px

    }

    #button{ 
        margin-left: 90px;
        margin-right: 90px;
        display: inline-block;

    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <center><div id="button"><a href="#">About Us</a></div> <div id="button"><a href="#">Terms & Conditions</a></div> <div id="button"><a href="#">Privacy Notes</a></div> <div id="button"><a href="#"> Help & Support </a></div></center>
    <br>
    <center><p><b>Pet Report</b></p></center>
    <br>
    <center><div id="my-button"><a href="generatepetreport.php">Generate Report</a></div>  <div id="my-button"><a href="viewpetreport.php">View Report</a></div></center>
      <br>
      <br>
      <center><div id="my-button"><a href="vetschedule.php">Back</a></div></center>
</body>
</html>