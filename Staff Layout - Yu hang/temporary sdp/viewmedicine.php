<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Medicine</title>
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
        width: 500px;

    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center;"><u>View Medicine</u></p></b>
    <center><img src="medicine_icon.jpg" height=120px width=auto></center>
    <br>
    <center>
    <label for="user-input" style="color: white">Medicine ID:</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Medicine :</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Stock Amount:</label><input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Price (RM):</label> <input type="text" id="user-input" name="user-input">
    </center>
    <br>
    <br>
    <center><div id="my-button"><a href="WHmanagemedicine.php">Back</a></div>  <div id="my-button"><a href="editmedicine.php">Edit</a></div></center>
</body>
</html>