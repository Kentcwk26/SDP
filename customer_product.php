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
  img:hover{
    transform: scale(1.2);
  }
</style>
<body>

<!-- Intro -->
<?php include('customer_header.php') ?>

<!-- navbar element -->
<div id="nav">
  <?php include('customer_menu.php') ?>
</div>

<div id="main">

<!-- Product -->
<div id="product" style="display:flex; justify-content: center; width: 1400px; height: 400px;">
  <table>
    <tr>
    <td><a href="item.php"><img src="img/pedigree.jpg" alt="about-1"></a></td>
    <td><a href="medicine.php"><img src="img/antibiotics.jpg" alt="about-3"></a></td>
  </tr>
  <tr>
    <td><h3>Item</h3></td>
    <td><h3>Medicine</h3></td>
  </tr>
</table>
</div>

<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>
  </body>
</html>
