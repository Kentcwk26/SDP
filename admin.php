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
        width: 200px;
        height: 80px;
        background-color: black;
        color: white;
        margin: 20px 40px;
        padding: 120px 20px;
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
            <div class="box">Manage Users</div>
        </a>
        <a href="gsr.php">
            <div class="box">Sales Report</div>
        </a>
        <a href="staffmain.php">
            <div class="box">Staff Page</div>
        </a>
        <a href="vet.php">
            <div class="box">Vet Page</div>
        </a>
    </div>
    <div><h1 style="font-size: 140%;">SDP PET PARADISE @COPYRIGHT 2023, ALL RIGHT RESERVED.</h1></center>
</body>
</html>