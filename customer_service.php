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
  img{
    padding: 10px 20px;
    margin: 4px;
  }
  img:hover{
    transform: scale(1.05);
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

<!-- Service -->
<div id="service">
  <table>
    <tr>
      <td valign=top><h2>Pet grooming</h2>
      <p>We offer grooming services for your pet such as bathing, nail trimming, haircuts, and ear cleaning</p>
      <td><a href="customer_add.php"><img src="img/groom.jpg" alt="groom"></a></td>
  </table>
  <table>
    <tr>
    <td><a href="customer_add.php"><img src="img/board.jpg" alt="board"></a></td>
    <td valign=top><h2 style="padding-left: 50px;">Pet daycare and boarding</h2>
    <p style="padding-left: 50px">We provide daycare and boarding services for pets, allowing owners to leave their pets in a safe and supervised environment when they are away from home</p> 
  </table>
  <table>
    <tr>
      <td valign=top><h2>Veterinary services</h2>
      <p>We offer basic veterinary services such as vaccinations, deworming, and flea and tick treatment.</p>
      <td><a href = "customer_add.php"><img src="img/vet.jpg" alt="vet"></a></td>
  </table>
</div>
</div>

<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>
  </body>
</html>
