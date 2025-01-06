<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Index</title>
    <link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    #content{
        float: left;
        overflow: hidden;
        text-align: left;
        padding-top: 20px;
        padding-left: 20px;
        width: 450px;
        height: 300px;
    }
    #slider{
        float: right;
        width: 900px;
        height: 600px;
        margin-top: 20px;
        margin-right: 10px;
    }
    #search{
        float: right;
        width: 1480px;
        height: 60px;
        margin-top: 20px;
        margin-right: 10px;
    }
    .box{
        position: relative;
        background-color: black;
        width: 380px;
        height: 80px;
        color: white;
        padding: 140px 80px;
        font-size: 25px;
        font-weight: bold;
        text-align: center;
    }
    input[type=button]{
        width: 140px;
        height: 40px;
        margin-left: 4px;
        padding: 10px;
        text-align: center; 
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
    }
    input[type=button]:active, button:active {
        box-shadow: 0 5px black;
        transform: translateY(2px);
    }
    .text {
        color: black;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .box:hover .overlay {
        transform: scale(1);
    }
    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #B2BD8C;
        overflow: hidden;
        width: 100%;
        height: 100%;
        transform: scale(0);
        transition: .3s ease;
        opacity: 0.9;
    }
</style>
<body style="background-color: #fae094;">
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>
    <?php
        include "header1.php";
    ?>
    <div id="nav">
        <?php include('menu.php') ?>
    </div>
    <div id="content">
        <h2 style="color:green; font-size: 26px;">Who are we and What we are doing?</h2>
        <h3 style="font-size: 20px; text-align: left; width: 400px; height: 80px;">We are an organization who have provide many kinds of services such as treatments, pet grooming, etc.....</h3>
        <input type="button" value="Read More...." onclick="window.open('about.php','_SELF')">
    </div>
    <div id="slider"><img src="png/pets-3715733_1920-1024x682.jpg" style="width: 900px; height: 600px;"></div>
    <div style="clear:both;"></div>
    <div id="search" style="padding-bottom: 40px;">
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search" style="width: 1300px; height: 60px; border-radius: 100px; padding-left: 20px; margin-left: 20px; margin-top: 5px; font-size: 20px;">
            <input type="submit" name="submit" value="Search" style="width: 100px; height: 50px; border-radius: 100px; margin-left: 20px; margin-top: 5px; font-size: 20px;">
        </form>
    </div>
    <div style="display:flex; justify-content: center; width: 1500px; height: 400px;">
        <div class="box" style="background-image: url('img/groom.jpg'); background-size: cover; margin: 20px; cursor: pointer;">
            <div class="overlay">
                <div class="text">Pet Grooming</div>
            </div>
        </div>
        <div class="box" style="background-image: url('img/vet.jpg'); background-size: cover; margin: 20px; cursor: pointer;">
            <div class="overlay">
                <div class="text">Pet Medical Services</div>
            </div>
        </div>
    </div>
    <div style="display:flex; justify-content: center; width: 1500px; height: 400px;">
        <div class="box" style="background-image: url('img/board.jpg'); background-size: cover; margin: 20px; cursor: pointer;">
            <div class="overlay">
                <div class="text">Pet Sitting</div>
            </div>
        </div>
        <div class="box" style="background-image: url('img/IMG_5457.jpg'); background-size: cover; margin: 20px; cursor: pointer;">
            <div class="overlay">
                <div class="text">Overnight Pet Care (1 day)</div>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
    <?php
        include "footer1.php";
    ?>
</body>
</html>