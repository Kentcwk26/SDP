<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Paradise Pet Care System</title>
  <link rel="stylesheet" type="text/css" href="css/style5.css">
  <link rel="icon" type="image/x-icon" href="png/Icon.png" >
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
  }
  .button2{
    width: 200px;
    height: 40px;
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

<body>

<!-- Intro -->
<?php 
  include ('dbcon.php');
  include ('customer_header.php');
?>

<!-- navbar element -->
<div id="nav">
  <?php include('customer_menu.php') ?>
</div>

<div id="search">
    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search" style="width: 1250px; height: 40px; border-radius: 100px; padding-left: 20px; margin-left: 40px; margin-top: 20px; font-size: 20px;">
        <input type="submit" name="submit" value="Search" style="width: 100px; height: 50px; border-radius: 100px; margin-left: 20px; margin-top: 20px; font-size: 20px; cursor: pointer;">
    </form>
</div>

<div style="height: 100%; width: 100%; display: flex; justify-content: center;">
  <!-- Product -->
  <div id="product">
    <?php
      $query = "SELECT * FROM medicine";
      $result = mysqli_query($connection,$query);
      if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
          ?>
          <div style="width: 400px; height: 460px; float: left; margin: 30px; padding-top: 20px; margin-top: 20px; background-color: #B2BD8C; justify-content: center;">
              <img src="img/medicine.png" alt="about-1" style="width: 340px; height: 300px; background-color: white; margin-top: 10px; padding: 4px; margin-left: 28px; margin-top: 10px;">
              <div style="text-align: center; margin-top: 10px; font-weight: bold;"><?php echo $row['medicine_name']; ?>, RM<?php echo $row['medicine_price']; ?></div>
              <a href="purchasemedicine.php?id=<?php echo $row["medicine_id"]; ?>"><button class="button1">View Info / Make Purchase</button></a>
          </div>
        <?php
        }
      }
      ?>
  </div>
</div>

<div style="clear: both; margin-bottom: 60px; margin-left: 565px;">
    <a href="customer_product.php"><button class="button2">Back</button></a>
</div>

<!-- footer element -->
<footer><?php include('footer.php') ?></footer>
</body>
</html>
