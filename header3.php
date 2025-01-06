<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Header</title>
</head>
<style>
    #header{
        background-color: #D9BB97;
        width: 100%;
        height: 190px;
        padding-bottom: 20px;
    }
    .navigation{
        width: 1500px;
        padding: 20px 2px;
        text-align: center;
    }
    a, a:visited{
        text-decoration: none;
        color: black;
        padding: 140px;
        font-size: 18px;
    }
    a:hover{
        text-decoration: underline;
        font-weight: bold;
        font-size: 18px;
    }
</style>
<body>
    <div style="clear:both"></div>
    <div id="header">
        <a href="mainindex.php" style="float: left; padding: 2px 20px;"><img src="png\Logo4.png"></a>
        <h1 style="color: black; text-align: center; padding-right: 236px; padding-top: 80px;">Pet Paradise</h1>
    </div>
    <nav class="navigation">
        <a href="aboutus.php">About Us</a>
        <a href="service.php">Services</a>
        <a href="privacynote.php">Privacy Notes</a>
        <a href="login.php">Login</a>
    </nav>
    <div style="clear:both"></div>
</body>
</html>