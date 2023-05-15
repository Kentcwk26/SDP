<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Edit Vet</title>
</head>
<style>
    #box{
        width: 97.5%;
        height: 100%;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 16px;
        font-size: 16px;
    }
    #adminIndex{
        width: 200px;
        height: 150px;
        padding-top: 10px;
        padding-bottom: 20px;
    }
    input[type=submit]:hover{
        background-color: green;
        border-color: green;
        color: white;
        font-weight:bold;
    }
    input[type=text],input[type=email],input[type=password]{
        width: 1200px;
        height: 40px;
        margin: 8px;
        padding: 8px 10px;
    }
    input[type=textarea]{
        width: 1200px;
        height: 100px;
        margin: 8px;
        padding: 8px 10px;
    }
    input[type=radio]{
        padding: 14px 20px;
        margin-left: 10px;
    }
    input[type=submit],input[type=reset],input[type=button]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
        box-shadow: 0 5px whitesmoke;
        transform: translateY(2px);
    }
    input[type=reset]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
    }
    input[type=button]:hover{
        background-color: red;
        font-weight:bold;
    }
    input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, textarea:focus{
        border: 2px solid #555;
    }
    #smallbox{
        width: 98%;
        height: 450px;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px;
    }
    select, option{
        height: 40px;
        width: 1275px;
        margin: 8px;
        padding: 8px 10px;
    }
    .holder{
        display: flex;
        align-items: center;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndex"><img src="png\Logo4.png"></div>
    <div id="box" style="margin-top: 15px;"><h1><b>Edit Vet</b></h1>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM vet where vet_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['vet_id'];
            $name = $row['vet_name'];
            $contact = $row['vet_contact'];
            $email = $row['vet_email'];
            $username = $row['vet_username'];
            $password = $row['vet_password'];
            $contact = $row['vet_contact'];
            $desc = $row['vet_desc'];
    ?>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Vet ID: </td>
                <td><input type="text" required name="vet-id" value="<?php echo $id; ?>" readonly></td>
            </tr>
            <tr>
                <td>Vet Name: </td>
                <td><input type="text" required name="vet-name" value="<?php echo $name; ?>" placeholder="Full Name as per IC"></td>
            </tr>
            <tr>
                <td>Vet Contact: </td>
                <td><input type="text" required name="vet-phone" value="<?php echo $contact; ?>" maxlength="11" pattern="[0]{1}[0-9]{9}" placeholder="Kindly please insert the Malaysia's contact number format: 0123456789[10] or 01123456789[11]"></td>
            </tr>
            <tr>
                <td>Vet Email: </td>
                <td><input type="email" required name="vet-email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Vet Username: </td>
                <td><input type="text" required name="vet-username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <td>Vet Password: </td>
                <td>
                    <div class="holder">
                        <input type="password" required id = "vet-password" required name="vet-password" value="<?php echo $password; ?>" onchange="updatepass()" onfocus="border0()" onblur="border1()">
                        <img src="png/eye2.png" onclick="showPassword(this)" width="40px" height="40px">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Vet Description: </td>
                <td><input type="textarea" required name="vet-desc" value="<?php echo $desc; ?>"></td>
            </tr>
        </table> 
        <table style="margin: 40px 0;">
            <tr>
                <td colspan="2"><input type="submit" name="Submit" value="Edit"></td></div>
                <td colspan="2"><input type="reset" name="Reset" value="Reset"></td>
                <td colspan="2"><input type="button" value="Cancel" onclick="window.open('managevet.php','_self')">
            </tr>
        </table>
    </form></center>
    <script>
        function border0(){
            var a = document.querySelector('.holder');
        }

        function border1(){
            var a = document.querySelector('.holder');
        }

        function showPassword(image) {
            var x = document.getElementById("vet-password");
            if (x.type === "password") {
                x.type = "text";
                image.src = "png/eye.png";
            } else {
                x.type = "password";
                image.src = "png/eye2.png";
            }
        }
    </script>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(isset($_POST['Submit'])){
            $name = test_input($_POST["vet-name"]);
            $email = test_input($_POST["vet-email"]);
            $phone = test_input($_POST["vet-phone"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                echo "<script>alert('Wrong input in the name section!')</script>";
            } else if (!ctype_digit($phone) || strlen($phone) > 11){
                echo "<script>alert('Incorrect Contact Number / Format')</script>";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<script>alert('Invalid email')</script>";
            } else{ 
                $vet_id= $_POST['vet-id'];
                $vet_name = $_POST['vet-name'];
                $vet_phone = $_POST['vet-phone'];
                $vet_desc = $_POST['vet-desc'];
                $vet_username = $_POST['vet-username'];
                $vet_password = $_POST['vet-password'];
                $vet_email = $_POST['vet-email'];
                $sql = "UPDATE vet SET vet_name = '$vet_name', vet_contact = '$vet_phone', vet_desc = '$vet_desc', vet_username = '$vet_username', vet_password = '$vet_password', vet_email = '$vet_email' WHERE vet_id = '$vet_id'";
                $result = mysqli_query($connection,$sql);
                if($result){
                    echo "<script>alert('Updated!')</script>";
                    echo "<script>window.open('managevet.php','_self')</script>";
                } else {
                    echo "<script>alert('Error, please try again!')</script>";
                }
            } 
        } 
    ?>
    <?php
        }
        mysqli_close($connection);
    ?>
    </div>
</body>
</html>