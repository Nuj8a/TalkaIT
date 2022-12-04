<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Talkait</title>
        <link rel="stylesheet" href="login.css">
</head>

<body>
    <div id="loginContainer">
        <div id="loginLogo">
                <span id="talkkait">TalkaIT</span>
                <span id="talkabout">talk about it</span> 
        </div>
        <div id="login">
            <form id="loginForm"  action="loginhandler.php" method="post">
                <label for="login_email">Email</label>
                <br>
                <input type="text" for="login_email" id="login_email" name="login_email" >
                <br>
                <br>
                <label for="login_password">Password</label>
                <br>
                <input type="password" for="login_password" id="login_password" name="login_password" >
                <!-- <button id="show"><img src="show.png"></button> -->
                <br>
                <br>
                <button type="submit" id="loginbtn" name="loginbtn">Log In</button>
                <br>
                <br>
                <hr>
            </form>
            <button id="popup">Sign Up</button>
        </div>
    </div>

    <div id="Signup" style="visibility: hidden">
        <form id="SignupForm" action="data.php" method="post">
            <button type="button" id="close">x</button>
            <span id="createAcc">Create an account :</span>
            <br>
            <br>
            <label for="signup_email">Enter your email:</label>
            <br>
            <input type="email" for="signup_email" id="signup_email" name="signup_email">
            <label for="signup_password">Enter new password:</label>
            <input type="password" for="signup_password" id="signup_password" name="signup_password">
            <label for="signup_password">Confirm password:</label>
            <input type="password" for="signup_password" id="signup_password" >
            <br>
            <hr>
            <!-- <div class="policy">
                <input type="checkbox" for="checkbox" id="checkbox">
                <span id="terms">By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies
                    Policy.</span>
            </div> -->
            <button type="submit" id="signupbtn">Sign Up</button>
        </form>
    </div>

    <script src="login.js"></script>
</body>

</html>