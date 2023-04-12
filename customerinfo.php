<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Customer Info</title>
<style>
    #box {
        width: 1468px;
        height: 550px;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 16px;
        font-size: 16px;
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
    <div id="box" style="margin-top: 15px;">
        <div class="circle"></div>
    <b><table style="padding: 5px;">
        <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM customer where customer_id = '$id'";
            $result = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($result)){
                $id = $row['customer_id'];
                $name = $row['customer_name'];
                $username = $row['customer_username'];
                $email = $row['customer_email'];
                $contact = $row['customer_contactnumber'];
                $address = $row['customer_homeaddress'];
                ?>
                <tr>
                    <td>Customer ID:</td>
                    <td><?php echo $id; ?></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><?php echo $username; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><?php echo $contact; ?></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><?php echo $address; ?></td>
                </tr>
                <?php
                }   
                mysqli_close($connection);
            ?>
        </tr>
    </table></b>
    </div>
</body>
</html>