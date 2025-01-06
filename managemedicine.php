<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse: Manage Medicine</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
  body{
    background-color: #C69468;
  }
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
    background-color: #D9D9D9;
    font-size: 16px;
  }
  #my-button{ 
    background-color: #f7d0af;
    padding: 10px 20px;
    display: inline-block;
    border-radius: 5px;
    margin-left: 50px;
    margin-right: 50px;
  }
  .center {
    margin-left: auto;
    margin-right: auto;
  }
  .container{
    width: 24%;
    margin: 0 auto;
  }
  a:visited{
    color: blue;
  }
  a:hover{
    color: #C69468;
  }
  input[type=button]:active{
    box-shadow: 0 5px;
    transform: translateY(2px);
  }
</style>
<body>
  <?php
    sleep(1);
    include "dbcon.php";
    include "header2.php";
  ?>
    <b><h1 style="text-align:center; padding: 10px 20px;"><u>Manage Medicine</u></h1></b>
    <table style="text-align: center; width: 90%; margin-left: auto; margin-right: auto;">
        <thead>
          <tr>
            <th>Medicine ID</th>
            <th>Medicine</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM medicine";
            $result = mysqli_query($connection,$sql);
            while ($row = mysqli_fetch_assoc($result)){
              ?>
          <tr>
            <td><a href="viewmedicine.php?id=<?php echo $row['medicine_id'];?>"><?php echo $row["medicine_id"];?></a></td>
            <td><?php echo $row["medicine_name"];?></td>
            <td><?php echo $row["medicine_stock"];?></td>
            <td>
              <a href="editmedicine.php?id=<?php echo $row['medicine_id'];?>">Edit</a>
              <a href="deletemedicine.php?id=<?php echo $row['medicine_id'];?>">Delete</a>
            </td>
          </tr>
        <?php
          } mysqli_close($connection);
        ?>
        </tbody>
      </table>
      <br>
      <div class="container">
        <input type="button" value="Add" id="my-button" onclick="window.open('addmedicine.php','_self')">
        <input type="button" value="Cancel" id="my-button" onclick="window.open('staffmain.php','_self')">
      </div>
</body>
</html>