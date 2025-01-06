<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>
<style>
    .box{
        width: 400px;
        height: 150px;
        background-color: black;
        color: white;
        margin: 20px 40px;
        padding: 140px 40px;
        font-size: 25px;
        font-weight: bold;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        sleep(1);
    ?>
    <center><div id="adminIndex"><a href="admin.php"><img src="png/Logo4.png"></a></div>
    <br><h1><b>Welcome back, Admin!</b></h1>
    <div style="display:flex; justify-content: center;">
        <a href="manageuser.php">
            <div class="box"><br>Manage Users</div>
        </a>
        <a href="gsr.php">
            <div class="box"><br>Sales Report</div>
        </a>
    </div>
    <div><h1 style="font-size: 140%;">SDP PET PARADISE @COPYRIGHT 2023, ALL RIGHT RESERVED.</h1></center>
</body>
</html>