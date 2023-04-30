<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style4.css">
    <style>
        
    </style>

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
                <button>Registration</button>
            </div>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#" class="forgotpassword-link">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <div id="formSwitchBtn">
                <button>Login</button>
                <button class="active">Registration</button>
            </div>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Name</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Confirm Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button class="nextregister-linkbtn">Next</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>

        <div class="form-box forgotpassword">
            <h2>Forgot Password</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div> 
                <button type="submit" class="resetpassword-linkbtn">Reset Password</button>
                <div class="login-register">
                    <p>Back to <a href="#" class="login-link2">Login</a></p>
                </div>
            </form>
        </div>

        <div class="form-box resetpassword">
            <h2>Reset Password</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>New Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Confirm Password</label>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>

        <div class="form-box petregister">
            <h2>Registration</h2>
            <div id="formSwitchBtn">
                <button>Login</button>
                <button class="active">Registration</button>
            </div>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Pet Name</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="number" min="0.5" max="10" step="0.5" required>
                    <label>Pet Age</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input list="types" name="type" required>
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
                    <input list="genders" name="gender" required>
                    <datalist id="genders">
                        <option value="Male">
                        <option value="Female">
                    </datalist>
                    </input>
                    <label>Gender</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" required>
                    <label>Owner Contact No.</label>
                </div> 
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <div class="btn-box">
                    <button class="previousregister-linkbtn">Return</button>
                    <button type="submit" class="registerbtn">Register</button>
                </div>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link3">Login</a></p>
                </div>
            </form>
        </div>

    </div>

    <script src="js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>