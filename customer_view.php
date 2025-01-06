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
</head>
<style>
  th,td{
    border: 1px solid black; 
    color: black;
  }
  button:active{
    box-shadow: 0 5px black;
    transform: translateY(2px);
  }
</style>
<body>
	
<!-- Intro -->
<?php include('customer_header.php') ?>
<?php 
  include('dbcon.php');
  sleep(1);
?>


<!-- navbar element -->
<div id="nav">
<?php include('customer_menu.php') ?>
    </div>
<!-- sidebar -->
<div id="sidenav">
<?php include('customer_sidemenu.php') ?>
</div>

<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<div id="main">
  <div id="appointment" style="margin-top: 20px; margin-bottom: 20px; width: 100%; height: 600px">
    <center>
    <h1 style="padding-top: 20px; padding-right: 10px;"> My Appointment </h1>
    <table width="80%" cellpadding="10" style="border-collapse: collapse; text-align: center;">
    <tr>
        <th>Booking ID</th>
        <th>Booking Service</th>  
        <th>Booking Datetime</th>
        <th>Venue</th>
    </tr>
      <?php
        $customer = $_SESSION['ID'];
        $data = mysqli_query($connection, "SELECT * FROM booking WHERE customer_id = '$customer'");
        while($row1 = mysqli_fetch_array($data)){
      ?>
        <tr>
          <td><?php echo $row1['booking_id']; ?></td>
          <td><?php echo $row1['booking_service']; ?></td>
          <td><?php echo $row1['booking_datetime']; ?></td>
          <td><?php echo $row1['booking_venue']; ?></td>
        <?php
        }
        ?>
    </tr>
    </table>
    <div style="padding: 30px">
			<button onclick="window.open('customer_add.php','_SELF')" style="cursor: pointer; width: 180px; font-weight: bold; height: 40px; border-radius: 50px; background-color: #A3825C; color: white; margin-right: 20px;">Add Appointment</button>
		</div>
  </div>
</div></center>


<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>

</body>
</html>