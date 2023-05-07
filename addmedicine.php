<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
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
        width: 400px;
    }

    td{
        width: 125px;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }

    input[type=submit],input[type=reset],input[type=button]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }

    input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
        box-shadow: 0 5px;
        transform: translateY(2px);
    }

    input[type=reset]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
    }

    input[type=button]:hover{
        background-color: red;
        font-weight:bold;
    }

    input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
        border: 2px solid #555;
    }

</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <br><b><h1 style="text-align: center; padding-bottom: 10px;"><u>Add Medicine</u></h1></b>
    <form action="#" method="post">
    <table class="center">
        <tr>
            <td><label for="user-input" style="color: white">Medicine ID:</label></td>
            <?php
                $prefix = "M";
                $last_id = 0;
                $sql = "SELECT medicine_id FROM medicine ORDER BY medicine_id DESC LIMIT 1";
                $result = mysqli_query($connection,$sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $last_id = substr($row["medicine_id"], 1);
                }
                $new_id = $prefix . ($last_id + 1);
            ?>
            <td><input type="text" id="user-input" name="medicine-id" value="<?php echo $new_id ?>" style="padding-left: 5px; font-family: Times New Roman" readonly></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Medicine:</label></td>
            <td><input type="text" id="user-input" name="medicine" style="padding-left: 5px; font-family: Times New Roman"></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Stock Amount:</label></td>
            <td><input type="number" id="user-input" name="stock-amount" placeholder="Stock amount cannot more exceed than 1000" min = "0" max = "1000" style="padding-left: 5px; font-family: Times New Roman; height: 40px; font-size: 16px;"></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Price (RM):</label></td>
            <td><input type="text" id="user-input" name="price" placeholder="Please set the price like 0.00" style="padding-left: 5px; font-family: Times New Roman"></td>
        </tr>
    </table>
    <table class="center" style="margin-top: 20px;">
        <tr>
            <td colspan="2"><input type="button" value="Cancel" onclick="window.open('managemedicine.php','_self')">
            <td colspan="2"><input type="reset" name="reset" value="Reset"></td>
            <td colspan="2"><input type="submit" name="submit" value="Complete"></td>
        </tr>
    </table>
    </form>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(isset($_POST['submit'])){

            if (empty($_POST["medicine"]) or empty($_POST["price"])) {
                echo "<script>alert('All the medicine details are required')</script>";
            } else {
                $name = test_input($_POST["medicine"]);
                $price = test_input($_POST["price"]);
                $stock = test_input($_POST['stock-amount']);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)||(!preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $price))){
                    echo "<script>alert('Wrong input either in the name or price section!')</script>";
                } else if ($stock >= 1001 || $stock < 0){
                    echo "<script>alert('Stock amount cannot more exceed than 1000')</script>";
                } else {
                    $medicine_id = $_POST['medicine-id'];
                    $medicine_name = $_POST['medicine'];
                    $medicine_stock = $_POST['stock-amount'];
                    $medicine_price = $_POST['price'];
                    $query1= "SELECT * FROM `medicine` WHERE medicine_name = '$medicine_name'";
                    $result1 = mysqli_query($connection, $query1);
                    if (mysqli_num_rows($result1) > 0) {
                        echo "<script>alert('Medicine already exist!')</script>";
                    } else {
                        $sql1 = "INSERT INTO medicine (medicine_id, medicine_name, medicine_stock, medicine_price) VALUES ('$medicine_id', '$medicine_name', '$medicine_stock', '$medicine_price')";
                        if (mysqli_query($connection, $sql1)) {
                            ?>
                            <script>
                                window.location.href = "managemedicine.php";
                                alert("Successfully Added");
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <script>
                                alert("Failed to add medicine, please try again");
                            </script>
                            <?php
                                mysqli_close($connection);
                        }
                    }
                }
            }
        }
    ?>
</body>
</html>