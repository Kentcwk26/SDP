<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button{ 
        background-color: #f7d0af;
        padding: 80px;
        display: inline-block;
        border-radius: 20px;
        margin-left: 20px;
        margin-right: 20px;
        font-weight: bold;
        font-size: 20px;
        cursor: pointer;
    }
    input[type=button]:active {
        box-shadow: 0 5px;
        transform: translateY(2px);
    }
    a:visited{
        color: black;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <div>
        <div style="float: left; padding: 20px">
            <h3><a href="logout.php">Log Out</a></h3>
        </div>
        <div style="float: right; padding: 20px">
            <h3><a href="staffprofile.php">Profile</a></h3>
        </div>
    </div>
    <div style="margin: 20px">
        <div style="display:flex; justify-content: center;">
            <div><input type="button" id="my-button" value="Manage Medicine" onclick="window.open('managemedicine.php','_self')"></div>
            <div><input type="button" id="my-button" value="Manage Booking Services" onclick="window.open('managebookingservices.php','_self')"></div>
            <div><input type="button" id="my-button" value="Manage Product" onclick="window.open('manageproduct.php','_self')"></div>
        </div>
    </div>
    <div style="margin: 20px">
        <div style="display:flex; justify-content: center;">
            <input type="button" id="my-button" value="Generate Receipt" onclick="window.open('generatereceipt.php','self')">
            <input type="button" id="my-button" value="Generate Financial Report" onclick="window.open('generatefinancialreport.php','_self')">
        </div>
    </div>
    <div style="clear: both"></div>
</body>
</html>