<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pet Paradise Pet Care System</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="icon" href="img/profile.jpg">
  </head>

  <body>

<!-- Intro -->
<div id="intro">
<?php include('customer_header.php') ?>
</div>


<!-- navbar element -->
<div id="nav">
<?php include('customer_menu.php') ?>
</div>

<div id="main">
<h1 align="center">Welcome back</h1>
<div id="ch">
<ul align="center">
        <li><a href="customer_profile.php">My Profile</a></li>
        <li><a href="customer_add.php">Make Appointment</a></li>
        <li><a href="customer_view.php">Check My Appointment</a></li>
      </ul>
    </div>
</div>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>
  </body>
</html>
