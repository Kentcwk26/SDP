<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
</head>
<style>
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
    #smallbox{
        width: 98%;
        height: 500px;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px;
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
    input[type=submit]:hover{
        background-color: green;
        color: white;
        font-weight: bold;
        cursor: pointer;
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
    input[type=radio],label{
        cursor: pointer;
    }
</style>
<body style="background-color: #F6E2A6;">
    <?php
        include "dbcon.php";
        $customer = $_SESSION['ID'];
        $sql = "SELECT * FROM customer WHERE customer_id = '$customer'";
        $data = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($data)){
            $profile = $row['customer_profile'];
        }
    ?>
    <form action="#" method="post">
    <table>
        <tr>
            <h2 style="padding-left: 10px;">Please select your favourite avatar: </h2>
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
    </table>
    <table>
        <tr>
            <td colspan="2"><br><input type="submit" name="submit" value="Update"></td>
            <td colspan="2"><br><input type="reset" name="reset" value="Reset"></td>
            <td colspan="2"><br><input type="button" value="Cancel" onclick="window.open('customer_profile.php','_self')"></td>
        </tr>
    </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $customerprofile = $_POST['Avatar'];
            $sql = "UPDATE customer SET customer_profile = '$customerprofile' WHERE customer_id = '$customer'";
            $result = mysqli_query($connection,$sql);
            if($result){
                echo "<script>alert('Updated Successfully!')</script>";
                echo "<script>window.open('customer_profile.php','_self')</script>";
            } else {
                echo "<script>alert('Error, please try again!')</script>";
            }
        } 
        ?>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>