<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/x-icon" href="png\Icon.png">
<title>Customer Info</title>,
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
    tr,td{
        padding: 20px;
        font-size: 22px;
    }
    input[type=submit],input[type=button]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
        color: black;
    }
    input[type=submit]:active,input[type=button]:active{
        box-shadow: 0 5px whitesmoke;
        transform: translateY(4px);
    }
    input[type=submit]:hover{
        background-color: red;
        color: white;
        font-weight:bold;
        cursor: pointer;
    }
    input[type=button]:hover{
        background-color: black;
        color: white;
        font-weight: bold;
        cursor: pointer;
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
</style>
</head>
<body>
<?php
    include "dbcon.php";
    include "sidemenu.php";
    sleep(1);
    ?>
    <center><div id="adminIndex"><a href="admin.php"><img src="png\Logo4.png"></a></div><h1 style="padding-top: 20px"><b>Delete Customer</b></h1></center>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM customer where customer_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $profile = $row['customer_profile'];
            $id = $row['customer_id'];
            $name = $row['customer_name'];
            $username = $row['customer_username'];
            $email = $row['customer_email'];
            $contact = $row['customer_contactnumber'];
            $address = $row['customer_homeaddress'];
        ?>
    <div id="box" style="margin-top: 15px;">
    <div class="circle"><center>
        <a target="_blank" href="Avatar\<?php echo $profile?>.jpg"><img src="Avatar\<?php echo $profile; ?>.jpg" class="circular-img"></a>
    </div>
    <b><table style="padding: 20px; margin: 10px;">
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
        </table></b>
    </div>
        <form action="#" method="POST">
        <center><h3 style="color: red">Are you sure to delete this customer record? This cannot be unchanged once click the 'Delete' button.</h3>
            <input type="submit" name="delete" value="Delete">
            <input type="button" value="Cancel" onclick="window.open('managecustomer.php','_self')"></center><br>
        </form>
        <?php
            if(isset($_POST['delete'])){
                $query1 = "DELETE FROM customer WHERE customer_id = '$id'";
                $results = mysqli_query($connection,$query1);
                if($results){
                    echo "<script>alert('Customer record deleted successfully!')</script>";
                    echo "<script>window.open('managecustomer.php','_self')</script>";
                }
                else{
                    echo "<script>alert('Customer record failed to delete, please try again!')</script>";
                    echo "<script>window.open('managecustomer.php','_self')</script>";
                }
            }
        ?>
        <?php 
            mysqli_close($connection);
        }
        ?>
</body>
</html>