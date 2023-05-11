<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Booking Services</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
      background-color: #C69468;
    }
    table {
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
    }
    #my-button{ 
      background-color: #f7d0af;
      padding: 10px 40px;
      display: inline-block;
      border-radius: 5px;
      margin-left: 70px;
      margin-right: 50px;
      cursor: pointer;
    }
    input[type=button]:active, input[type=submit]:active{
      box-shadow: 0 5px;
      transform: translateY(2px);
    }
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 20px;
    }
    .container{
        margin-left: auto;
        margin-right: auto;
    }
    input[type=button],input[type=submit]{
        font-weight: bold;
    }
    #user-input{
        height: 40px;
        width: 600px;
    }
</style>
<body>
    <?php
      include "dbcon.php";
      include "header2.php";
      $id = $_GET['id'];
      $query = "SELECT * FROM booking where booking_id = '$id'";
      $result = mysqli_query($connection,$query);
      while ($row = mysqli_fetch_assoc($result)){
          $id = $row['booking_id'];
          $service = $row['booking_service'];
          $customer = $row['customer_id'];
          $pet = $row['pet_id'];
          $staff = $row['staff_id'];
          $vet = $row['vet_id'];
          $datetime = $row['booking_datetime'];
          $venue = $row['venue'];
      }
    ?>
    <b><h1 style="text-align:center; padding: 15px 0;"><u>Remove Booking Services</u></h1></b>
    <form action="#" method="post">
        <table class="container">
        <?php
            $sql = "SELECT * FROM booking";
            $result = mysqli_query($connection,$sql);
        ?>
        <tr>
            <td><label for="BookingService" style="color: white">Booking ID:</label></td>
            <td><input type="text" id="user-input" name="booking-id" value="<?php echo $id;?>" readonly></td>
        </tr>
        <tr>
            <td><label for="BookingService" style="color: white">Booking Service:</label></td>
            <td><input type="text" id="user-input" name="booking-service" value="<?php echo $service;?>" readonly></td>
        </tr>
        <tr>
            <td><label for="CustomerName" style="color: white">Customer:</label></td>
            <td><input type="text" id="user-input" name="customer" value="<?php echo $customer;?>" readonly></td>
        </tr>
        <tr>
            <td><label for="CustomerName" style="color: white">Pet:</label></td>
            <td><input type="text" id="user-input" name="pet" value="<?php echo $pet;?>" readonly></td>
        </tr>
        <tr>
            <td><label for="CustomerName" style="color: white">Staff:</label></td>
            <td><input type="text" id="user-input" name="staff" value="<?php echo $staff;?>" readonly></td>
        </tr>
        <tr>
            <td><label for="CustomerName" style="color: white">Vet:</label></td>
            <td><input type="text" id="user-input" name="vet" value="<?php echo $vet;?>" readonly></td>
        </tr>
        <tr>
            <td><label for="bookingDateTime" style="color: white">Booking Date & Time:</label></td>
            <td><input type="text" id="user-input" name="booking-datetime" value="<?php echo $datetime?>" readonly></td>
        </tr>
        <tr>
            <td><label for="CustomerName" style="color: white">Venue:</label></td>
            <td><input type="text" id="user-input" name="venue" value="<?php echo $venue;?>" readonly></td>
        </tr>
    </table>
      <div class="center" style="margin-top: 20px; ">
        <input type="button" value="Back" id="my-button" onclick="window.open('bookingservices.php','_self')">
        <input type="submit" value="Delete" id="my-button" name="delete">
      </div>
      <br>
      </form>
      <?php
        if(isset($_POST['delete'])){
            $query1 = "DELETE FROM booking WHERE booking_id = '$id'";
            $result1 = mysqli_query($connection,$query1);
            if($result1){
                echo "<script>alert('Delete booking')</script>";
                echo "<script>window.open('bookingservices.php','_self')</script>";
            }
        }
    ?>
</body>
</html>