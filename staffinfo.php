<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Staff Info</title>
<style>
    #box {
        width: 1468px;
        height: 500px;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 16px;
        font-size: 16px;
    }
    tr,td{
        padding: 20px;
        font-size: 22px;
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
    <b><table style="padding: 20px; margin: 10px;">
        <?php
            $u = $_GET['u'];
            $query = "SELECT * FROM staff where staff_username = '$u'";
            $result = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($result)){
                $username = $row['staff_username'];
                $contact = $row['staff_contactnumber'];
                $desc = $row['staff_desc'];
                ?>
                <tr>
                    <td>Staff Username:</td>
                    <td><?php echo $username; ?></td>
                </tr>
                <tr>
                    <td>Staff Contact:</td>
                    <td><?php echo $contact; ?></td>
                </tr>
                <tr>
                    <td>Staff Description:</td>
                    <td><?php echo $desc; ?></td>
                <?php
                }   
                mysqli_close($connection);
            ?>
        </tr>
    </table></b>
    </div>
</body>
</html>