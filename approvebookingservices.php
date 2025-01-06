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
    select{
        width: 619px; 
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
            $customer = $row['customer_id'];
            $pet = $row['pet_id'];
            $service = $row['appointment_service'];
            $datetime = $row['appointment_datetime'];
        }
    ?>
    <form action="#" method="post">
        <table class="center" style="padding-top: 20px">
            <tr>
                <td><label for="BookingService" style="color: white">Booking Service:</label></td>
                <td><input type="text" id="user-input" name="booking-service" value="<?php echo $service;?>" readonly></td>
            </tr>
            <tr>
                <td><label for="CustomerName" style="color: white">Customer:</label></td>
                <td><input type="text" id="user-input" name="customer" value="<?php echo $customer;?>" readonly></td>
            </tr>
            <tr>
                <td><label for="BookingService" style="color: white">Pet:</label></td>
                <td><input type="text" id="user-input" name="pet" value="<?php echo $pet;?>" readonly></td>
            </tr>
            <tr>
                <td><label for="bookingDateTime" style="color: white">Booking Date & Time:</label></td>
                <td><input type="text" id="user-input" name="booking-datetime" value="<?php echo $datetime?>" readonly></td>
            </tr>
            <tr>
                <td><label for="Venue" style="color: white">Venue:</label></td>
                <td><label for="Venue"></label>
                <select name="Venue" id="Venue">
                    <option value="None">- Please Select Room -</option>
                    <option value="Room 1">Room 1 (Pet Medicial)</option>
                    <option value="Room 2">Room 2 (Pet Medicial)</option>
                    <option value="Room 3">Room 3 (Pet Medicial)</option>
                    <option value="Room 4">Room 4 (Pet Medicial)</option>
                    <option value="Room 5">Room 5 (Pet Grooming)</option>
                    <option value="Room 6">Room 6 (Pet Grooming)</option>
                    <option value="Room 7">Room 7 (Overnight Stay)</option>
                    <option value="Room 8">Room 8 (Overnight Stay)</option>
                    <option value="Room 9">Room 9 (Overnight Stay)</option>
                    <option value="Room 10">Room 10 (Overnight Stay)</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="Staff" style="color: white">Staff:</label></td>
                <td>
                    <input type="radio" name="Staff" id="Staff" value="None">
                    <label for="Staff">-</label>                 
                    <?php
                    $query1 = "SELECT staff_id, staff_username FROM staff";
                    $result1 = mysqli_query($connection,$query1);
                    while ($row = mysqli_fetch_assoc($result1)){
                        $staff_id= $row['staff_id'];
                        $staff_name= $row['staff_username'];
                    ?>
                    <input type="radio" name="Staff" id="<?php echo $staff_id; ?>" value="<?php echo $staff_id; ?>">
                    <label style="font-weight: bold" for="<?php echo $staff_id; ?>"><?php echo $staff_id," (",$staff_name,")"; ?></label>
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="Vet" style="color: white">Vet:</label></td>
                <td>
                    <input type="radio" name="Vet" id="Vet" value="None">
                    <label for="Vet">-</label>           
                    <?php
                    $query2 = "SELECT vet_id, vet_name FROM vet";
                    $result2 = mysqli_query($connection,$query2);
                    while ($row = mysqli_fetch_assoc($result2)){
                        $vet_id= $row['vet_id'];
                        $vet_name= $row['vet_name'];
                    ?>
                    <input type="radio" name="Vet" id="<?php echo $vet_id; ?>" value="<?php echo $vet_id; ?>">
                    <label style="font-weight: bold" for="<?php echo $vet_id; ?>"><?php echo $vet_id," (",$vet_name,")"; ?></label>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        </table>
        <table class="center" style="margin-top: 20px;">
            <tr>
                <td colspan="2"><input type="button" value="Cancel" onclick="window.open('managebookingservices.php','_self')">
                <td colspan="2"><input type="reset" name="reset" value="Reset"></td>
                <td colspan="2"><input type="submit" name="Submit" value="Complete"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['Submit'])){
            $prefix = "B";
            $last_id = 0;
            $sql = "SELECT booking_id FROM booking ORDER BY booking_id DESC LIMIT 1";
            $result = mysqli_query($connection,$sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $last_id = substr($row["booking_id"], 1);
            }
            $new_id = $prefix . ($last_id + 1);
            $booking_id = $new_id;
            $booking_service = $_POST['booking-service'];
            $customer = $_POST['customer'];
            $booking_datetime = $_POST['booking-datetime'];
            $venue = $_POST['Venue'];
            $staff = $_POST['Staff'];
            $vet = $_POST['Vet'];
            $pet = $_POST['pet'];
            $query = "INSERT INTO booking (booking_id, booking_service, customer_id, staff_id, vet_id, pet_id, booking_datetime, venue) VALUES ('$booking_id', '$booking_service', '$customer', '$staff', '$vet', '$pet', '$booking_datetime','$venue')";
            $result = mysqli_query($connection,$query);
            if($result){
                $query = "DELETE FROM appointment WHERE appointment_id = '$id'";
                $result = mysqli_query($connection,$query);
                $prefix = "D";
                $last_id = 0;
                $sql = "SELECT invoice_id FROM invoice ORDER BY invoice_id DESC LIMIT 1";
                $result = mysqli_query($connection,$sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $last_id = substr($row["invoice_id"], 1);
                }
                $new_id = $prefix . ($last_id + 1);
                $invoice_id = $new_id;
                $query2 = "INSERT INTO `invoice`(`invoice_id`, `customer_id`, `product_id`, `booking_id`) VALUES ('$invoice_id','$customer','','$booking_id')";
                $result2 = mysqli_query($connection, $query2);
                if($result and $result2){
                    echo "<script>alert('booking Completed!')</script>";
                    echo "<script>window.open('managebookingservices.php','_self')</script>";
                }
            }
        }
    ?>
</body>
</html>