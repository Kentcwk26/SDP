<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit medicine</title>
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
      padding: 10px;
      border-collapse: collapse;
      border: 1px solid black;
      width: 130px;
      text-align: left;
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
        font-weight: bold;
    }
    form {
      margin: 0 auto;
      text-align: center;
    }
</style>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <br>
    <b><h1 style="text-align:center; padding-bottom: 10px;"><u>Edit Medicine</u></h1></b>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM medicine where medicine_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['medicine_id'];
            $name = $row['medicine_name'];
            $stock = $row['medicine_stock'];
            $price = $row['medicine_price'];
        }
    ?>
    <form action="#" method="post">
        <table class="center" style="padding-top: 20px">
            <tr>
                <td style="font-weight: bold; border: none">Medicine ID</td>
                <td style="border: none;"><input type="text" name="medicineid" id="user-input" value="<?php echo $id; ?>" readonly /></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none">Medicine</td>
                <td style="border: none;"><input type="text" name="medicine" id="user-input" value="<?php echo $name; ?>" /></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none">Medicine Stock</td>
                <td style="border: none;"><input type="number" name="stock" id="user-input" value="<?php echo $stock; ?>" /></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none">Medicine Price (RM)</td>
                <td style="border: none;"><input type="text" name="price" id="user-input" value="<?php echo $price; ?>" /></td>
            </tr>
        </table>
        <table class="center" style="padding-top: 10px" >
            <tr>
                <td style="border: none;"><input type="button" value="Cancel" onclick="window.open('WHmanagemedicine.php','_self')">
                <td style="border: none;"><input type="reset" name="reset" value="Reset"></td>
                <td style="border: none;"><input type="submit" name="submit" value="Complete"></td>
            </tr>
        </table>
        <?php
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if(isset($_POST['submit'])){
                if (empty($_POST["medicine"]) or empty($_POST["stock"]) or empty($_POST["price"] )) {
                    echo "<script>alert('All the medicine details are required')</script>";
                } else {
                    $name = test_input($_POST["medicine"]);
                    $stock = test_input($_POST["stock"]);
                    $price = test_input($_POST["price"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                        echo "<script>alert('Wrong input either in the name section!')</script>";
                    } else if (((!preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $price))||($price < 0))){
                        echo "<script>alert('Price must be in postive, integer format and please set the price like 0.00!')</script>";
                    } else {
                        $medicineid = $id;
                        $medicine = $_POST['medicine'];
                        $stock = $_POST['stock'];
                        $price = $_POST['price'];
                        $sql= "UPDATE `medicine` SET `medicine_name`='$medicine',`medicine_stock`='$stock',`medicine_price`='$price' WHERE `medicine_id`='$medicineid'";
                        $result2 = mysqli_query($connection,$sql);
                        if($result2){
                            ?>
                            <script>
                                window.location.href = "WHmanagemedicine.php";
                                alert("Edit medicine success!");
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
    </form>
</body>
</html>