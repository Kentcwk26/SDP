<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png" >
    <title>Manage Staffs</title>
</head>
<style>
    #adminIndexHeader{
        width: 200px;
        height: 150px;
        padding-bottom: 30px;
        padding-top: 10px;
    }
    table{
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 95%;
    }
    tr,td{
        border: 1px solid black;
        color: black;
        text-align: center;
        padding: 15px;
        font-size: 18px;
    }
    th{
        border: 1px solid black;
        padding: 15px;
        background-color: #dddddd;
        color: black;
    }
    a:visited{
        text-decoration: none;
        color: blue;
    }
    #smallbox{
        width: 80px;
        height: 60px;
        background-color: whitesmoke;
        padding-top: 10px;
        margin: 40px;
        text-align: center;
        float: right;
    }
    label:hover{
        font-weight: bold;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png\Logo4.png"></a></div>
    <h1><b>Manage Staff</b></h1>
    <table>
        <?php
            $sql = "SELECT * FROM staff";
            $result = mysqli_query($connection,$sql);
                ?>
                <tr>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td>
                            <a href="viewstaff.php?u=<?php echo $row["staff_username"]; ?>"><?php echo $row["staff_username"]; ?></a>
                        </td>
                        <td>   
                            <a href="editstaff.php?u=<?php echo $row["staff_username"]; ?>">Edit</a>
                            <a href="deletestaff.php?u=<?php echo $row["staff_username"]; ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }   
                mysqli_close($connection);
            ?>
        </tr>
    </table>
    <div id="smallbox"><label><a href="addstaff.php" style="text-decoration: none; font-size: 40px; color: black;">+</a></label></div>
    </center>
</body>
</html>