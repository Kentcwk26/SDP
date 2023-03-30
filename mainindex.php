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
    body{
        background-color: #fae094;
    }
    .box{
        float: left;
        border: 1px solid black;
        text-align: center;
        font-size: 18px;
        padding: 12px 20px;
        margin: 5px;
        text-decoration: none;
        color: black;
        font-weight: bold;
        list-style: none;
    }
    .frame{
        height:50px;
        display: grid;
        padding: 4px 10px 16px 18px;
    }
    #main{
        height: 200px;
    }
    #bar{
        align: center;
        height: 80px;
    }
</style>
<body>
    <?php
        include "dbcon.php";
    ?>
    <div id="main"><a href="mainindex.php"><img src="Logo4.png" height=auto width=auto></a></div>
    <div id="bar">
        <center>
        <a href="mainindex.php" class="box">About Us</a>
        <a href="mainindex.php" class="box">Help & Support</a>
        <a href="mainindex.php" class="box">Services</a>
        <a href="mainindex.php" class="box">Privacy Notes</a>
        <a href="mainindex.php" class="box">Login</a>
        </center>
    </div>
    <div id="back">
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>