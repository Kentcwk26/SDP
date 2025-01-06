<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Paradise Pet Care System</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
    <style>
       #sidebar {
        width: 220px;
        height: 560px;
        background-color: #A3825C;
        padding: 20px;
        float: left;
      }
      a{
        text-decoration: none;
        color: black;
      }
      #menu-list {
        list-style-type: none;
        padding: 0;
        width: 210px;
      }
      #menu-item {
        padding: 18px 20px;
        background-color: white;
        border: 1px solid white;
        margin-bottom: 10px;
      }
      #menu-item:hover{
        background-color: #A3825C;
        color: white;
        font-weight: bold;
        border: 4px solid white;
      }
    </style>
</head>
<body>
  <div id="sidebar" style="margin-top: 20px;">
    <ul id= "menu-list" align="center">
      <a href="customer_profile1.php"><li id =menu-item>Customer</li></a>
      <a href="customer_petprofile1.php"><li id =menu-item>Pet</li></a>
      <a href="customer_view.php"><li id =menu-item>Appointment</li></a>
      <a href="customer_purchase.php"><li id =menu-item>Purchase</li></a>
    </ul>
  </div>
</body>
</html>