<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
    }
    td{
        width: 150px;
        padding-left: 5px;
    }
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 20px;
    }
    .container{
        margin-left: auto;
        margin-right: auto;
    }
    #user-input{
        height: 40px;
        width: 600px;
        padding-left: 10px;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM product where product_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['product_id'];
            $name = $row['product_name'];
            $quantity = $row['product_quantity'];
            $price = $row['product_price'];
            $desc = $row['product_desc'];
        }
    ?>
    <br><b><h1 style="text-align:center"><u>View Product</u></h1></b><br>
    <table class="container">
        <tr>
            <td>Product ID</td>
            <td><input type="text" id="user-input" name="product-id" value="<?php echo $id;?>" readonly></td>
        </tr>
        <tr>
            <td>Product Name</td>
            <td><input type="text" id="user-input" name="product-name" value="<?php echo $name;?>" readonly></td>
        </tr>
        <tr>
            <td>Product Quantity</td>
            <td><input type="text" id="user-input" name="product-quantity" value="<?php echo $quantity;?>" readonly></td>
        </tr>
        <tr>
            <td>Product Price</td>
            <td><input type="text" id="user-input" name="product-price" value="<?php echo $price;?>" readonly></td>
        </tr>
        <tr>
            <td>Product Description</td>
            <td><input type="text" id="user-input" name="product-desc" value="<?php echo $desc;?>" readonly></td>
        </tr>
    </table>
    <div class="center" style="margin-top: 20px;">
        <input type="button" value="Back" id="my-button" style="font-weight: bold" onclick="window.open('manageproduct.php','_self')">
    </div>
</body>
</html>