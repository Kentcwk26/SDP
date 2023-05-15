<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Edit Staff</title>
<style>
    #box{
        width: 1468px;
        height: 100%;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 16px;
        font-size: 16px;
    }
    #adminIndexHeader{
        width: 200px;
        height: 150px;
        padding-top: 10px;
        padding-bottom: 20px;
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
    input[type=button]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=button]:active {
        box-shadow: 0 5px none;
        transform: translateY(2px);
    }
    input[type=button]:hover{
        background-color: black;
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
    a:hover, a:visited:hover{
        color: orange;
    }
    a:visited{
        color: blue;
    }
</style>
</head>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png\Logo4.png"></a></div></center>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM staff where staff_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['staff_id'];
            $username = $row['staff_username'];
            $contact = $row['staff_contact'];
            $desc = $row['staff_desc'];
        ?>
    <div id="box" style="margin-top: 10px;">
        <center><h1 style="padding-top: 5px"><b>Staff Information</b></h1></center>
        <table>
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
                <td>
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