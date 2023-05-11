<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Staff Info</title>
<style>
    #box{
        width: 1468px;
        height: 500px;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 16px;
        font-size: 16px;
    }
    td{
        padding: 16px;
        font-size: 18px;
        text-align: left;
    }
    .circular-img {
        width: 185px;
        height: 185px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        padding: 8px;
        float: right;
    }
    input[type=button], .button1, .button2{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=button]:active, .button1:active, .button2:active, a:active {
        box-shadow: 0 5px none;
        transform: translateY(2px);
    }
    input[type=button]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
        cursor: pointer;
    }
    .button1:hover{
        background-color: green;
        color: white;
        font-weight:bold;
        cursor: pointer;
    }
    .button2:hover{
        background-color: red;
        color: white;
        font-weight:bold;
        cursor: pointer;
    }
    .circleavatar{
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background-color: #D9BB97;
        margin: 10px;
        flex-direction: column;
    }
</style>
</head>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndex"><a href="admin.php"><img src="png\Logo4.png"></a></div><h1 style="padding-top: 20px"><b>Customer Information</b></h1></center>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM staff where staff_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['staff_id'];
            $username = $row['staff_username'];
            $contact = $row['staff_contactnumber'];
            $desc = $row['staff_desc'];
        ?>
    <div id="box" style="margin-top: 15px;">
        <table style="padding: 20px; margin: 10px;">
            <tr>
                <td>Staff ID:</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>Staff Name:</td>
                <td><?php echo $username; ?></td>
            </tr>
            <tr>
                <td>Staff Contact:</td>
                <td><?php echo $contact; ?></td>
            </tr>
            <tr>
                <td>Staff Description:</td>
                <td><?php echo $desc; ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="padding-left: 40px;">
                    <a href="editstaff.php?id=<?php echo $row["staff_id"]; ?>"><button class="button1">Edit</button></a>
                    <a href="deletestaff.php?id=<?php echo $row["staff_id"]; ?>"><button class="button2">Delete</button></a>
                    <input type="button" value="Cancel" onclick="window.open('managestaff.php','_self')">
                </td>
            </tr>
        <?php
            }   
            mysqli_close($connection);
        ?>
    </table>
</div><br>
</body>
</html>