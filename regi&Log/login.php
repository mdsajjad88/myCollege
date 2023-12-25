<?php
session_start();
include "dbConnec.php";

if(isset($_POST['signin'])){
    $gmail = $_POST['your_name'];
    $password = $_POST['your_pass'];
    $selectDta = $connection->prepare("SELECT * FROM all_student WHERE gmail = '$gmail'");
    $selectDta->execute();
    $count = $selectDta->rowCount();
    $row = $selectDta->fetch(PDO::FETCH_ASSOC);
    if(empty($gmail) || empty($password)){
        $msg = "<div class='alert alert-danger'>Please input first and then press login button</div>";
    }
    else if($count > 0){
        if(password_verify($password, $row['password'])){
            $formO= $connection->prepare("SELECT * FROM onlineformdata WHERE email = '$gmail'");
            $formO->execute();
            $row4 = $formO->fetch((PDO::FETCH_ASSOC));

            $_SESSION['id'] = $row['id'];
            $studentid = $row4['id'];

          $getid =  base64_encode($studentid);
            $_SESSION['mail'] = $row['gmail'];
            $msg = "<div class='alert alert-success'>Log in Successfull. Wait few Seconds.....</div>";
            header("refresh:1 url= ../studenthome.php?id=$getid");
        }
        else{
            $msg = "<div class='alert alert-danger'>Incorrect Password</div>";
        }
    }
    else{
        $msg = "<div class='alert alert-danger'>No account found in this gmail, Please registration first.</div>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
   <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="regi.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h3 class="form-title"> Student Sign in</h3>
                        <?php
                        if(isset($msg)){
                            echo $msg;
                        }
                        ?>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>