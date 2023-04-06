<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Icon.png">
    <title>Generate Sales Report</title>
</head>
<style>
    #blackbox{
        text-align: center;
        background-color: black;
        width: 1000px;
        height: 300px;
    }
    #button{
        position: absolute;
        align-items: center;
        width: 250px;
        height: 65px;
        background: #D9D9D9;
        border-radius: 50px;
        left: 50%;
        margin: -10px 0 0 -124px;
    }

</style>
<body>
    <?php
        include "dbcon.php";
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png/Logo4.png"></a></div>
    <div id="blackbox"><h1 style="color: white; padding-top: 30px;">Generate Sales Report</h1>
        <div id="button" style="margin-top: 10px; margin-bottom: 5px;"></div>
        <img src="png\Tick.png" alt="Correct" height= 80px; width= 85px; style="margin: -90px 30px -160px 30px;">
        <img src="png\Screenshot 2023-04-06 211934.png" alt="Wrong" height= 80px; width= 80px; style="margin: -90px 30px -160px 10px;">
    </div></center>
</body>
</html>