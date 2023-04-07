<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
    <title>View Sales Report</title>
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
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png/Logo4.png"></a></div>
    <div id="blackbox"><h1 style="color: white; padding-top: 30px; margin-bottom: 5px;">View Sales Report</h1>
        <div id="greycontent" style="margin-bottom: 20px;"></div>
        <div style="clear:both;"></div>
    </div></center>
</body>
</html>