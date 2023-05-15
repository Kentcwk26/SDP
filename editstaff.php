<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    #box{
        width: 98%;
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
    input[type=text],input[type=email],input[type=password], input[type=number]{
        width: 1250px;
        height: 30px;
        margin: 5px;
        padding: 4px 10px;
    }
    select{
        width: 1274px;
        height: 40px;
        margin: 5px;
        padding: 4px 10px;
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
        cursor: pointer;
    }
    input[type=button]:hover{
        background-color: red;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }
    input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, input[type=textarea]:focus {
        border: 2px solid #555;
    }
    a:visited{
        color: black;
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
        height: 500px;
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
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 20px;
    }    
</style>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <br>
    <center><div id="adminIndex"><img src="png\Logo4.png"></div><h1 style="padding-top: 20px"><b>Edit Staff's Information</b></h1></center>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM staff where staff_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['staff_id'];
            $name = $row['staff_name'];
            $contact = $row['staff_contact'];
            $username = $row['staff_username'];
            $password = $row['staff_password'];
            $description = $row['staff_desc'];
        }
    ?>
    <form action="#" method="POST">
        <table class="center" style="padding-top: 20px;">
            <tr>
                <td style="font-weight: bold; border: none">Staff ID</td>
                <td style="border: none;"><input type="text" name="id" value="<?php echo $id; ?>" readonly /></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none">Staff Name</td>
                <td style="border: none;"><input type="text" name="staff" value="<?php echo $name; ?>" /></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none">Staff Contact</td>
                <td style="border: none;"><input type="number" name="contact" value="<?php echo $contact; ?>" /></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none">Staff Username</td>
                <td style="border: none;"><input type="text" name="username" value="<?php echo $username; ?>" /></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none">Staff Password</td>
                <td style="border: none;"><input type="password" name="password" value="<?php echo $password; ?>" /></td>
            </tr>
            <tr>
                <td>Staff Description: </td>
                <td><label for="description"></label>
                <select name="description" id="description">
                    <option value="Receiptionist" <?php if ($description == "Receipionist") {echo "selected";}?>>Receiptionist</option>
                    <option value="Groomer" <?php if ($description == "Groomer") {echo "selected";}?>>Groomer</option>
                    <option value="Manage Products" <?php if ($description == "Maanage Products") {echo "selected";}?>>Manage Products</option>
                    <option value="All" <?php if ($description == "All") {echo "selected";}?>>All</option>
                </select></td>
            </tr>
        </table>
        <table class="container">
            <tr>
                <td colspan="2"><br><input type="submit" name="submit" value="Update"></td>
                <td colspan="2"><br><input type="reset" name="reset" value="Reset"></td>
                <td colspan="2"><br><input type="button" value="Cancel" onclick="window.open('managestaff.php','_self')"></td>
            </tr>
        </table>
        <?php
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if(isset($_POST['submit'])){
                if (empty($_POST["contact"]) or empty($_POST["staff"]) or empty($_POST["username"]) or empty($_POST["password"]) or empty($_POST["description"])) {
                    echo "<script>alert('All the staff details are required')</script>";
                } else {
                    $name = test_input($_POST["staff"]);
                    $username = test_input($_POST["description"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)or(!preg_match("/^[a-zA-Z-' ]*$/",$username))){
                        echo "<script>alert('Wrong input either in the name or username section!')</script>";
                    } else {
                        $staffid = $id;
                        $staff = $_POST['staff'];
                        $contact = $_POST['contact'];
                        $username = $_POST['username'];
                        $description = $_POST['description'];
                        $sql= "UPDATE `staff` SET `staff_name`='$staff',`staff_desc`='$description',`staff_contact`='$contact',`staff_username`='$username' WHERE `staff_id`='$staffid'";
                        $result2 = mysqli_query($connection,$sql);
                        if($result2){
                            ?>
                            <script>
                                window.location.href = "managestaff.php";
                                alert("Edit staff success!");
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
    </form>
</body>
</html>