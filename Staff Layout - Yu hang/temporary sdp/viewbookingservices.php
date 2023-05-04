<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booking Services</title>
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

    #word{
        margin-left:550px;
    }

    #contentblock{height:200px;width: 620px;
        display:block;
    float: left;
    background-color: white;

    }
   
    #contentblock1{height:200px;width: 620px;
        display:block;
    float: right;
    background-color: white;

    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center"><u>View Booking Services</u></p></b>
    <div id="word" style="color:white">BookingID: B2</div><div id="word" style="color:white">BookingDate: 15/03/2023 (Wednesday)</div><div id="word" style="color:white">Booking Time:11am - 1pm</div><div id="word" style="color:white">Booking Service: Pet Medical</div>
    <br>
    <div id="contentblock"></div>  <div id="contentblock1"></div>  
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><p style="color:white">Venue: Room-02</p>
    <p style="color:white">Person In Charge: Dr.ABC, S01</p></center>
    <br>
    <center><div id="my-button"><a href="managebookingservice.php">Back</a></div></center>
</body>
</html>