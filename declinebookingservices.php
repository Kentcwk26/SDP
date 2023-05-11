<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booking Services</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button, input[type=button], input[type=reset], input[type=submit]{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
    }
    input[type=text], input[type=date], input[type=datetime-local]{
        width: 600px; 
        height: 40px; 
        font-size: 14px;
        padding-left: 5px;
        padding-right: 10px;
        font-family: "Times New Roman","Serif";
    }
    input[type=button], input[type=reset], input[type=submit]{
        font-weight: bold;
        font-size: 16px;
    }
    input[type=button]:active, input[type=reset]:active, input[type=submit]:active{
      box-shadow: 0 5px;
      transform: translateY(2px);
    }
    input[type=radio]{
        padding: 10px;
        margin: 10px;
        font-weight: bold;
        font-size: 16px;
    }
    #user-input{
        height: 40px;
        width: 600px;
    }
    td{
        width: 200px;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM appointment where appointment_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['appointment_id'];
            $customername = $row['customer_id'];
            $service = $row['appointment_service'];
            $datetime = $row['appointment_datetime'];
        }
    ?>
    <form action="#" method="post">
        <table class="center" style="padding-top: 20px">
            <tr>
                <td><label for="BookingService" style="color: white">Appointment ID:</label></td>
                <td><input type="text" id="user-input" name="booking-id" value="<?php echo $id;?>" readonly></td>
            </tr>
            <tr>
                <td><label for="BookingService" style="color: white">Booking Service:</label></td>
                <td><input type="text" id="user-input" name="booking-service" value="<?php echo $service;?>" readonly></td>
            </tr>
            <tr>
                <td><label for="CustomerName" style="color: white">Customer:</label></td>
                <td><input type="text" id="user-input" name="customer-name" value="<?php echo $customername;?>" readonly></td>
            </tr>
            <tr>
                <td><label for="bookingDateTime" style="color: white">Booking Date & Time:</label></td>
                <td><input type="text" id="user-input" name="booking-datetime" value="<?php echo $datetime?>" readonly></td>
            </tr>
        </table>
        <table class="center" style="margin-top: 20px;">
            <tr>
                <td colspan="2"><input type="button" value="Cancel" onclick="window.open('managebookingservices.php','_self')">
                <td colspan="2"><input type="submit" name="Submit" value="Decline"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['Submit'])){
            $query = "DELETE FROM appointment WHERE appointment_id = '$id'";
            $result = mysqli_query($connection,$query);
            if($result){
                echo "<script>alert('Delete appointment')</script>";
                echo "<script>window.open('managebookingservices.php','_self')</script>";
            }
        }
    ?>
</body>
</html>