<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png" >
    <title>Manage Customers</title>
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
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png\Logo4.png"></a></div>
    <h1><b>Manage Customers</b></h1>
    <table>
        <?php
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($connection,$sql);
                ?>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td>
                            <a href="customerinfo.php?id=<?php echo $row["customer_id"]; ?>"><?php echo $row["customer_name"]; ?></a>
                        </td>
                        <td>   
                            <a href="editcustomer.php?id=<?php echo $row["customer_id"]; ?>">Edit</a>
                            <a href="deletecustomer.php?id=<?php echo $row["customer_id"]; ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }   
                mysqli_close($connection);
            ?>
        </tr>
    </table>
    </center>
</body>
</html>