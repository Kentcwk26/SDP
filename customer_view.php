<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pet Paradise Pet Care System</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="icon" href="png/profile.jpg">
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
    <center>
    <h1>My Appointment Record</h1>
    <table border=1>
    <tr>
        <th width="10%">No</th>
        <th>IC No.</th>
        <th>Name</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Pet Name</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
        
<?php
session_start();

//connect to database
require_once('connection.php');

$username =$_SESSION['uname'];
$data = mysqli_query($conn, "SELECT * FROM appointment WHERE UserID='$username'");


$no=1;
while($row=mysqli_fetch_array($data)){


?>
  <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td><?php echo $row['ICNo']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['PhoneNo']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['PetName']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['Time']; ?></td>

  </tr>
<?php 
}
?>


    </table>
			</center>

			
			</div>


<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>

</body>
</html>