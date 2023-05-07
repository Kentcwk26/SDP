<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Medicine</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #block{
        height:70px;width: 650px;
        text-align:right;
        display:block;
        position:flex;
        float: left; 
        background-color: #DABA9E;
    }
    #loginblock{
        height:70px;
        width: 600px;
        text-align:right;
        display:block;
        position:flex;
        float: left;
        background-color: #DABA9E;
    }
    #my-button{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
    }
    #user-input{
        height: 30px;
        width: 500px;
    }
    td{
        width: 125px;
    }
    .center{
        margin-left: auto;
        margin-right: auto;
    }
    input[type=button]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=button]:active{
        box-shadow: 0 5px none;
        transform: translateY(2px);
    }
    input[type=button]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
        cursor: pointer;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header1.php";
    ?>
    <br>
    <b><h1 style="text-align:center; padding-bottom: 10px;"><u>View Medicine</u></h1></b>
    <form action="#" method="post">
    <table class="center">
        <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM medicine where medicine_id = '$id'";
            $result = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($result)){
                $id = $row['medicine_id'];
                $name = $row['medicine_name'];
                $stock = $row['medicine_stock'];
                $price = $row['medicine_price'];
            }
        ?>    
        <tr>
            <td><label for="user-input" style="color: white">Medicine ID:</label></td>
            <td><input type="text" id="user-input" value="<?php echo $id; ?>" readonly></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Medicine Name:</label></td>
            <td><input type="text" id="user-input" value="<?php echo $name; ?>" readonly></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Stock Amount:</label></td>
            <td><input type="number" id="user-input" value="<?php echo $stock; ?>" readonly></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Price (RM):</label></td>
            <td><input type="text" id="user-input" value="<?php echo $price; ?>" readonly></td>
        </tr>
    </table>
    <table class="center" style="margin-top: 20px;">
        <tr>
            <td colspan="2"><input type="button" value="Cancel" onclick="window.open('managemedicine.php','_self')">
        </tr>
    </table>
    </form>
</body>
</html>