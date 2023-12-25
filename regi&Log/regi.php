<?php
error_reporting(0);
include "dbConnec.php";



if(isset($_POST["signup"])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['re_pass'];
    $password = password_hash($pass, PASSWORD_DEFAULT);

    $selectonlineform  = $connection->prepare("SELECT * FROM onlineformdata WHERE email = '$email'");
    $selectonlineform->execute();
    $rowcount = $selectonlineform->rowCount();
    $row = $selectonlineform->fetch(PDO::FETCH_ASSOC);
    $mainid = $row['id'];
    $dept = $row['choice_department'];

    $regiSelect = $connection->prepare("SELECT * FROM all_student WHERE gmail = '$email'");
    $regiSelect->execute();
    $count = $regiSelect->rowCount();

    if(empty($name)|| empty($email) || empty($pass)|| empty($repass)){

        $msg = "<div class ='alert alert-danger'> Please Input All Fields</div>";

    }
    if($count > 0){
        $msg = "<div class ='alert alert-danger'>Already Registered in this E-mail</div>";
    }
    else{
        if($pass == $repass){
            if($rowcount > 0){
                if(($row["status"] == "admitted")){
                    $insert = $connection->prepare("INSERT INTO all_student(application_id, name, gmail, password, department)VALUES('$mainid','$name', '$email', '$password', '$dept')");
                    if($insert->execute()){
                        $msg = "<div class ='alert alert-success'>Thank you !! Registration Successfull.
                        
                        </div>";
                        header("refresh:2 url= login.php");
                       }
                       else{
                       $msg = "<div class ='alert alert-danger'>Opps Sorry ! Something wrong !! Please Try again sometime later. </div>";
                       }
                }
                else{
                    $msg = "<div class ='alert alert-danger'>Ooops !! Currently your request is pending. Please Wait few days. If we can select you then you have to access this form registration</div>";
                }
            }
            else{
                $msg = "<div class ='alert alert-danger'>Ooops !! No Information found in this gmail, Please fill up first online admission form .</div>";
            }               
           
        }
        else{
            $msg = "<div class ='alert alert-danger'> Password Does not Match.</div>";
        }
      
    }
}         
 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up PASCR</title>
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h3 class="form-title">Student Sign up</h3>
                        <?php 
                        if(isset($msg)){
                            echo $msg;
                        }
                        
                        ?>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                     <b><a href="login.php" class="signup-image-link">I am already member</a>  </b>   
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>