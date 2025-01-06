<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Paradise Pet Care System</title>
    <link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
    <style>
      
    #ch {
      width: 300px;
      margin: 50px auto;
      background-color: #D9BB97;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    #ch ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    #ch li {
      margin-bottom: 10px;
    }

    #ch a {
      display: block;
      padding: 10px;
      background-color: #fff;
      color: #333;
      text-decoration: none;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }

    #ch a:hover {
      background-color: #e0e0e0;
      font-weight: bold;
    }
  </style>
  </head>

  <body>

<!-- Intro -->
<?php include('customer_header.php') ?>

<!-- navbar element -->
<div id="nav">
<?php include('customer_menu.php') ?>
</div>

<div id="main">
  <div id="ch">
    <ul align="center">
      <li><a href="customer_profile1.php">My Profile</a></li>
      <li><a href="customer_petprofile1.php">My Pet Profile</a></li>
      <li><a href="customer_add.php">Make Appointment</a></li>
      <li><a href="customer_view.php">Check My Appointment</a></li>
      <li><a href="customer_product.php">Purchase Products</a></li>
      <li><a href="customer_purchase.php">Check My Order</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>
</div>

<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>
  </body>
</html>
