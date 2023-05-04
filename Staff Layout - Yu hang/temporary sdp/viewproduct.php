<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
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

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center"><u>View Product</u></p></b>
    <br>
    <center><img src="dogfood.jpg" height=150px width=auto>
    <u> Product(Product ID):</u>
    <p>Price:</p>
    <p>Quantity:</p>
    Description:
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><div id="my-button"><a href="WHmanageproducts.php">Back</a></div>  <div id="my-button"><a href="editproduct.php">Edit</a></div></center>
</body>
</html>