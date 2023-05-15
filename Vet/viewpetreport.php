<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pet Report</title>
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

    form {
  display: center;
  align-items: lcenter;
}

input[type="text"] {
  padding: 10px 200px;
  border: none;
  border-radius: 5px;
  margin-right: 10px;
  font-size: 16px;
}

button[type="submit"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #f7d0af;
  color: black;
  font-size: 16px;
  cursor: pointer;
}

#contentblock{height:500px;width: 1100px;
    background-color: white;
    margin-left:70px;
    margin-right:30px;
    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center"><u>Generate Pet Report</u></p></b>
    <br>
    <center><form>
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </form></center>
    <center><p>Last Generate:</p></center>
    <div id="contentblock">
    <br>
    <p style="margin-left:50px">Pet Name:</p>
    <br>
    <p style="margin-left:50px">Owner's Name:</p>
    <br>
    <p style="margin-left:50px">Booking ID:</p>
    <br>
    <p style="margin-left:50px">Comments:</p></div>
    <br>
    <center><div id="my-button"><a href="petreport.php">Back</a></div></center>
</body>
</html>