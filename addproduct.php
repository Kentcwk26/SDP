<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #block{
        height: 70px;
        width: 650px;
        text-align: right;
        display: block;
        position: flex;
        float: left; 
        background-color: #DABA9E;
    }
    #loginblock{
        height:70px;
        width: 600px;
        text-align:right;
        display:block;
        position:flex;
        float: left;
        background-color: #DABA9E;
    }
    #my-button{ 
        background-color: #f7d0af;
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
    td{
        width: 125px;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    textarea {
        resize: none;
    }
    input[type=submit],input[type=reset],input[type=button]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
        box-shadow: 0 5px #C69468;
        transform: translateY(2px);
    }
    input[type=submit]:hover{
        background-color: green;
        border-color: green;
        color: white;
        font-weight:bold;
    }
    input[type=reset]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
    }
    input[type=button]:hover{
        background-color: red;
        font-weight:bold;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <br><b><h1 style="text-align:center; padding-bottom: 10px;"><u>Add Product</u></h1></b>
    <form action="#" method="post">
    <table class="center">
        <tr>
            <td><label for="user-input" style="color: white">Product ID:</label></td>
            <td><?php
            $prefix = "P";
            $last_id = 0;
            $sql = "SELECT product_id FROM product ORDER BY product_id DESC LIMIT 1";
            $result = mysqli_query($connection,$sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $last_id = substr($row["product_id"], 1);
            }
            $new_id = $prefix . ($last_id + 1);
            ?>
            <input type="text" id="user-input" name="productid" value="<?php echo $new_id; ?>" style="padding-left: 5px" readonly>
            </td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Product:</label></td>
            <td><input type="text" id="user-input" name="product" style="padding-left: 5px; font-family: Times New Roman"></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Quantity:</label></td>
            <td><input type="number" id="user-input" name="quantity" placeholder="Stock amount cannot more exceed than 1000" min = "0" max = "1000" style="padding-left: 5px; font-size: 16px; font-family: Times New Roman; height: 40px;"></td>
        </tr>
        <tr>
            <td><label for="user-input" style="color: white">Price (RM):</label></td>
            <td><input type="text" id="user-input" name="price" placeholder="Please set the price like 0.00" style="padding-left: 5px; font-family: Times New Roman"></td>
        </tr>
        <tr>
            <td><label for="user-textarea" style="color: white">Description:</label></td>
            <td><textarea id="user-textarea" name="description" style="padding-left: 5px; font-family: Times New Roman"></textarea></td>
        </tr>
    </table>
    <table class="center" style="margin-top: 20px;">
        <tr>
            <td colspan="2"><input type="button" value="Cancel" onclick="window.open('manageproduct.php','_self')">
            <td colspan="2"><input type="reset" name="reset" value="Reset"></td>
            <td colspan="2"><input type="submit" name="submit" value="Complete"></td>
        </tr>
    </table>
    </form>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(isset($_POST['submit'])){
            if (empty($_POST["product"]) or empty($_POST["price"]) or empty($_POST["description"] )) {
                echo "<script>alert('All the product details are required')</script>";
            } else {
                $name = test_input($_POST["product"]);
                $desc = test_input($_POST["description"]);
                $price = test_input($_POST["price"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)or(!preg_match("/^[a-zA-Z-' ]*$/",$desc))){
                    echo "<script>alert('Wrong input either in the name or price section!')</script>";
                } else if (((!preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $price))||($price < 0))){
                    echo "<script>alert('Price must be in postive, integer format and please set the price like 0.00!')</script>";
                } else {
                    $productid = $_POST['productid'];
                    $product = $_POST['product'];
                    $quantity = $_POST['quantity'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $sql = "INSERT INTO `product`(`product_id`, `product_name`, `product_desc`, `product_quantity`, `product_price`) VALUES ('$productid', '$product', '$description', '$quantity', '$price')";
                    $result = mysqli_query($connection,$sql);
                    if($result){
                        ?>
                        <script>
                            window.location.href = "manageproduct.php";
                            alert("Adding product");
                        </script>
                        <?php
                    }
                    else{
                        ?>
                        <script>
                            alert("Error, please try again");
                        </script>
                    <?php
                    }
                }
            }
        }
    ?>
</body>
</html>