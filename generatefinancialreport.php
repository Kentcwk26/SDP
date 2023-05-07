<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Financial Report</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
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
        height:320px;
        width: 700px;
    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><h1 style="text-align:center"><u>Generate Financial Report</u></h1></b>
    <br>
    <br>
    <center><textarea id="user-input" name="user-input"></textarea></center>
    <br>
    <center><div id="my-button"><a href="staffmain.php">Back</a></div>  <div id="my-button"><a href="#">Generate</a></div></center>
</body>
</html>