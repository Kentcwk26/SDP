<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Booking Services</title>
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
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
    }
    #user-input{
        height: 30px;
        width: 650px;
    }
    select, option{
        height: 40px;
        width: 440px;
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
    ?>
    <b><h1 style="text-align:center; padding: 15px 0;"><u>Manage Booking Services</u></h1></b>
    <table style="margin-left: auto; margin-right: auto;">
      <?php
        $sql = "SELECT * FROM booking";
        $result = mysqli_query($connection,$sql);
      ?>
      <thead>
        <tr>
          <th>Booking ID</th>
          <th>Booking Service</th>
          <th>Booking Date</th>
          <th>Customer</th>
          <th>Pet</th>
          <th>Staff</th>
          <th>Vet</th>
          <th colspan=2>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td><a href="viewbookingservices.php?id=<?php echo $row['booking_id'];?>"><?php echo $row["booking_id"];?></a></td>
          <td><?php echo $row['booking_service']; ?></td>
          <td><?php echo $row['booking_datetime']; ?></td>
          <td><?php echo $row['customer_id']; ?></td>
          <td><?php echo $row['pet_id']; ?></td>
          <td><?php echo $row['staff_id']; ?></td>
          <td><?php echo $row['vet_id']; ?></td>
          <td><a href="editbookingservices.php?id=<?php echo $row['booking_id'];?>">Approve</a></td>
          <td><a href="deletebookingservices.php?id=<?php echo $row['booking_id'];?>">Decline</a></td>
        </tr>
      <?php
      }
        mysqli_close($connection);
        ?>
      </tbody>
      </table>
      <br>
</body>
</html>