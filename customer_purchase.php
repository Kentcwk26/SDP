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
  th,td{
    padding: 20px 32px;
    text-align: center;
    color: black;
  }
  table{
    border-collapse: collapse;
    border: 1px solid black;
  }
</style>
<body>
	
<!-- Intro -->
<?php include('customer_header.php') ?>


<!-- navbar element -->
<div id="nav">
<?php include('customer_menu.php') ?>
</div>

<!-- sidebar -->
<div id="sidenav">
<?php include('customer_sidemenu.php') ?>
</div>

<div id="main">
  <div id="appointment" style="margin-top: 20px; margin-bottom: 20px; width: 100%; height: 600px">
    <center>
    <h1 style="padding-top: 20px;">My Purchase Record</h1>
    <table border=1>
      <tr>
          <th>Purchase ID</th>
          <th>Product Name</th>
          <th>Purchase Quantity</th>
          <th>Price</th>
          <th>Datetime</th>
      </tr> 
      <?php
      session_start();

      //connect to database
      require_once('dbcon.php');

      $customer_id = $_SESSION['ID'];
      $query = "SELECT purchase.purchase_id, purchase.purchase_quantity, purchase.purchase_total, purchase.purchase_date, customer.customer_id, customer.customer_name, product.product_name FROM purchase INNER JOIN customer ON purchase.customer_id = customer.customer_id INNER JOIN product ON purchase.product_id = product.product_id where customer.customer_id = '$customer_id'";
      $result = mysqli_query($connection, $query);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          $purchase_id = $row['purchase_id'];
          $product_name = $row['product_name'];
          $purchase_total = $row['purchase_total'];
          $purchase_datetime = $row['purchase_date'];
          $purchase_quantity = $row['purchase_quantity'];
          $customer_id = $row['customer_id'];
          $customer_name = $row['customer_name'];
          echo "<tr>";
          echo "<td>".$purchase_id."</td>";
          echo "<td>".$product_name."</td>";
          echo "<td>".$purchase_quantity."</td>";
          echo "<td> RM".$purchase_total."</td>";
          echo "<td>".$purchase_datetime."</td>";
          echo "</tr>";
        }
      }
      $query2 = "SELECT purchase.purchase_id, purchase.purchase_quantity, purchase.purchase_total, purchase.purchase_date, customer.customer_id, customer.customer_name, medicine.medicine_name FROM purchase INNER JOIN customer ON purchase.customer_id = customer.customer_id INNER JOIN medicine ON purchase.medicine_id = medicine.medicine_id where customer.customer_id = '$customer_id'";
      $result2 = mysqli_query($connection, $query2);
      if(mysqli_num_rows($result2) > 0){
        while($row = mysqli_fetch_assoc($result2)){
          $purchase_id = $row['purchase_id'];
          $product_name = $row['medicine_name'];
          $purchase_total = $row['purchase_total'];
          $purchase_datetime = $row['purchase_datetime'];
          $purchase_quantity = $row['purchase_quantity'];
          $customer_id = $row['customer_id'];
          $customer_name = $row['customer_name'];
          echo "<tr>";
          echo "<td>".$purchase_id."</td>";
          echo "<td>".$product_name."</td>";
          echo "<td>".$purchase_quantity."</td>";
          echo "<td> RM".$purchase_total."</td>";
          echo "<td>".$purchase_datetime."</td>";
          echo "</tr>";
        }
      }
      ?>
    </table></center>
    <div style="padding: 30px">
			<button onclick="window.open('customer_product.php','_SELF')" style="cursor: pointer; width: 180px; font-weight: bold; height: 40px; border-radius: 50px; background-color: #A3825C; color: white; margin-left: 520px;">Purchase Item</button>
		</div>
    </div>
  </div>

  <script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>

</body>
</html>