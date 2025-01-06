<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Customer Info</title>
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
        $query = "SELECT * FROM customer where customer_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $profile = $row['customer_profile'];
            $id = $row['customer_id'];
            $name = $row['customer_name'];
            $username = $row['customer_username'];
            $email = $row['customer_email'];
            $contact = $row['customer_contactnumber'];
        }
        $sql = "SELECT customer.customer_name, pet.pet_id, pet.pet_name,pet.pet_age, pet.pet_type, pet.pet_gender, pet.pet_allergy FROM customer INNER JOIN pet ON customer.customer_name = pet.customer_name WHERE customer.customer_name='$name'";
        $result2 = mysqli_query($connection,$sql);
        while ($row1 = mysqli_fetch_assoc($result2)){
            $petid = $row1['pet_id'];
            $petname = $row1['pet_name'];
            $petage = $row1['pet_age'];
            $pettype = $row1['pet_type'];
            $petgender = $row1['pet_gender'];
            $petallergy = $row1['pet_allergy']; 
        }
    ?>
    <div id="box" style="margin-top: 15px;">
        <div class="circle"><center>
            <a target="_blank" href="Avatar\<?php echo $profile?>.jpg"><img src="Avatar\<?php echo $profile; ?>.jpg" class="circular-img"></a>
        </div>
        <table style="padding: 20px; margin: 10px;">
            <tr style="width: 100px;">
                <td style="width:150px;">Customer ID:</td>
                <td style="width: 400px;"><?php echo $id; ?></td>
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
        </table>
        <table style="padding: 20px; margin: 10px;">
            <tr style="width: 100px;">
                <td style="width:150px;">Pet ID:</td>
                <td style="width: 400px;"><?php echo $petid; ?></td>
            </tr>
            <tr>
                <td>Pet Name:</td>
                <td><?php echo $petname; ?></td>
            </tr>
            <tr>
                <td>Pet Age: </td>
                <td><?php echo $petage; ?></td>
            </tr>
            <tr>
                <td>Pet Type:</td>
                <td><?php echo $pettype; ?></td>
            </tr>
            <tr>
                <td>Pet Gender:</td>
                <td><?php echo $petgender; ?></td>
            </tr>
            <tr>
                <td>Pet Allergy:</td>
                <td><?php echo $petallergy; ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="padding-left: 40px;">
                    <a href="editcustomer.php?id=<?php echo $row["customer_id"]; ?>"><button class="button1">Edit</button></a>
                    <a href="deletecustomer.php?id=<?php echo $row["customer_id"]; ?>"><button class="button2">Delete</button></a>
                    <input type="button" value="Cancel" onclick="window.open('managecustomer.php','_self')">
                </td>
            </tr>
        </table>
    <?php
        mysqli_close($connection);
    ?>
    </table>
</div><br>
</body>
</html>