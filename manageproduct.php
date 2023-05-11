<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
  body{
      background-color: #C69468;
  }
  #block{
    height:70px;width: 650px;
    text-align:right;
    display:block;
    position:flex;
    float: left; 
    background-color: #DABA9E;
  }
  #loginblock{
    height:70px;
    width: 600px;
    text-align:right;
    display:block;
    position:flex;
    float: left;
    background-color: #DABA9E;
  }
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
    background-color: white;
  }
  tr{
    background-color: white;
  }
  #my-button{ 
    background-color: #f7d0af;
    padding: 10px 20px;
    display: inline-block;
    border-radius: 5px;
    margin-left: 50px;
    margin-right: 50px;
  }
  a:hover, a:visited:hover{
      color: orange;
  }
  a:visited{
      color: blue;
  }
  .center {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 20px;
  }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <b><h1 style="text-align:center;"><u>Manage Products</u></h1></b>
    <table style="text-align: center;">
        <thead>
          <tr>
            <th>Product ID</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM product";
            $result = mysqli_query($connection,$sql);
            while ($row = mysqli_fetch_assoc($result)){
              ?>
          <tr>
            <td><a href="viewproduct.php?id=<?php echo $row['product_id'];?>"><?php echo $row["product_id"];?></a></td>
            <td><?php echo $row["product_name"];?></td>
            <td><?php echo $row["product_quantity"];?></td>
            <td>
              <a href="editproduct.php?id=<?php echo $row['product_id'];?>">Edit</a>
              <a href="deleteproduct.php?id=<?php echo $row['product_id'];?>">Delete</a>
            </td>
          </tr>
        <?php
          } 
          mysqli_close($connection);
        ?>
        </tbody>
      </table>
      <br>
      <div class="center">
        <input type="button" value="Add" id="my-button" onclick="window.open('addmedicine.php','_self')">
        <input type="button" value="Back" id="my-button" onclick="window.open('staffmain.php','_self')">
      </div>
</body>
</html>