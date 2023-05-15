<?php
session_start();
include 'dbcon.php';
if (isset($_POST['login'])) {
    $username =$_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $query = "SELECT * FROM customer WHERE customer_username='$username' AND customer_password='$password'";
    $results = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($results);
    $count = mysqli_num_rows($results); // 1 or 0
    if($count==1) {
        //$fullname = $row['firstname'] . " ". $row['lastname']; // run with line with 
        $_SESSION['ID'] = $row['customer_id'];
        echo "<script>alert('Congratulations!');</script>";
        //redirect the user to your main page]
        //header("Location: mainPage.php?name=" . $fullname); // run with it
        echo "<script>location.href = 'mainindex.php'</script>"; 
    } else {
        $query = "SELECT * FROM staff WHERE staff_username='$username' AND staff_password='$password'";
        $results = mysqli_query($connection, $query);
        $count = mysqli_num_rows($results);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($results);
            $_SESSION['Staff_ID'] = $row['staff_id'];
            echo "<script>alert('Congratulations! You are logged in as staff.');</script>";
            echo "<script>location.href = 'mainindex.php'</script>";

        } else {
            $query = "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'";
            $results = mysqli_query($connection, $query);
            $count = mysqli_num_rows($results);

            if ($count == 1) {
                $row = mysqli_fetch_assoc($results);
                $_SESSION['Admin_ID'] = $row['admin_id'];
                echo "<script>alert('Congratulations! You are logged in as an admin.');</script>";
                echo "<script>location.href = 'admin.php'</script>";      
            
            } else {
                echo "<script>alert('Invalid credentials. Please try again!');</script>";
            }
        }
    }
}

if (isset($_POST['register'])) {
    $username = $_POST['txtUsername'];
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtConfirmPassword'];
    $petname = $_POST['txtpetname'];
    $petgender = $_POST['txtpetgender'];
    $pettype = $_POST['txtpettype'];
    $petage = $_POST['txtpetage'];
    $contact = $_POST['txtContact'];

    $query = "SELECT * FROM `customer`";
    $results = mysqli_query($connection, $query);
    $count = mysqli_num_rows($results);
    $cusnewcount = ($count + 1);
    $cusnewc = 'C'.$cusnewcount;

    $query1 = "SELECT * FROM `pet`";
    $results1 = mysqli_query($connection, $query1);
    $count = mysqli_num_rows($results1);
    $petnewcount = ($count + 1);
    
    $query2 = "INSERT INTO `customer`(`customer_id`, `customer_username`, `customer_name`, `customer_email`, `customer_password`, `customer_contactnumber`) 
    VALUES ('$cusnewc','$username','$name','$email','$password','$contact')"; 
    
    $query3 = "INSERT INTO `pet`(`pet_id`, `pet_name`, `pet_age`, `pet_type`, `pet_gender`, `customer_name`, `customer_contact`)
    VALUES ('$petnewcount','$petname','$petage','$pettype','$petgender','$name','$contact')";

    if (mysqli_query($connection, $query2) && mysqli_query($connection, $query3)) {
        echo "<script>alert('Record sucessfully added!');</script>";
        //redirect the user immediately
        //redirect the user with a delay  of 2 seconds
        header("refresh: 2; url=mainindex.php");
    } else {
        echo "<script>alert('Error in inserting the record!');</script>";
    }
}

if (isset($_POST['forgot'])) {
    $email = $_POST['txtEmail'];
    $newpassword = $_POST['txtnewpassword'];

    $query = "SELECT * FROM `customer` WHERE `customer_email`='$email'";
    $query1 = "UPDATE `customer` SET `customer_password`='$newpassword' WHERE `customer_email`='$email'";
    $results = mysqli_query($connection, $query);
    $count = mysqli_num_rows($results);
    if($count==1) {
        mysqli_query($connection, $query1);
        echo "<script>alert('Password updated sucessfully!');</script>";
    } else {
        echo "<script>alert('Account has not been registered!');</script>";
    }
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style3.css">

</head>
<body>
    
    <header>
        <h2><img src="png/Logo4.png" width="100px"></h2>
        <nav class="navigation">
            <a href="#">About Us</a>
            <a href="#">Help & Support</a>
            <a href="#">Services</a>
            <a href="#">Privacy Notes</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <div id="formSwitchBtn">
                <button class="active">Login</button>
                <button class="register-button">Registration</button>
            </div>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input id="LoginEmail" type="text" name="txtUsername" required>
                    <label>Username</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon id="password-icon" name="eye-off-outline" onclick="togglePasswordVisibility()"></ion-icon></span>
                    <input id="input-password" type="password" name="txtPassword" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#" class="forgotpassword-link">Forgot Password?</a>
                </div>
                <input onclick="return ValidateLoginForm();" type="submit" class="btn" value="Login" name="login">
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <div id="formSwitchBtn">
                <button class="login-button">Login</button>
                <button class="active">Registration</button>
            </div>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="txtName" required>
                    <label>Name</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="txtUsername" required>
                    <label>Username</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input id="register-input-email" type="email" name="txtEmail" required>
                    <label>Email</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon id="register-password-icon" name="eye-off-outline" onclick="toggleRegisterPasswordVisibility()"></ion-icon></span>
                    <input id="register-input-password" type="password" name="txtPassword" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon id="register-confirm-password-icon" name="eye-off-outline" onclick="toggleRegisterConfirmPasswordVisibility()"></ion-icon></span>
                    <input id="register-input-confirm-password" type="password" name="txtConfirmPassword" required>
                    <label>Confirm Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button class="nextregister-linkbtn">Next</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            
        </div>

        <div class="form-box petregister">
            <h2>Registration</h2>
            <div id="formSwitchBtn">
                <button>Login</button>
                <button class="active">Registration</button>
            </div>
            
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="txtpetname" required>
                    <label>Pet Name</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="number" min="0.5" max="10" step="0.5" name="txtpetage" required>
                    <label>Pet Age</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input list="types" name="txtpettype" required>
                    <datalist id="types">
                        <option value="Cat">
                        <option value="Dog">
                        <option value="Kitten">
                        <option value="Puppy">
                        <option value="Others">
                    </datalist>
                    </input>
                    <label>Pet Type</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input list="genders" name="txtpetgender" required>
                    <datalist id="genders">
                        <option value="Male">
                        <option value="Female">
                    </datalist>
                    </input>
                    <label>Gender</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" name="txtContact" required>
                    <label>Owner Contact No.</label>
                </div> 
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <div class="btn-box">
                    <button class="previousregister-linkbtn">Return</button>
                    <button type="submit" class="registerbtn" name="register">Register</button>
                </div>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link3">Login</a></p>
                </div>
            </form>
        </div>

        <div class="form-box forgotpassword">
            <h2>Forgot Password</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="txtEmail" required>
                    <label>Email</label>
                </div> 
                <button class="resetpassword-linkbtn">Reset Password</button>
                <div class="login-register">
                    <p>Back to <a href="#" class="login-link2">Login</a></p>
                </div>
            
        </div>

        <div class="form-box resetpassword">
            <h2>Reset Password</h2>
            
                <div class="input-box">
                    <span class="icon"><ion-icon id="reset-password-icon" name="eye-off-outline" onclick="toggleResetNewPasswordVisibility()"></ion-icon></span>
                    <input id="reset-input-password" type="password" required>
                    <label>New Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon id="reset-confirm-password-icon" name="eye-off-outline" onclick="toggleResetConfirmPasswordVisibility()"></ion-icon></span>
                    <input id="reset-input-confirm-password" type="password" name="txtnewpassword" required>
                    <label>Confirm Password</label>
                </div>
                <div class="btn-box">
                <input type="submit" class="returnforgot-linkbtn" value="Return">
                <button type="submit" class="submitbtn" name="forgot">Submit</button>
                </div>
            </form>
        </div>

    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("input-password");
            var passwordIcon = document.getElementById("password-icon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.setAttribute("name", "eye-outline");
            } else {
                passwordInput.type = "password";
                passwordIcon.setAttribute("name", "eye-off-outline");
            }
        }
        function toggleRegisterPasswordVisibility() {
            var passwordInput = document.getElementById('register-input-password');
            var passwordIcon = document.getElementById('register-password-icon');

            if (passwordInput.type === 'password') {
                // If the password field is currently hidden, show it
                passwordInput.type = 'text';
                passwordIcon.name = 'eye-outline'; // Change the eye icon to open eye
            } else {
                // If the password field is currently visible, hide it
                passwordInput.type = 'password';
                passwordIcon.name = 'eye-off-outline'; // Change the eye icon to closed eye
            }
        }
        function toggleRegisterConfirmPasswordVisibility() {
            var confirmPasswordInput = document.getElementById('register-input-confirm-password');
            var confirmPasswordIcon = document.getElementById('register-confirm-password-icon');

            if (confirmPasswordInput.type === 'password') {
                // If the confirm password field is currently hidden, show it
                confirmPasswordInput.type = 'text';
                confirmPasswordIcon.name = 'eye-outline'; // Change the eye icon to open eye
            } else {
                // If the confirm password field is currently visible, hide it
                confirmPasswordInput.type = 'password';
                confirmPasswordIcon.name = 'eye-off-outline'; // Change the eye icon to closed eye
            }
        }
        function toggleResetNewPasswordVisibility() {
            var passwordInput = document.getElementById('reset-input-password');
            var passwordIcon = document.getElementById('reset-password-icon');

            if (passwordInput.type === 'password') {
                // If the password field is currently hidden, show it
                passwordInput.type = 'text';
                passwordIcon.name = 'eye-outline'; // Change the eye icon to open eye
            } else {
                // If the password field is currently visible, hide it
                passwordInput.type = 'password';
                passwordIcon.name = 'eye-off-outline'; // Change the eye icon to closed eye
            }
        }
        function toggleResetConfirmPasswordVisibility() {
            var confirmPasswordInput = document.getElementById('reset-input-confirm-password');
            var confirmPasswordIcon = document.getElementById('reset-confirm-password-icon');

            if (confirmPasswordInput.type === 'password') {
                // If the confirm password field is currently hidden, show it
                confirmPasswordInput.type = 'text';
                confirmPasswordIcon.name = 'eye-outline'; // Change the eye icon to open eye
            } else {
                // If the confirm password field is currently visible, hide it
                confirmPasswordInput.type = 'password';
                confirmPasswordIcon.name = 'eye-off-outline'; // Change the eye icon to closed eye
            }
        }
        function ValidateLoginForm() {
            RemoveAllErrorMessage();

            var LoginPassword = document.getElementById('input-password').value;
            var PasswordValidationMessage;
            
            PasswordValidationMessage = isValidPassword(LoginPassword);
            if(PasswordValidationMessage != "valid"){
                ShowErrorMessage('input-password',PasswordValidationMessage);
                return false;
            }
            
            return true;
        }
        function RemoveAllErrorMessage(){

            var allErrorMessage = document.getElementsByClassName('error-message');
            var allErrorFiled = document.getElementsByClassName('error-input');
            var i;

            for(i=(allErrorMessage.length - 1); i>=0; i--){
                allErrorMessage[i].remove();
            }

            for(i=(allErrorFiled.length-1);i>=0;i--){
                allErrorFiled[i].classList.remove('error-input');
            }
        }
        function ShowErrorMessage(InputBoxID,Message){

            var InputBox = document.getElementById(InputBoxID);
            InputBox.classList.add('error-input');
            InputBox.focus();

            var ErrorMessageElement = document.createElement("p");
            ErrorMessageElement.innerHTML = Message;
            ErrorMessageElement.classList.add('error-message');
            ErrorMessageElement.setAttribute("id",InputBoxID+'-error');

            InputBox.parentNode.insertBefore(ErrorMessageElement, InputBox.nextSibling);

        }
        function isValidEmail(email){

            const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if(email == ""){
                return "Please fill the field.";
            }

            if(emailRegex.test(email) == false){
                return "This is not a valid email.";
            }

            return "valid";
        }

        function isValidPassword(password) {

            const minLength = 8;
            const maxLength = 32;
            const letterNumberRegexSpecialChar = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,}$/;

            if(password == ""){
                return "Please fill the field."
            }

            if (password.length < minLength || password.length > maxLength) {
                return "Password length should be minimum 8 & maximum 32 characters.";
            }

            if (!letterNumberRegexSpecialChar.test(password)) {
                return "Password should contain alphabetic, numeric and special characters.";
            }
            return "valid";
        }
    </script>
    <script src="script3.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>