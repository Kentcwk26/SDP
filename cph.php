<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png" >
    <title>Customer Booking History</title>
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
    th,td{
        background-color: #d9d9d9;
        border: 1px solid white;
        padding: 10px;
        text-align: center;
        vertical-align: middle;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png/Logo4.png"></a></div>
    <div id="blackbox"><h1 style="color: white; padding-top: 30px;">Customer Purchase History</h1>
    <center><table>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Phone</th>
            <th>Customer Address</th>
            <th>Customer Booking Date</th>
            <th>Customer Booking Time</th>
            <th>Customer Booking Service</th>
            <th>Customer Booking Status</th>
        </tr>
        <tr>
            <td>C1</td>
            <td>Kentc</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>C2</td>
            <td>Wei Shen</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>C3</td>
            <td>Yu Hang</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>C4</td>
            <td>Ivan</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>C5</td>
            <td>Zhi Horng</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    </div></center>
</body>
</html>