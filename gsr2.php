<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
    <title>Generate Sales Report</title>
</head>
<style>
    #blackbox{
        text-align: center;
        background-color: black;
        width: 100%;
        height: 1020px;
    }
    #greycontent{
        background-color: grey;
        height: 800px;
        width: 1200px;
        margin: auto;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png/Logo4.png"></a></div>
    <div id="blackbox"><h1 style="color: white; padding-top: 30px;">Generate Sales Report</h1>
        <div id="greycontent" style="margin-bottom: 20px;"></div>
        <div><img src="png\Tick.png" alt="Correct" height= 80px; width= 85px; style="margin-left: 18px; float:left;"></div>
        <div><img src="png\Screenshot 2023-04-06 211934.png" alt="Wrong" height= 80px; width= 80px; style="margin-right: 20px; float:right;"></div>
        <div style="clear:both;"></div>
    </div></center>
</body>
</html>