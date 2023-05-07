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
    input[type=button]:active, input[type=reset]:active, input[type=submit]:active{
      box-shadow: 0 5px;
      transform: translateY(2px);
    }
    #user-input{
        height: 40px;
        width: 600px;
    }
    td{
        width: 125px;
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
    <br>
    <b><h1 style="text-align:center; padding-bottom: 10px;"><u>Add Booking Services</u></h1></b>
    <form action="#" method="post">
        <table class="center">
            <tr>
                <td><label for="BookingService" style="color: white">Booking Service:</label></td>
                <td>
                    <input list="BookingService" name="BookingService" style="width:600px; height: 40px; font-family: Times New Roman; font-size: 14px; padding-left: 5px; padding-right: 10px;">
                    <datalist id="BookingService">
                        <option value="Pet Grooming"></option>
                        <option value="Pet Medical Services"></option>
                        <option value="Pet Sitting"></option>
                        <option value="Overnight Pet Care (1 day)"></option>
                    </datalist>
                </td>
            </tr>
            <tr>
                <td><label for="user-input" style="color: white">Booking Time :</label></td>
                <td><input type="datetime-local" id="user-input" name="booking-datetime"></td>
            </tr>
            <tr>
                <td><label for="user-input" style="color: white">Customer Name:</label></td>
                <td><input type="text" id="user-input" name="customer-name"></td>
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
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(isset($_POST['Submit'])){
            if (empty($_POST["customer-name"]) or empty($_POST["booking-datetime"]) or empty($_POST["BookingService"])) {
                echo "<script>alert('All the details are required in order to make the bookings')</script>";
            } else {
                $name = test_input($_POST["customer-name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    echo "<script>alert('Wrong input in the name section!')</script>";
                } else {
                    $request_datetime = $_POST['booking-datetime'];
                    $query = "SELECT booking_service, appointment_datetime FROM appointment WHERE booking_service = 'Pet Medical Services' OR booking_service = 'Pet Grooming' AND appointment_datetime= '$request_datetime'";
                    $sql1 = "SELECT `booking_datetime`,`booking_service` FROM `booking`";
                    $sql2 = "SELECT `customer_name` FROM `customer` where customer_name ='$name'";
                    $result = $connection->query($query);
                    $result1 = $connection->query($sql1);
                    $result2 = $connection->query($sql2);
                    if ($result->num_rows > 0) {
                        echo "<script>alert('The booking service is not available at the moment!')</script>";
                    } else if ($result1->num_rows > 0) {
                        echo "<script>alert('The booking service is not available at the moment!')</script>";
                    } else if ($result2->num_rows == 0) {
                        echo "<script>alert('The customer name is not available at the moment!')</script>";
                    } else {
                        $prefix = "A";
                        $last_id = 0;
                        $sql4 = "SELECT appointment_id FROM appointment ORDER BY appointment_id DESC LIMIT 1";
                        $result = mysqli_query($connection,$sql4);
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $last_id = substr($row["appointment_id"], 1);
                        }
                        $new_id = $prefix . ($last_id + 1);
                        $AppointmentID = $new_id;
                        $BookingService = $_POST['BookingService'];
                        $Booking = $_POST['booking-datetime'];
                        $CustomerName = $_POST['customer-name'];
                        $booking_datetime = $_POST["booking_datetime"];
                        $booking_service = $_POST["booking_service"];
                        $sql5 = "INSERT INTO appointment (`customer_name`, `appointment_id`, `appointment_datetime`, `booking_service`) VALUES ('$CustomerName', '$AppointmentID', '$Booking', '$BookingService')";
                        if(mysqli_query($connection, $sql5)){
                            echo "<script>alert('Booking Service added successfully!')</script>";
                            echo "<script>window.open('managebookingservices.php','_self')</script>";
                        } else {
                            echo "<script>alert('Booking Service failed to add!')</script>";
                        }
                    }
                }
            }
        }
    ?>
</body>
</html>