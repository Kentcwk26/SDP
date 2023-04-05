<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Icon.png" >
    <title>Manage Customers</title>
</head>
<style>
    #adminIndexHeader{
        width: 200px;
        height: 150px;
        padding-bottom: 30px;
        padding-top: 10px;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 95%;
    }
    td, th {
        border: 1px solid black;
        text-align: center;
        padding: 15px;
        font-size: 18px;
    }
    tr:nth-child(even) {
        padding: 15px;
        background-color: #dddddd;
    }
</style>
<body>
    <?php
        include "dbcon.php";
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="Logo4.png"></a></div>
    <h1><b>Manage Customers</b></h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </table>
    </center>
</body>
</html>