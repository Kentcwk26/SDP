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
        width: 800px;
        height: 30px;
        margin: 5px;
        padding: 4px 10px;
    }
    input[type=submit],input[type=reset],button{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=submit]:active, input[type=reset]:active, button:active {
        box-shadow: 0 5px whitesmoke;
        transform: translateY(2px);
    }
    input[type=reset]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
    }
    button:hover{
        background-color: red;
        font-weight:bold;
    }
    input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
        border: 2px solid #555;
    }
    a:visited{
        color: black;
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
        height: 600px;
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
        display: flex;
        justify-content: center;
        align-items: center;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: #D9BB97;
        margin: 25px 42px;
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
                <input type="text" name="customerid" value="<?php echo $new_id; ?>" readonly>
                </td>
                </tr>
            <tr>
                <td>Customer Name: </td>
                <td><input type="text" required name="customername" placeholder="Full Name as per IC"></td>
            </tr>
            <tr>
                <td>Customer Email: </td>
                <td><input type="email" required email="customeremail"></td>
            </tr>
            <tr>
                <td>Customer Contact Number: </td>
                <td><input type="text" required name="customerphone" maxlength="11" pattern="[0]{1}[0-9]{9}" placeholder="Kindly please insert the Malaysia's contact number format: 0123456789[10] or 01123456789[11]"></td>
            </tr>
            <tr>
                <td>Customer Address: </td>
                <td><input type="text" required name="customeraddress" style="height: 200px"></td>
            </tr>
        </table>
        <table>
            <tr>
                <h2>Please select your favourite avatar: </h2>
                <center><div id="smallbox">
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A1.jpg">
                        <img src="Avatar\A1.jpg" alt="Avatar 1" class="circleavatar"></a>
                        <label for="a1"><div class="desc"><input type="radio" required name="Avatar" id="a1" value="A1">Avatar 1</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A2.jpg">
                        <img src="Avatar\A2.jpg" alt="Avatar 2" class="circleavatar"></a>
                        <label for="a2"><div class="desc"><input type="radio" required name="Avatar" id="a2" value="A2">Avatar 2</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A3.jpg">
                        <img src="Avatar\A3.jpg" alt="Avatar 3" class="circleavatar"></a>
                        <label for="a3"><div class="desc"><input type="radio" required name="Avatar" id="a3" value="A3">Avatar 3</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A4.jpg">
                        <img src="Avatar\A4.jpg" alt="Avatar 4" class="circleavatar"></a>
                        <label for="a4"><div class="desc"><input type="radio" required name="Avatar" id="a4" value="A4">Avatar 4</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A5.jpg">
                        <img src="Avatar\A5.jpg" alt="Avatar 5" class="circleavatar"></a>
                        <label for="a5"><div class="desc"><input type="radio" required name="Avatar" id="a5" value="A5">Avatar 5</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A6.jpg">
                        <img src="Avatar\A6.jpg" alt="Avatar 6" class="circleavatar"></a>
                        <label for="a6"><div class="desc"><input type="radio" required name="Avatar" id="a6" value="A6">Avatar 6</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A7.jpg">
                        <img src="Avatar\A7.jpg" alt="Avatar 7" class="circleavatar"></a>
                        <label for="a7"><div class="desc"><input type="radio" required name="Avatar" id="a7" value="A7">Avatar 7</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A8.jpg">
                        <img src="Avatar\A8.jpg" alt="Avatar 8" class="circleavatar"></a>
                        <label for="a8"><div class="desc"><input type="radio" required name="Avatar" id="a8" value="A8">Avatar 8</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A9.jpg">
                        <img src="Avatar\A9.jpg" alt="Avatar 9" class="circleavatar"></a>
                        <label for="a9"><div class="desc"><input type="radio" required name="Avatar" id="a9" value="A9">Avatar 9</div></label>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A10.jpg">
                        <img src="Avatar\A10.jpg" alt="Avatar 10" class="circleavatar"></a>
                        <label for="a10"><div class="desc"><input type="radio" required name="Avatar" id="a10" value="A10">Avatar 10</div></label>
                    </div>
                </div><p>Click the picture to see a clearer profile picture</p></center>
            </tr>
        </table> 
        <table>
            <tr>
                <td colspan="2"><br><input type="submit" name="submit" value="Add"></td></div>
                <td colspan="2"><br><input type="reset" name="reset" value="Reset"></td>
                <td colspan="2"><br><button><a href="managecustomer.php">Cancel</a></button>
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
            if (empty($_POST["customername"]) or empty($_POST["customeremail"]) or empty($_POST["customerphone"] or empty($_POST["customeraddress"] or empty($_POST("Avatar"))))) {
                echo "<script>alert('All the customer details are required')</script>";
            } else {
                $name = test_input($_POST["customername"]);
                $email = test_input($_POST["customeremail"]);
                $phone = test_input($_POST["customerphone"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    echo "<script>alert('Wrong input in the name section!')</script>";
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo "<script>alert('Invalid email')</script>";
                    } else {
                        if (!ctype_digit($phone) && !strlen($phone)<=11){
                            echo "<script>alert('Incorrect Contact Number / Format')</script>";
                        } else{
                            $customerid = $_POST['customerid'];
                            $customeravatar = $_POST['avatar'];
                            $customername = $_POST['customername'];
                            $customerusername = $_POST['username'];
                            $customerpassword = $_POST['password'];
                            $customeremail = $_POST['customeremail'];
                            $customerphone = $_POST['customerphone'];
                            $customeraddress = $_POST['customeraddress'];
                            $sql = "INSERT INTO customer(`customer_profile`,`customer_id`, `customer_name`, `customer_username`, `customer_password`,`customer_email`, `customer_contactnumber`, `customer_homeaddress`) VALUES ('$customeravatar','$customerid', '$customername', 'guest', 'customer123', '$customeremail', '$customerphone', '$customeraddress')";
                            $result = mysqli_query($connection,$sql);
                            if($result){
                                ?>
                                <script>
                                    window.location.href = "managecustomer.php";
                                    alert("Customer Updated Successfully");
                                </script>
                                <?php
                            }
                            else{
                                ?>
                                <script>
                                    window.location.href = "managecustomer.php";
                                    alert("Customer Update Failed");
                                </script>
                            <?php
                    }
                } 
                } 
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