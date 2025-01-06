<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Financial Report</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
    }
    #my-button:active, input[type=button]:active{
        box-shadow: 0 5px none;
        transform: translateY(2px);
    }
    #user-input{
        height:320px;
        width: 700px;
    }
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
    }   
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <b><h1 style="text-align:center"><u>Generate Financial Report</u></h1></b>
    <div class="center">
        <?php
            $totalincome = 0;
            $query = "SELECT * FROM purchase";
            $result = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($result)){
                $income = $row['purchase_total'];
                $totalincome += $income;
            }
            echo "<br><h3>Total Income: RM$totalincome</h3>";
        ?>
    </div>
    <div class="center">
        <input type="button" value="Back" id="my-button" onclick="window.open('staffmain.php','_self')">
        <input type="button" value="Generate" name="Generate" id="my-button" onclick="window.print()">
    </div>
</body>
</html>
