<?php
    session_start();
    $staff = $_SESSION['Staff_ID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Profile Page</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
        font-weight: bold;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
    }
    .circular-img {
        width: 180px;
        height: 180px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        padding: 8px;
        float: left;
    }
    td{
        padding: 10px;
        border-collapse: collapse;
        width: 125px;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
        $query = "SELECT * FROM staff WHERE staff_id = '$staff'";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)){
            $staff_name = $row['staff_name'];
            $staff_username = $row['staff_username'];
            $staff_password = $row['staff_password'];
            $staff_contact = $row['staff_contact'];
            $staff_desc = $row['staff_desc'];
        }
    ?>
    <br>
    <b><h1 style="text-align:center"><u>Profile Page</u></h1></b>
    <?php
        if ($staff_desc == "All"){
            $image = 'S1';
        } else if ($staff_desc == "Manage Products") {
            $image = 'S2';
        } else if ($staff_desc == "Groomer"){
            $image = "S3";
        } else {
            $image = "S4";
        }
    ?>    
    <div class="container">
        <img src="png/<?php echo $image?>.jpg" width="100px" height="100px" class="circular-img">
    </div>
    <table class="center">
        <tr>
            <td>Staff ID: </td>
            <td><?php echo $staff?></td>
        </tr>
        <tr>
            <td>Staff Name: </td>
            <td><?php echo $staff_name?></td>
        </tr>
        <tr>
            <td>Staff Username: </td>
            <td><?php echo $staff_username ?></td>
        </tr>
        <tr>
            <td>Contact Number: </td>
            <td><?php echo $staff_contact?></td>
        </tr>
        <tr>
            <td>Job: </td>
            <td><?php echo $staff_desc?></td>
        </tr>
    </table>
    <div class="container" style="padding-top: 20px">
        <input type="button" id="my-button" value="Cancel" onclick="window.open('staffmain.php','_self')">
        <input type="submit" id="my-button" value="Edit" onclick="window.open('editstaffinfo.php','_self')">
        <input type="button" id="my-button" value="Log Out" onclick="window.open('logout.php','_self')">
    </div>
</body>
</html>