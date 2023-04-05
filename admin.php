<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Icon.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Index</title>
</head>
<body>
    <?php
        include "dbcon.php";
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="Logo4.png"></a></div></center>
    <center><br><h1><b>Welcome back, Admin!</b></h1>
    <div style="display:flex; justify-content: center;">
        <a href="manageuser.php">
            <div class="box">Manage Users</div>
        </a>
        <a href="salesreport.php">
            <div class="box">Sales Report</div>
        </a>
        <a href="cph.php">
            <div class="box">Customer<br>Purchase History</div>
        </a>
    </div>
    <div style="display:flex; justify-content: center;">
        <a href="cbh.php">
            <div class="box">Customer<br>Booking History</div>
        </a>
        <a href="staff.php">
            <div class="box">Staff Page</div>
        </a>
        <a href="vet.php">
            <div class="box">Vet Page</div>
        </a>
    </div>
    <div><h1 style="font-size: 140%;">SDP PET PARADISE @COPYRIGHT 2023, ALL RIGHT RESERVED.</h1></center>
</body>
</html>