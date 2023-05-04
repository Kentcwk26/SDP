<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse:Manage Medicine</title>
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
    <b><p style="text-align:center;"><u>Warehouse:Manage Medicine</u></p></b>
    <br>
    <center><div id="my-button"><a href="addmedicine.php">Add</a></div> <div id="my-button"><a href="viewmedicine.php">Search</a></div> <div id="my-button"><a href="editmedicine.php">Modify</a></div> <div id="my-button"><a href="deletemedicine.php">Delete</a></div></center>
    <br>
    <br>
    <table>
        <thead>
          <tr>
            <th>Medicine ID</th>
            <th>Medicine</th>
            <th>Amount</th>
            <th>Last History</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>M1</td>
            <td>Pet Medical</td>
            <td>10</td>
            <td>S010</td>
          </tr>
          <tr>
            <td>M2</td>
            <td>Pet Medical</td>
            <td>2</td>
            <td>S001</td>
          </tr>
          <tr>
            <td>M3</td>
            <td>.</td>
            <td>100</td>
            <td>Admin</td>
          </tr>
          <tr>
            <td>M4</td>
            <td>.</td>
            <td>150</td>
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
        </tbody>
      </table>
      <br>
      <center><div id="my-button"><a href="mainindex.php">Back</a></div></center>
</body>
</html>