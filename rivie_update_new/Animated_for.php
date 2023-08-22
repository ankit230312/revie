<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "rivietechnology";

$conn = mysqli_connect($host, $user, $password, $database);


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM login_form WHERE email='" . $email . "' AND pass='" . $pass . "' LIMIT 1";
    
    $result = mysqli_query($conn, $query);
   
    if (mysqli_num_rows($result) == 1) {
        // Retrieve the user data from the result set
        $user = mysqli_fetch_assoc($result);

        // Store user data in session variables
        $_SESSION['email'] = $user['email']; 
        $_SESSION['pass'] = $user['pass']; 

        echo '<script>alert("You have Successfully Logged In.")</script>';
         header('Location: index.php');
        exit();
    } else {
        echo  '<script>alert("You have entered an incorrect email or password.")</script>';
        exit();
    }
}

function performLoginAuthentication()
{
    $isLoggedIn = performLoginAuthentication(); 

    if ($isLoggedIn) {
        // Redirect to the desired page after successful login
        header('Location: index.php');
        exit();
    } else {
        // Redirect back to the login page if authentication fails
        header('Location: Animated_for.php');
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Animated Form Using Html and CSS</title>
    <link rel="stylesheet" href="animated.css">
    <!-- Favicon -->
    <link href="img/favicon.jpeg" rel="icon">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="text" name="email" class="text-primary" required>
                    <label for="Email">Email</label>
                </div>

                <div class="input-box">
                    <input type="password" name="pass" class="text-primary" required>
                    <label for="password">Password</label>
                </div>

                <div class="forgot-pass">
                    <a href="">Forgot Your Password</a>
                </div>

                <button type="submit" class="btn">Login</button>
                <div class="signup-link">
                    <!-- <a href="index.php">Back To Home</a> -->
                </div>
            </form>

            <!-- <button type="button">Logout</button> -->

        </div>
        <span style="--i:0"></span>
    <span style="--i:1"></span>
    <span style="--i:2"></span>
    <span style="--i:3"></span>
    <span style="--i:4"></span>
    <span style="--i:5"></span>
    <span style="--i:6"></span>
    <span style="--i:7"></span>
    <span style="--i:8"></span>
    <span style="--i:9"></span>
    <span style="--i:10"></span>
    <span style="--i:11"></span>
    <span style="--i:12"></span>
    <span style="--i:13"></span>
    <span style="--i:14"></span>
    <span style="--i:15"></span>
    <span style="--i:16"></span>
    <span style="--i:17"></span>
    <span style="--i:18"></span>
    <span style="--i:19"></span>
    <span style="--i:20"></span>
    <span style="--i:21"></span>
    <span style="--i:22"></span>
    <span style="--i:23"></span>
    <span style="--i:24"></span>
    <span style="--i:25"></span>
    <span style="--i:26"></span>
    <span style="--i:27"></span>
    <span style="--i:28"></span>
    <span style="--i:29"></span>
    <span style="--i:30"></span>
    <span style="--i:31"></span>
    <span style="--i:32"></span>
    <span style="--i:33"></span>
    <span style="--i:34"></span>
    <span style="--i:35"></span>
    <span style="--i:36"></span>
    <span style="--i:37"></span>
    <span style="--i:38"></span>
    <span style="--i:39"></span>
    <span style="--i:40"></span>
    <span style="--i:41"></span>
    <span style="--i:42"></span>
    <span style="--i:43"></span>
    <span style="--i:44"></span>
    <span style="--i:45"></span>
    <span style="--i:46"></span>
    <span style="--i:47"></span>
    <span style="--i:48"></span>
    <span style="--i:49"></span>
        <!-- Rest of the code -->
    </div>
</body>
</html>
