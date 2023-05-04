<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
        width: 700px;
    }

    #user-textarea{
        height:70px;
        width: 700px;
    }

</style>
<body>
    <div id="main"><div id="block"><a href="mainindex.php"><img src="png/Logo4.png" height=60px width=auto align=left class="animate-text"></a>
    <p>Pet Paradise</p></div></div>
    <div id="loginblock"><a href="mainindex.php" class="box">Login</a>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <b><p style="text-align:center;"><u>Add Product</u></p></b>
    <center><img src="dogfood.jpg" height=120px width=auto>
    <br>
    <br>
    <label for="user-input" style="color: white">Product :</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Quantity :</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-input" style="color: white">Price(RM):</label> <input type="text" id="user-input" name="user-input">
    <br>
    <br>
    <label for="user-textarea" style="color: white">Description:</label>
    <textarea id="user-textarea" name="user-textarea"></textarea>
    </center>
    <br>
    <center><div id="my-button"><a href="WHmanageproducts.php">Cancel</a></div>  <div id="my-button"><a href="#">Add</a></div></center>
</body>
</html>