<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Booking Services</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
      background-color: #C69468;
    }
    table {
      border-collapse: collapse;
      width: 96%;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #D9D9D9;
      color: black;
    }
    tr{
      background-color: #D9D9D9;
    }
    #my-button{ 
      background-color: #f7d0af;
      padding: 10px 40px;
      display: inline-block;
      border-radius: 5px;
      margin-left: 70px;
      margin-right: 50px;
      cursor: pointer;
    }
    input[type=button]:active{
      box-shadow: 0 5px;
      transform: translateY(2px);
    }
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 20px;
    }    
    a:hover, a:visited:hover{
        color: #4F2C04;
        font-weight: bold;
    }
    a, a:visited{
        color: blue;
        font-weight: bold;
    }
</style>
<body>
    <?php
      include "dbcon.php";
      include "header2.php";
      sleep(1);
    ?>
    <b><h1 style="text-align:center; padding: 15px 0;"><u>Manage Booking Services</u></h1></b>
    <table style="margin-left: auto; margin-right: auto;">
      <?php
        $sql = "SELECT * FROM appointment";
        $result = mysqli_query($connection,$sql);
      ?>
      <thead>
        <tr>
          <th>Booking ID</th>
          <th>Booking Service</th>
          <th>Booking DateTime</th>
          <th colspan=4>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td><a href="viewbookingservices.php?id=<?php echo $row['appointment_id'];?>"><?php echo $row["appointment_id"];?></a></td>
          <td><?php echo $row['appointment_service']; ?></td>
          <td><?php echo $row['appointment_datetime']; ?></td>
          <td><a href="editbookingservices.php?id=<?php echo $row['appointment_id'];?>">Edit</a></td>
          <td><a href="deletebookingservices.php?id=<?php echo $row['appointment_id'];?>">Delete</a></td>
          <td><a href="approvebookingservices.php?id=<?php echo $row['appointment_id'];?>">Approve</a></td>
          <td><a href="declinebookingservices.php?id=<?php echo $row['appointment_id'];?>">Decline</a></td>
        </tr>
      <?php
      }
      mysqli_close($connection);
      ?>
    </tbody>
    </table><br>
    <div class="center">
        <input type="button" value="Back" id="my-button" onclick="window.open('staffmain.php','_self')">
        <input type="button" value="Add" id="my-button" onclick="window.open('addbookingservices.php','_self')">
        <input type="button" value="Manage" id="my-button" onclick="window.open('bookingservices.php','_self')">
        <input type="button" value="Print" id="my-button" onclick="window.print()">
    </div>
</body>
</html>