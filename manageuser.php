<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Icon.png" >
    <link rel="stylesheet" href="css/style1.css">
    <title>Manage Users</title>
</head>
<body>
    <?php
        include "dbcon.php";
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="Logo4.png"></a></div>
    <h1><b>Manage Users</b></h1></center>
    <div style="display:flex; justify-content: center;">
        <a href="managecustomer.php">
            <div class="box">Customer</div>
        </a>
        <a href="managestaff.php">
            <div class="box">Staff</div>
        </a>
        <a href="managevet.php">
            <div class="box">Vet</div>
        </a>
    </div>
</body>
</html>