<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png" >
    <link rel="stylesheet" href="css/style.css">
    <title>Manage Users</title>
    <style>
        .box1, .box2, .box3, .box4{
            width: 300px;
            height: 80px;
            background-color: black;
            color: white;
            margin: 20px 20px;
            padding: 100px 10px;
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
        .box3:hover{
            color: black;
            font-weight: bold;
            background-color: #A2D188;
        }
        .box4:hover{
            color: black;
            font-weight: bold;
            background-color: #D2D248;
        }
    </style>
</head>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
    ?>
    <center><div id="adminIndexHeader" style="padding-bottom: 20px;"><a href="admin.php"><img src="png\Logo4.png"></a></center>
    <div style="display:flex; justify-content: center; text-align: center;">
        <a href="managecustomer.php">
            <div class="box1">Customer</div>
        </a>
        <a href="managepet.php">
            <div class="box4">Pet</div>
        </a>
        <a href="managestaff.php">
            <div class="box2">Staff</div>
        </a>
        <a href="managevet.php">
            <div class="box3">Vet</div>
        </a>
    </div>
</body>
</html>