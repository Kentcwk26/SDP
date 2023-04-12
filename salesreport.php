<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .box1, .box2{
            width: 300px;
            height: 80px;
            background-color: black;
            color: white;
            margin: 20px 40px;
            padding: 140px 40px;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
        }
        .box1:hover{
            color: black;
            font-weight: bold;
            background-color: #D9BB97;
        }
        .box2:hover{
            color: black;
            font-weight: bold;
            background-color: #A2D188;
        }
    </style>
    <title>Sales Report</title>
</head>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png/Logo4.png"></a></center>
    <div style="display:flex; justify-content: center; padding-top: 20px">
        <a href="gsr.php" target="blank_">
            <div class="box1">Generate Sales Report</div>
        </a>
        <a href="vsr.php" target="blank_">
            <div class="box2">View Sales Report</div>
        </a>
    </div>
</body>
</html>