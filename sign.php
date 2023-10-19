<?php
session_start();
$_SESSION["user"]["username"] = "";
$_SESSION["user"]["user_id"] = "";
include("connection.php");
$message = "";
if(isset($_POST["signup"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm'];


    $sql_select = "SELECT fullname, email FROM users WHERE email = '$email'";
    $select = mysqli_query($conn, $sql_select);
    if ($row = $select->fetch_assoc()) {
        $message = "Sorry, this E-mail had been taken, Kindly choose another one";
        echo mysqli_num_rows($select);
    }
    else {

        if($password === $confirm_password) {
            $sql_insert = "INSERT INTO users (fullname, email, password) VALUES ('$username', '$email', '$password')";
            $insert = mysqli_query($conn, $sql_insert);
            $message = "You have been registered successfully";
            $_SESSION["email"] = $email;
        }else{
            $message = "Password doesn't match";
        }   
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/sign.css">
         
    <title>Login & Registration Form</title> 
</head>
<body>
    

<?php

    if(strlen($message) > 0) {
        echo "<div style='
        position: absolute;
        top: 0;
        margin: auto;
        color: white;
        height:50px;
        font-size:17px;
        font: weight 700px;;
        width:100%;
        background-color:#d62b2bbf;

        padding: 10px 0;
       text-align: center;
        '>" . $message . "</div>";
        
        }
        if(isset($_REQUEST["errorMsg"])) {
            echo "<div style='
            position: absolute;
            top: 0;
            margin: auto;
            color: white;
            height:50px;
            font-size:17px;
            font: weight 700px;;
            width:100%;
            background-color:#d62b2bbf;
            padding: 10px 0;
            text-align: center;
            '>" . $_REQUEST["errorMsg"] . "</div>";
        }
?>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="index.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>
                    <a href="checkout.php">
                        <div class="input-field button">
                            <input type="submit" name="login" value="Login">
                        </div>
                    </a>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>



            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="#" method="POST">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="confirm" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="signup" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

     <script src="js/sign.js"></script> 
</body>
</html>