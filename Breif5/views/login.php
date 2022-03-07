<?php
// session_start();
if (isset($_SESSION['id'])) {
    Redirect::to('./');
}






if (isset($_POST['registre'])) {
    $createUser = new UsersController();
    $createUser->register();
}
if (isset($_POST['submit'])) {
    $login = new UsersController();
    $login->auth();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div class=" row">
    <link rel="stylesheet" href="../public/assets/styles/login.css">
    <link rel="stylesheet" href="../public/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="../public/assets/img/top.jpg" alt="">

                <div class="text">
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <img src="../Assets/img/login-img.jpg" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">

            <div class="form-content">

                <div class="login-form">
                    <?php include('./views/includes/alerts.php'); ?>
                    <div class="title">Login</div>
                    <form method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" placeholder="Enter your login" name="login" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" name="password" required>
                            </div>
                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Sumbit" name="submit">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label for="flip">Create an account</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="signup-form">

                    <div class="title">Sign-up</div>
                    <form method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your login" name="login" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Enter your email" name="email">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" name="password" required>
                            </div>
                            <!-- <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirmed your password" name="Cpassword" required>
                            </div> -->
                            <div class="button input-box">
                                <input type="submit" value="Registre" name="registre">
                            </div>
                            <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>