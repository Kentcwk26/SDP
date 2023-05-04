<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Booking Services</title>
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
    <b><p style="text-align:center;"><u>Delete Booking Services</u></p></b>
    <br>
    <br>
    <center><select style="width: 700px; height: 40px;">
		<option value="">-Please choose the booking services that need to delete-</option>
		<option value="option1">Option 1</option>
		<option value="option2">Option 2</option>
		<option value="option3">Option 3</option>
	</select>
    </center>
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
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
        </tbody>
      </table>
    <br>
    <br>
    <br>
    <center><div id="my-button"><a href="managebookingservice.php">Cancel</a></div>  <div id="my-button"><a href="#">Delete</a></div></center>
</body>
</html>