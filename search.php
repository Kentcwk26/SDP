<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
    <link rel="stylesheet" type="text/css" href="css/style5.css">
    <title>Search</title>
</head>
<style>
  input[type=button]:hover{
    font-weight: bold;
  }
  input[type=button]:active, input[type=submit]:active{
    box-shadow: 0 5px black;
    transform: translateY(2px);
  }
  #search{
    float: right;
    width: 1480px;
    height: 60px;
    margin-top: 20px;
    margin-right: 10px;
  }
  .button1{
    width: 200px;
    height: 30px;
    margin: 20px;
    border-radius: 50px;
    margin-left: 90px;
  }
  .button2{
    width: 200px;
    height: 40px;
    margin: 20px;
    border-radius: 50px;
    margin-left: 90px;
  }
  .button1:hover, .button2:hover{
    background-color: green;
    color: white;
    font-weight:bold;
    cursor: pointer;
  }
</style>
<body style="background-color: #fae094;">
    <?php
        include "dbcon.php";
        include "header1.php";
    ?>
    <script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>
    <center><div id="search" style="margin-top: 20px;">
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search" style="width: 1000px; height: 40px; margin-left: 10px; padding-left: 20px; font-size: 18px; border-radius: 50px;">
            <input type="submit" name="submit" value="Search" style="width: 150px; height: 40px; margin-left: 4px; padding: 10px; text-align: center; font-weight: bold; border-radius: 50px; cursor: pointer;">
        </form>
    </div></center>
    <div style="margin-top: 20px;">
    <?php
        if(isset($_POST['submit'])){
            $search = $_POST['search'];
            if(empty($search)){
                echo "<script>alert('Empty input!')</script>";
                echo "<script>window.history.back()</script>";
            } else {
                $query = "SELECT * FROM product WHERE product_name LIKE '%$search%'";
                $query1 = "SELECT * FROM medicine WHERE medicine_name LIKE '%$search%'";
                $results = mysqli_query($connection,$query);
                $results1 = mysqli_query($connection,$query1);
                if ((mysqli_num_rows($results) > 0) or (mysqli_num_rows($results1) > 0)) {
                    if (mysqli_num_rows($results) > 0){
                        while ($row = mysqli_fetch_assoc($results)){
                            ?>
                            <div style="width: 400px; height: 460px; float: left; margin: 30px; padding-top: 20px; margin-top: 20px; background-color: #B2BD8C; justify-content: center;">
                                <img src="img/products.jpg" alt="about-1" style="width: 340px; height: 300px; background-color: white; padding: 4px; margin-left: 28px; margin-top: 20px;">
                                <div style="text-align: center; margin-top: 10px; font-weight: bold;"><?php echo $row['product_name']; ?>, RM<?php echo $row['product_price']; ?></div>
                                <a href="purchaseproduct.php?id=<?php echo $row["product_id"]; ?>"><button class="button1">View Info / Make Purchase</button></a>
                            </div>
                        <?php
                        }
                    }
                    if (mysqli_num_rows($results1) > 0){
                        while ($row1 = mysqli_fetch_assoc($results1)){
                        ?>
                        <div style="width: 400px; height: 460px; float: left; margin: 30px; padding-top: 20px; margin-top: 20px; background-color: #B2BD8C; justify-content: center;">
                            <img src="img/medicine.png" alt="about-1" style="width: 340px; height: 300px; background-color: white; padding: 4px; margin-left: 28px; margin-top: 20px;">
                            <div style="text-align: center; margin-top: 10px; font-weight: bold;"><?php echo $row1['medicine_name']; ?>, RM<?php echo $row1['medicine_price']; ?></div>
                            <a href="purchasemedicine.php?id=<?php echo $row1["medicine_id"]; ?>"><button class="button1">View Info / Make Purchase</button></a>
                        </div>
                        <?php
                        }
                    }
                } else {
                    echo "<h1 style='text-align: center; height: 280px;'>No results found</h1>";
                }
            }
        }
    ?>
    </div>
    <div style="clear: both; margin-bottom: 40px; margin-left: 550px;">
        <a href="customer_product.php"><button class="button2">Back</button></a>
    </div>
    <div>
        <?php
            include "footer1.php";
        ?>
    </div>
</body>
</html>