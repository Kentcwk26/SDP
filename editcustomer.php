<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Edit Customer Information</title>
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
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndex"><img src="png\Logo4.png"></div><h1 style="padding-top: 20px"><b>Edit Customer's Information</b></h1></center>
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
        $query2 = "SELECT customer.customer_name, pet.pet_id, pet.pet_name,pet.pet_age, pet.pet_type, pet.pet_gender, pet.pet_allergy FROM customer INNER JOIN pet ON customer.customer_name = pet.customer_name WHERE customer.customer_name='$name'";
        $result2 = mysqli_query($connection,$query2);
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
    <form action="#" method="post">
        <table>
            <tr>
                <td>Customer ID: </td>
                <td><input type="text" required name="customerid" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td>Customer Name: </td>
                <td><input type="text" required name="customername" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Customer Email: </td>
                <td><input type="email" required name="customeremail" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Customer Contact Number: </td>
                <td><input type="text" required name="customerphone" value="<?php echo $contact; ?>" maxlength="12" placeholder="Kindly please insert the Malaysia's contact number format: 0123456789[10] or 01123456789[11]"></td>
            </tr>
        </table>
        <table>
            <tr>
                <h2>Please select your favourite avatar: </h2>
                <center><div id="smallbox">
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A1.jpg">
                        <img src="Avatar\A1.jpg" alt="Avatar 1" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a1" value="A1" <?php if($profile == "A1"){ echo "checked";}?>><label for="a1">Avatar 1</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A2.jpg">
                        <img src="Avatar\A2.jpg" alt="Avatar 2" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a2" value="A2" <?php if($profile == "A2"){ echo "checked";}?>><label for="a2">Avatar 2</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A3.jpg">
                        <img src="Avatar\A3.jpg" alt="Avatar 3" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a3" value="A3" <?php if($profile == "A3"){ echo "checked";}?>><label for="a3">Avatar 3</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A4.jpg">
                        <img src="Avatar\A4.jpg" alt="Avatar 4" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a4" value="A4" <?php if($profile == "A4"){ echo "checked";}?>><label for="a4">Avatar 4</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A5.jpg">
                        <img src="Avatar\A5.jpg" alt="Avatar 5" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a5" value="A5" <?php if($profile == "A5"){ echo "checked";}?>><label for="a5">Avatar 5</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A6.jpg">
                        <img src="Avatar\A6.jpg" alt="Avatar 6" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a6" value="A6" <?php if($profile == "A6"){ echo "checked";}?>><label for="a6">Avatar 6</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A7.jpg">
                        <img src="Avatar\A7.jpg" alt="Avatar 7" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a7" value="A7" <?php if($profile == "A7"){ echo "checked";}?>><label for="a7">Avatar 7</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A8.jpg">
                        <img src="Avatar\A8.jpg" alt="Avatar 8" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a8" value="A8" <?php if($profile == "A8"){ echo "checked";}?>><label for="a8">Avatar 8</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A9.jpg">
                        <img src="Avatar\A9.jpg" alt="Avatar 9" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a9" value="A9" <?php if($profile == "A9"){ echo "checked";}?>><label for="a9">Avatar 9</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A10.jpg">
                        <img src="Avatar\A10.jpg" alt="Avatar 10" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a10" value="A10" <?php if($profile == "A10"){ echo "checked";}?>><label for="a10">Avatar 10</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A11.jpg">
                        <img src="Avatar\A11.jpg" alt="Avatar 11" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a11" value="A11" <?php if($profile == "A11"){ echo "checked";}?>><label for="a11">Avatar 11</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A12.jpg">
                        <img src="Avatar\A12.jpg" alt="Avatar 12" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a12" value="A12" <?php if($profile == "A12"){ echo "checked";}?>><label for="a12">Avatar 12</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A13.jpg">
                        <img src="Avatar\A13.jpg" alt="Avatar 13" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a13" value="A13" <?php if($profile == "A13"){ echo "checked";}?>><label for="a13">Avatar 13</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A14.jpg">
                        <img src="Avatar\A14.jpg" alt="Avatar 14" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a14" value="A14" <?php if($profile == "A14"){ echo "checked";}?>><label for="a14">Avatar 14</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A15.jpg">
                        <img src="Avatar\A15.jpg" alt="Avatar 15" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a15" value="A15" <?php if($profile == "A15"){ echo "checked";}?>><label for="a15">Avatar 15</label></div>
                    </div>
                    <div class="avatar">
                        <a target="_blank" href="Avatar\A16.jpg">
                        <img src="Avatar\A16.jpg" alt="Avatar 16" class="circleavatar"></a>
                        <div class="desc"><input type="radio" required name="Avatar" id="a16" value="A16" <?php if($profile == "A16"){ echo "checked";}?>><label for="a16">Avatar 16</label></div>
                    </div>
                </div><p>Click the picture to see a clearer profile picture</p></center>
            </tr>
            <tr>
                <td>Pet ID: </td>
                <td><input type="text" required name="petid" value="<?php echo $petid; ?>"></td>
            </tr>
            <tr>
                <td>Pet Name: </td>
                <td><input type="text" required name="petname" value="<?php echo $petname; ?>"></td>
            </tr>
            <tr>
                <td>Pet Age: </td>
                <td><input type="number" required name="petage" min=0 max=5 step=0.5 value="<?php echo $petage; ?>"></td>
            </tr>
            <tr>
                <td>Pet Type: </td>
                <td><label for="pettype"></label>
                <select name="pettype" id="pettype">
                    <option value="Dog" <?php if($pettype == "Dog"){ echo "selected";}?>>Dog</option>
                    <option value="Cat" <?php if($pettype == "Cat"){ echo "selected";}?>>Cat</option>
                    <option value="Rabbit" <?php if($pettype == "Rabbit"){ echo "selected";}?>>Rabbit</option>
                    <option value="Hamster" <?php if($pettype == "Hamster"){ echo "selected";}?>>Hamster</option>
                    <option value="Bird" <?php if($pettype == "Bird"){ echo "selected";}?>>Bird</option>
                    <option value="Turtle" <?php if($pettype == "Turtle"){ echo "selected";}?>>Turtle</option>
                </select></td>
            </tr>
            <tr>
                <td>Pet Gender: </td>
                <td><label for="petgender"></label>
                <select name="petgender" id="petgender">
                    <option value="Male" <?php if($petgender == "Male"){ echo "selected";}?>>Male</option>
                    <option value="Female" <?php if($petgender == "Female"){ echo "selected";}?>>Female</option>
                </select></td>
            </tr>
            <tr>
                <td>Pet Allergy: </td>
                <td><input type="text" required name="petallergy" value="<?php echo $petallergy; ?>"></td>
            </tr>
        </table> 
        <table>
            <tr>
                <td colspan="2"><br><input type="submit" name="submit" value="Update"></td>
                <td colspan="2"><br><input type="reset" name="reset" value="Reset"></td>
                <td colspan="2"><br><input type="button" value="Cancel" onclick="window.open('managecustomer.php','_self')"></td>
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
            if (empty($_POST["customername"]) or empty($_POST["customeremail"]) or empty($_POST["customerphone"]) or empty($_POST["Avatar"]) or empty($_POST["petname"]) or empty($_POST["petallergy"])){
                echo "<script>alert('All the details are required')</script>";
            } else {
                $name = test_input($_POST["customername"]);
                $email = test_input($_POST["customeremail"]);
                $phone = test_input($_POST["customerphone"]);
                $petname = test_input($_POST['petname']);
                $petallergy = test_input($_POST['petallergy']);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name) or (!preg_match("/^[a-zA-Z-' ]*$/",$petname))){
                    echo "<script>alert('Wrong input in the name section!')</script>";
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo "<script>alert('Invalid email')</script>";
                    } else {
                        if (!ctype_digit($phone) && !strlen($phone)<=11){
                            echo "<script>alert('Incorrect Contact Number / Format')</script>";
                        } else{
                            $customerprofile = $_POST['Avatar'];
                            $customername = $_POST['customername'];
                            $customeremail = $_POST['customeremail'];
                            $customerphone = $_POST['customerphone'];
                            $petid = $_POST['petid'];
                            $petname = $_POST['petname'];
                            $petage = $_POST['petage'];
                            $pettype = $_POST['pettype'];
                            $petgender = $_POST['petgender'];
                            $petallergy = $_POST['petallergy'];
                            $sql = "UPDATE customer SET customer_profile = '$customerprofile', customer_name = '$customername', customer_email = '$customeremail', customer_contactnumber = '$customerphone' WHERE customer_id = '$id'";
                            $sql2 = "UPDATE `pet` SET `pet_name`='$petname',`pet_age`='$petage',`pet_type`='$pettype',`pet_gender`='$petgender',`pet_allergy`='$petallergy',`customer_name`='$customername',`customer_contact`='$customerphone' WHERE `pet_id`='$petid'";
                            $result = mysqli_query($connection,$sql);
                            if($result){
                                $result2 = mysqli_query($connection,$sql2);
                                if($result2){
                                    echo "<script>alert('Updated Successfully!')</script>";
                                    echo "<script>window.open('managecustomer.php','_self')</script>";
                                } else {
                                    echo "<script>alert('Error, please try again!')</script>";
                                }
                            } else {
                                echo "<script>alert('Failed to update, please try again!')</script>";
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