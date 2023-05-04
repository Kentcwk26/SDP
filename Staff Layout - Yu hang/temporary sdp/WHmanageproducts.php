<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse:Manage Products</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #block{height:70px;width: 650px;
        text-align:right;
    display:block;
    position:flex;
    float: left; 
    background-color: #DABA9E;

    }

    #loginblock{height:70px;width: 600px;
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
    text-align: left;
  }
  th {
    background-color: white;
    color: black;
  }
  tr{
    background-color: white;
  }
  
  #my-button{ background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;

    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center;"><u>Warehouse:Manage Products</u></p></b>
    <br>
    <center><div id="my-button"><a href="addproduct.php">Add</a></div> <div id="my-button"><a href="viewproduct.php">Search</a></div> <div id="my-button"><a href="editproduct.php">Modify</a></div> <div id="my-button"><a href="deleteproduct.php">Delete</a></div></center>
    <br>
    <br>
    <table>
        <thead>
          <tr>
            <th>Product ID</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Last History</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>P2</td>
            <td>Medicine</td>
            <td>20</td>
            <td>S02</td>
          </tr>
          <tr>
            <td>P1</td>
            <td>Vaccine</td>
            <td>5</td>
            <td>Admin</td>
          </tr>
          <tr>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
          <tr>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
          <tr>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
          <tr>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
          <tr>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
        </tbody>
      </table>
      <br>
      <center><div id="my-button"><a href="mainindex.php">Back</a></div></center>
</body>
</html>