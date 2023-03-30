<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Index</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
</head>
<style>
    #header{
        background-color: #D9BB97;
        width: 100%;
        height: 100%;
        padding-bottom: 5px;
    }
    .box{
        text-align: center;
        font-size: 25px;
        padding: 10px 60px;
        margin: 10px;
        color: black;
        font-weight: bold;
        list-style: none;
    }
    #bar{
        height: 50px;
        margin-top: 20px;
    }
    #content{
        float: left;
        text-align: left;
        padding-top: 20px;
        padding-left: 40px;
        width: 500px;
        height: 800px;
        margin-left: 30px;
    }
    #small-text{
        font-size: 18px;
        align: center;
        text-align: left;
        width: 300px;
        height: 80px;
    }
    #slider{
        float: right;
        width: 760px;
        height: 300px;
        margin-top: 20px;
        margin-right: 100px;
        color: grey;
        border: 4px solid gray;
    }
    .box:hover{
        color: grey;
        font-weight: bold;
    }
</style>
<body style="background-color: #fae094;">
    <?php
        include "dbcon.php";
    ?>
    <div id="header">
        <a href="mainindex.php"><img src="Logo4.png"></a>
        <h1 style="font-size: 40px; font-weight: bold;">Pet Paradise</h1>
        <div><h1>yyyy</h1></div>
    </div>
    <div style="clear:both;"></div>
    <div id="bar">
        <a href="mainindex.php" class="box">About Us</a>
        <a href="mainindex.php" class="box">Help & Support</a>
        <a href="mainindex.php" class="box">Services</a>
        <a href="mainindex.php" class="box">Privacy Notes</a>
        <a href="mainindex.php" class="box">Login / Register</a>
    </div>
    <div id="content">
        <h2 style="color:#7F9F6D">Who are we and What we are doing?</h2>
        <div id="small-text"><h3>We are an organization who have provide many kinds of services such as treatments, pet grooming, etc.....</h3></div>
    </div>
    <div id="slider"></div>
    <div style="clear:both;"></div>
    <div id="back">
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>