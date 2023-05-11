<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Add Staff</title>
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
    input[type=submit]:hover{
        background-color: green;
        border-color: green;
        color: white;
        font-weight:bold;
    }
    input[type=text],input[type=email],input[type=password]{
        width: 1250px;
        height: 30px;
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
    .img{
        cursor: pointer;
        border-radius: 3px;
        font-weight: bold;
    }
    #upload-photo {
        opacity: 0;
        position: absolute;
    }
    #bigbox{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        height: 1000px;
        background-color: black;
    }
    #smallbox{
        width: 98%;
        height: 450px;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px;
    }
    .avatar{
        float: left;
    }
    .desc{
        padding: 10px;
    }
    .circleavatar{
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background-color: #D9BB97;
        margin: 10px;
        flex-direction: column;
    }
    select, option{
        height: 40px;
        width: 1275px;
        margin: 8px;
        padding: 8px 10px;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndex"><img src="png\Logo4.png"></div><h1 style="padding-top: 20px"><b>Add Staff</b></h1></center>
    <div id="box" style="margin-top: 15px;">
    <form action="#" method="post">
        <table>
            <tr>
                <td>Staff ID: </td>
                <td><?php
                $prefix = "S";
                $last_id = 0;
                $sql = "SELECT staff_id FROM staff ORDER BY staff_id DESC LIMIT 1";
                $result = mysqli_query($connection,$sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $last_id = substr($row["staff_id"], 1);
                }
                $new_id = $prefix . ($last_id + 1);
                ?>
                <input type="text" required name="staff-id" value="<?php echo $new_id; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Staff Name: </td>
                <td><input type="text" required name="staff-name" placeholder="Full Name as per IC"></td>
            </tr>
            <tr>
                <td>Staff Contact: </td>
                <td><input type="text" required name="staff-phone" maxlength="11" pattern="[0]{1}[0-9]{9}" placeholder="Kindly please insert the Malaysia's contact number format: 0123456789[10] or 01123456789[11]"></td>
            </tr>
            <tr>
                <td>Staff Username: </td>
                <td><input type="text" required name="staff-username"></td>
            </tr>
            <tr>
                <td>Staff Password: </td>
                <td><input type="password" required name="staff-password"></td>
            </tr>
            <tr>
                <td>Staff Description: </td>
                <td><label for="pettype"></label>
                <select name="pettype" id="pettype">
                    <option value="Receiptionist">Receiptionist</option>
                    <option value="Groomer">Groomer</option>
                    <option value="Manage Product">Manage Products</option>
                    <option value="All">All</option>
                </select></td>
            </tr>
        </table> 
        <table style="margin: 40px 0;">
            <tr>
                <td colspan="2"><input type="submit" name="Submit" value="Add"></td></div>
                <td colspan="2"><input type="reset" name="Reset" value="Reset"></td>
                <td colspan="2"><input type="button" value="Cancel" onclick="window.open('managecustomer.php','_self')">
            </tr>
        </table>
    </form>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(isset($_POST['Submit'])){
            $name = test_input($_POST["staff-name"]);
            $phone = test_input($_POST["staff-phone"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                echo "<script>alert('Wrong input in the name section!')</script>";
            } else if (!ctype_digit($phone) || strlen($phone) > 11){
                echo "<script>alert('Incorrect Contact Number / Format')</script>";
            } else{ 
                $staff_id= $_POST['staff-id'];
                $staff_name = $_POST['staff-name'];
                $staff_phone = $_POST['staff-phone'];
                $staff_desc = $_POST['staff-desc'];
                $sql = "INSERT INTO `staff`(`staff_id`, `staff_name`, `staff_username`, `staff_password`, `staff_contact`, `staff_desc`) VALUES ('$staff_id','$staff_name', '$staff_username', '$staff_password', '$staff_phone', '$staff_desc')";
                $result = mysqli_query($connection,$sql);
                if($result){
                    echo "<script>alert('Added Staff!')</script>";
                    echo "<script>window.open('managestaff.php','_self')</script>";
                } else {
                    echo "<script>alert('Error, please try again!')</script>";
                }
            } 
        } 
    ?>
    <?php
        mysqli_close($connection);
    ?>
    </div>
</body>
</html>