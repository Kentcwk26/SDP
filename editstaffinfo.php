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
    <title>Edit Info</title>
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
    .holder{
        display: flex;
        align-items: center;
    }
    td{
        border-collapse: collapse;
        width: 125px;
    }
    input[type=text],input[type=password]{
        width: 400px;
        height: 30px;
        margin: 5px;
        padding: 4px 10px;
    }
    input[type=text]:focus, input[type=password]:focus{
        border: 2px solid #555;
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
        if ($staff_desc == "All"){
            $image = 'S1';
        } else if ($staff_desc = "Manage Products") {
            $image == 'S2';
        } else if ($staff_desc = "Groomer"){
            $image == "S3";
        } else {
            $image == "S4";
        }
    ?>
    <br>
    <b><h1 style="text-align:center"><u>Profile Page</u></h1></b>
    <div class="container">
        <img src="png/<?php echo $image?>.jpg" width="100px" height="100px" class="circular-img">
    </div>
    <form action="#" method="post">
        <table class="center">
            <tr>
                <td>Staff ID: </td>
                <td><input type="text" name="staff-id" value="<?php echo $staff?>" readonly></td>
            </tr>
            <tr>
                <td>Staff Name: </td>
                <td><input type="text" name="staff-name" value="<?php echo $staff_name?>"></td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="staff-username" value="<?php echo $staff_username?>"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <div class="holder">
                        <input type="password" id="staff-password" name="staff-password" value="<?php echo $staff_password?>" onfocus="border0()" onblur="border1()">
                        <img src="png/eye2.png" onclick="showPassword(this)" width="40px" height="40px">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Contact Number: </td>
                <td><input type="text" name="staff-contact" value="<?php echo $staff_contact?>"></td>
            </tr>
            <tr>
                <td>Job: </td>
                <td><input type="text" name="staff-desc" value="<?php echo $staff_desc?>" readonly></td>
            </tr>
        </table>
        <div class="container" style="padding-top: 20px">
            <input type="button" id="my-button" value="Cancel" onclick="window.open('staffmain.php','_self')">
            <input type="submit" id="my-button" value="Complete" name="Complete">
            <input type="button" id="my-button" value="Log Out" onclick="window.open('logout.php','_self')">
        </div>
        </form>
    <script>
        function border0(){
            var a = document.querySelector('.holder');
        }

        function border1(){
            var a = document.querySelector('.holder');
        }

        function showPassword(image) {
            var x = document.getElementById("staff-password");
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
        if(isset($_POST['Complete'])){
            if (empty($_POST["staff-contact"]) or empty($_POST["staff-name"]) or empty($_POST["staff-username"]) or empty($_POST["staff-password"]) or empty($_POST["staff-desc"])) {
                echo "<script>alert('All the staff details are required')</script>";
            } else {
                $name = test_input($_POST["staff-name"]);
                $username = test_input($_POST["staff-desc"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)or(!preg_match("/^[a-zA-Z-' ]*$/",$username))){
                    echo "<script>alert('Wrong input either in the name or username section!')</script>";
                } else {
                    $staffid = $staff;
                    $staff = $_POST['staff-name'];
                    $contact = $_POST['staff-contact'];
                    $username = $_POST['staff-username'];
                    $description = $_POST['staff-desc'];
                    $password = $_POST['staff-password'];
                    $sql= "UPDATE `staff` SET `staff_name`='$staff',`staff_username`='$username',`staff_password`='$password',`staff_contact`='$contact',`staff_desc`='$description' WHERE `staff_id`='$staffid'";
                    $result2 = mysqli_query($connection,$sql);
                    if($result2){
                        ?>
                        <script>
                            window.location.href = "staffmain.php";
                            alert("Edit success!");
                        </script>
                        <?php
                    }
                    else{
                        ?>
                        <script>
                            alert("Error, please try again");
                        </script>
                    <?php
                    }
                }
            }
        }
    ?>
</body>
</html>