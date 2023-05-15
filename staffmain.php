<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button{ 
        background-color: #f7d0af;
        padding: 90px;
        display: inline-block;
        border-radius: 20px;
        margin-left: 30px;
        margin-right: 30px;
        font-weight: bold;
        font-size: 20px;
        cursor: pointer;
    }
    #button{ 
        margin-left: 90px;
        margin-right: 90px;
        display: inline-block;
    }
    input[type=button]:active {
        box-shadow: 0 5px;
        transform: translateY(2px);
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <div style="margin: 20px">
        <div style="display:flex; justify-content: center;">
            <div><input type="button" id="my-button" value="Manage Medicine" onclick="window.open('managemedicine.php','_self')"></div>
            <div><input type="button" id="my-button" value="Manage Booking Services" onclick="window.open('managebookingservices.php','_self')"></div>
            <div><input type="button" id="my-button" value="Manage Product" onclick="window.open('manageproduct.php','_self')"></div>
        </div>
    </div>
    <div style="margin: 20px">
        <div style="display:flex; justify-content: center;">
            <input type="button" id="my-button" value="Generate Receipt" onclick="window.open('generatereceipt1.php','self')">
            <input type="button" id="my-button" value="Generate Financial Report" onclick="window.open('generatefinancialreport.php','_self')">
        </div>
    </div>
</body>
</html>