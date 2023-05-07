<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Booking Services</title>
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
    #loginblock {
        height:70px;width: 600px;
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
        width: 650px;
    }
    select, option{
        height: 40px;
        width: 440px;
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
    ?>
    <br><b><h1 style="text-align:center; padding-bottom: 10px;"><u>Modify Booking Services</u></h1></b>
    <?php
        $query = "SELECT * FROM appointment";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $AppointmentID = $row['appointment_id'];
            $BookingService = $row['booking_service'];
            $BookingDate = $row['appointment_date'];
            $BookingTime = $row['appointment_time'];
            $CustomerName = $row['cus_name'];
        }
    ?>
    <form action="#" method="post">
        <table class="center">
            <tr>
                <td><label for="user-input" style="color: white">Appointment ID:</label></td>
                <td><input type="text" name="appointment-id" value="<?php echo $AppointmentID; ?>" readonly></td>
            </tr>
        </table>
        <table class="center" style="margin-top: 10px">
            <tr>
                <td><label for="BookingService" style="color: white">Booking Service:</label></td>
                <td>
                    <input list="BookingService" style="width:652px; height: 40px; font-family: Times New Roman; font-size: 14px;">
                    <datalist id="BookingService" name="BookingService">
                        <option value="Booking Service 1">Pet Grooming</option>
                        <option value="Booking Service 2">Pet Medical Services</option>
                        <option value="Booking Service 3">Pet Sitting</option>
                        <option value="Booking Service 4">Overnight Pet Care (1 day)</option>
                    </datalist>
                </td>
            </tr>
            <tr>
                <td><label for="user-input" style="color: white">Booking Date:</label></td>
                <td><input type="date" name="booking-date" style="width:652px; height: 40px; padding-left: 5px; font-family: Times New Roman"></td>
            </tr>
            <tr>
                <td><label for="user-input" style="color: white">Booking Time:</label></td>
                <td><input type="time" name="booking-time" style="width:652px; height: 40px; padding-left: 5px; font-family: Times New Roman"></td>
            </tr>
            <tr>
                <td><label for="user-input" style="color: white">Customer Name:</label></td>
                <td><input type="text" id="user-input" name="price" style="padding-left: 5px; font-family: Times New Roman"></td>
            </tr>
        </table>
        <table class="center" style="margin-top: 20px;">
            <tr>
                <td colspan="2"><input type="button" value="Cancel" onclick="window.open('managebookingservice.php','_self')">
                <td colspan="2"><input type="reset" name="reset" value="Reset"></td>
                <td colspan="2"><input type="submit" name="Submit2" value="Complete"></td>
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
            if(isset($_POST['Submit2'])){
                if (empty($_POST["customer-name"]) or empty($_POST["booking-time"]) or empty($_POST["booking-date"])) {
                    echo "<script>alert('All the details are required in order to make the bookings')</script>";
                } else {
                    $BookingService = $_POST['BookingService'];
                    $BookingDate = test_input($_POST['booking-date']);
                    $BookingTime = test_input($_POST['booking-time']);
                    $CustomerName = test_input($_POST['customer-name']);
                    $sql = "UPDATE appointment SET cus_name = '$CustomerName', booking_service = '$BookingService', appointment_date = '$BookingDate', appointment_time = '$BookingTime' WHERE appointment_id = '$AppointmentID')";
                    if(mysqli_query($connection, $sql)){
                        echo "<script>alert('Booking Service updated successfully!')</script>";
                        echo "<script>window.open('managebookingservices.php','_self')</script>";
                    }
                    else{
                        echo "<script>alert('Failed to update Booking Service!')</script>";
                    }
                }
            }
        ?>
    </form>
</body>
</html>