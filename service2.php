<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Pet Paradise Pet Care System</title>
  <link rel="stylesheet" type="text/css" href="css/style5.css">
  <link rel="icon" href="png/Icon.png">
</head>
<style>
  p{
    font-size: 16px;
  }
</style>

<body style="background-color: #fae094">

<!-- Intro -->
<?php include('header1.php') ?>

<!-- navbar element -->
<div id="nav">
  <?php include('customer_menu.php') ?>
</div>

<br><div id="main">

<!-- Service -->
<div class="services">
  <table>
    <tr>
      <td valign=top><h1>Pet Grooming</h1>
      <p>We offer grooming services for your pet such as bathing, nail trimming, haircuts, and ear cleaning</p>
      <td><a href = "login.php"><img src="img/groom.jpg" alt="groom"></a></td>
  </table>
  <table>
    <tr>
    <td><a href="login.php"><img src="img/board.jpg" alt="board"></a></td>
    <td valign=top><h1>Pet daycare and boarding</h1>
    <p>We provide daycare and boarding services for pets, allowing owners to leave their pets in a safe and supervised environment when they are away from home</p> 
  </table>
  <table>
    <tr>
      <td valign=top><h1>Veterinary Services</h1>
      <p>We offer basic veterinary services such as vaccinations, deworming, and flea and tick treatment.</p>
      <td><a href="login.php"><img src="img/vet.jpg" alt="vet" style="height: 600px; width: 800px;"></a></td>
  </table>
</div>
</div>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>
  </body>
</html>
