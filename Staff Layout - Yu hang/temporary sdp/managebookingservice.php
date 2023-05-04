<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Booking Services</title>
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
        padding: 10px 40px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 70px;
        margin-right: 50px;

    }

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <b><p style="text-align:center;"><u>Manage Booking Service</u></p></b>
    <br>
    <center></center><div id="my-button"><a href="#">Bookings</a></div> <div id="my-button"><a href="addbookingservices.php">Add</a></div> <div id="my-button"><a href="viewbookingservices.php">Search</a></div> <div id="my-button"><a href="modifybookingservice.php">Modify</a></div> <div id="my-button"><a href="deletebookingservice.php">Delete</a></div></center>
    <br>
    <br>
    <br>
    <table>
        <thead>
          <tr>
            <th>Booking ID</th>
            <th>Booking Service</th>
            <th>Booking Date</th>
            <th>Booking Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>B2</td>
            <td>Pet Medical</td>
            <td>15/03/2023(Wednesday)</td>
            <td>11am-1pm</td>
          </tr>
          <tr>
            <td>B1</td>
            <td>Pet Medical</td>
            <td>12/03/2023(Sunday)</td>
            <td>10.30am-12pm</td>
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