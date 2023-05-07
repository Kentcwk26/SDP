<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booking Services</title>
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
        include "dbcon.php";
        include "header1.php";
    ?>
    <br>
    <b><h1 style="text-align:center"><u>View Booking Services</u></h1></b>

    <center><div id="my-button"><a href="managebookingservice.php">Back</a></div></center>
</body>
</html>