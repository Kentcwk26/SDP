<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Booking Services</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #block{height:70px;width: 650px;
        text-align:right;
    display:block;
    position:flex;
    float: left; 
    background-color: #DABA9E;

    }

    #loginblock{height:70px;width: 600px;
        text-align:right;
        display:block;
    position:flex;
    float: left;
    background-color: #DABA9E;

    }

  #my-button{ background-color: #f7d0af;
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

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center;"><u>Modify Booking Services</u></p></b>
    <br>
    <center><select style="width: 780px; height: 40px;">
		<option value="">-Please select the bookings that need to modify-</option>
		<option value="option1">Option 1</option>
		<option value="option2">Option 2</option>
		<option value="option3">Option 3</option>
	</select>
    <br>
    <br>
    <label for="BookingService" style="color: white">Booking Service:</label>
        <select style="width:650px; height: 40px;">
		<option value="BookingService1">Booking Service 01</option>
		<option value="BookingService2">Booking Service 02</option>
		<option value="BookingService3">Booking Service 03</option>
	</select>
    <br>
    <br>
    <label for="user-input" style="color: white">Booking Date :</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Booking Time :</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Customer Name :</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br> 
    <label for="user-input" style="color: white">Venue :</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Person In Charge:</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    </center>
    <center><div id="my-button"><a href="managebookingservice.php">Back</a></div>  <div id="my-button"><a href="#">Modify</a></div></center>
</body>
</html>