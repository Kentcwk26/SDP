<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Add Customer Information</title>
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
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndex"><img src="png\Logo4.png"></div><h1 style="padding-top: 20px"><b>Add Customer</b></h1></center>
    <div id="box" style="margin-top: 15px;">
    <form action="#" method="post">
        <table>
            <tr>
                <td>Customer ID: </td>
                <td><?php
                $prefix = "C";
                $last_id = 0;
                $sql = "SELECT customer_id FROM customer ORDER BY customer_id DESC LIMIT 1";
                $result = mysqli_query($connection,$sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $last_id = substr($row["customer_id"], 1);
                }
                $new_id = $prefix . ($last_id + 1);
                ?>
                <input type="text" required name="customerid" value="<?php echo $new_id; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Customer Name: </td>
                <td><input type="text" required name="customername" placeholder="Full Name as per IC"></td>
            </tr>
            <tr>
                <td>Customer Email: </td>
                <td><input type="email" required name="customeremail"></td>
            </tr>
            <tr>
                <td>Customer Contact: </td>
                <td><input type="text" required name="customerphone" maxlength="11" pattern="[0]{1}[0-9]{9}" placeholder="Kindly please insert the Malaysia's contact number format: 0123456789[10] or 01123456789[11]"></td>
            </tr>
        </table>
        <table>
        <tr>
                <h2>Please select your favourite avatar: </h2>
                <center><div id="smallbox">
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A1.jpg">
                        <img src="Avatar\A1.jpg" alt="Avatar 1" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a1" value="A1"><label for="a1">Avatar 1</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A2.jpg">
                        <img src="Avatar\A2.jpg" alt="Avatar 2" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a2" value="A2"><label for="a2">Avatar 2</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A3.jpg">
                        <img src="Avatar\A3.jpg" alt="Avatar 3" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a3" value="A3"><label for="a3">Avatar 3</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A4.jpg">
                        <img src="Avatar\A4.jpg" alt="Avatar 4" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a4" value="A4"><label for="a4">Avatar 4</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A5.jpg">
                        <img src="Avatar\A5.jpg" alt="Avatar 5" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a5" value="A5"><label for="a5">Avatar 5</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A6.jpg">
                        <img src="Avatar\A6.jpg" alt="Avatar 6" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a6" value="A6"><label for="a6">Avatar 6</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A7.jpg">
                        <img src="Avatar\A7.jpg" alt="Avatar 7" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a7" value="A7"><label for="a7">Avatar 7</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A8.jpg">
                        <img src="Avatar\A8.jpg" alt="Avatar 8" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a8" value="A8"><label for="a8">Avatar 8</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A9.jpg">
                        <img src="Avatar\A9.jpg" alt="Avatar 9" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a9" value="A9"><label for="a9">Avatar 9</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A10.jpg">
                        <img src="Avatar\A10.jpg" alt="Avatar 10" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a10" value="A10"><label for="a10">Avatar 10</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A11.jpg">
                        <img src="Avatar\A11.jpg" alt="Avatar 11" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a11" value="A11"><label for="a11">Avatar 11</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A12.jpg">
                        <img src="Avatar\A12.jpg" alt="Avatar 12" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a12" value="A12"><label for="a12">Avatar 12</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A13.jpg">
                        <img src="Avatar\A13.jpg" alt="Avatar 13" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a13" value="A13"><label for="a13">Avatar 13</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A14.jpg">
                        <img src="Avatar\A14.jpg" alt="Avatar 14" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a14" value="A14"><label for="a14">Avatar 14</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A15.jpg">
                        <img src="Avatar\A15.jpg" alt="Avatar 15" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a15" value="A15"><label for="a15">Avatar 15</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A16.jpg">
                        <img src="Avatar\A16.jpg" alt="Avatar 16" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a16" value="A16"><label for="a16">Avatar 16</label></div>
                    </div>
                </div><p>Click the picture to see a clearer profile picture</p></center>
            </tr>
            <tr>
                <td>Pet ID: </td>
                <td><?php
                $prefix = "T";
                $last_id = 0;
                $sql = "SELECT pet_id FROM pet ORDER BY pet_id DESC LIMIT 1";
                $result = mysqli_query($connection,$sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $last_id = substr($row["pet_id"], 1);
                }
                $new_id = $prefix . ($last_id + 1);
                ?>
                <input type="text" required name="petid" value="<?php echo $new_id; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Pet Name: </td>
                <td><input type="text" required name="petname"></td>
            </tr>
            <tr>
                <td>Pet Type: </td>
                <td><label for="pettype"></label>
                <select name="pettype" id="pettype">
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                    <option value="Rabbit">Rabbit</option>
                    <option value="Hamster">Hamster</option>
                    <option value="Bird">Bird</option>
                    <option value="Turtle">Turtle</option>
                </select></td>
            </tr>
            <tr>
                <td>Pet Gender: </td>
                <td><label for="male"><input type="radio" required name="petgender" id="male" value="Male">Male</div></label>
                <label for="female"><input type="radio" required name="petgender" id="female" value="Female">Female</div></label></td>
            </tr>
            <tr>
                <td>Pet Age: </td>
                <td><input type="number" min="0" max="5" size="0.5" required name="petage"></td>
            </tr>
            <tr>
                <td>Pet Allergy: </td>
                <td><input type="text" required name="petallergy"></td>
            </tr>
        </table> 
        <table style="margin-top: 10px">
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Add"></td></div>
                <td colspan="2"><input type="reset" name="reset" value="Reset"></td>
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
        if(isset($_POST['submit'])){
            $name = test_input($_POST["customername"]);
            $email = test_input($_POST["customeremail"]);
            $phone = test_input($_POST["customerphone"]);
            $petname = test_input($_POST["petname"]);
            $pettype = test_input($_POST["pettype"]);
            $petgender = test_input($_POST["petgender"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name) or !preg_match("/^[a-zA-Z-' ]*$/",$petname)){
                echo "<script>alert('Wrong input in the name section!')</script>";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<script>alert('Invalid email')</script>";
            } else if (!ctype_digit($phone) || strlen($phone) > 11){
                echo "<script>alert('Incorrect Contact Number / Format')</script>";
            } else{ 
                $customerid = $_POST['customerid'];
                $customeravatar = $_POST['Avatar'];
                $customername = $_POST['customername'];
                $customeremail = $_POST['customeremail'];
                $customerphone = $_POST['customerphone'];
                $petid = $_POST['petid'];
                $petname = $_POST['petname'];
                $petgender = $_POST['petgender'];
                $petage = $_POST['petage'];
                $pettype = $_POST['pettype'];
                $petallergy = $_POST['petallergy'];
                $sql = "INSERT INTO customer(`customer_profile`,`customer_id`, `customer_name`, `customer_username`, `customer_password`,`customer_email`, `customer_contactnumber`) VALUES ('$customeravatar','$customerid', '$customername', 'guest', 'customer123', '$customeremail', '$customerphone')";
                $sql2 = "INSERT INTO `pet`(`pet_id`, `pet_name`, `pet_age`, `pet_type`, `pet_gender`, `pet_allergy`,`customer_name`, `customer_contact`) VALUES ('$petid','$petname','$petage','$pettype','$petgender', '$petallergy','$customername','$customerphone')";
                $result = mysqli_query($connection,$sql);
                if($result){
                    $result2 = mysqli_query($connection,$sql2);
                    if($result2){
                        echo "<script>alert('Added Successfully!')</script>";
                        echo "<script>window.open('managecustomer.php','_self')</script>";
                    } else {
                        echo "<script>alert('Error, please try again!')</script>";
                    }
                } else {
                    echo "<script>alert('Failed to add, please try again!')</script>";
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