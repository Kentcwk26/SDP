<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Pet Report</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
</head>
<style>
    body{
        background-color: #ffffa1;
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
        height:320px;
        width: 700px;
    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center"><u>Generate Pet Report</u></p></b>
    <br>
    <center><label for="BookingID">Booking ID:</label>
        <select style="width:650px; height: 40px;">
		<option value="BookingID">B1</option>
		<option value="BookingID">B2</option>
		<option value="BookingID">B 3</option>
	</select></center>
    <center><p>Comments:</p></center>
    <center><textarea id="user-input" name="user-input"></textarea></center>
    <br>
    <center><div id="my-button"><a href="petreport.php">Back</a></div>  <div id="my-button"><a href="#">Generate</a></div></center>
</body>
</html>