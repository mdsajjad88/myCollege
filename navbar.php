<?php
session_start();
error_reporting(0);
include "dbConnec.php";

?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  

    <style>
        #navbarNav ul li:hover {
            background-color: rgb(100, 180, 250);

        }

        #navbarNav ul li a:hover {
            color: white;
        }

        #navbarNav ul li a {
            color: orange;
        }

        .myNav {
            background-color: rgb(150, 10, 50);
            
        }
        #brnd{
            border-radius: 40px;
        }
</style>

    <nav class="navbar navbar-expand-lg navbar-light myNav sticky-top">
        <a class="navbar-brand" href="index.php"><img src="all_image/brand.png" id="brnd" alt="Brand" height="40px" width="60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><b>About Us</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="department.php"><b>Department</b></a>
                </li>

               
                <li class="nav-item">
                    <a class="nav-link btn-hover" href="gallery.php"><b>Gallery</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payfee.php"><b>Pay Fee</b></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="admissionForm.php"><b>Admission Form</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resultriqu.php"><b>Result</b></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php 
                if(isset($_SESSION['admin'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="admin/index.php"><b>Admin Panel</b></a>
                </li>
                <?php } ?>
                <?php 
                if(isset($_SESSION['tgmail'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="teacher/index.php"> <b>Teacher Panel</b> </a>
                </li>
                <?php } ?> 
              
                <li class="nav-item">
                    <a class="nav-link" href="regi&Log/regi.php"><b>Registration</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="regi&Log/login.php"><b>Log In</b></a>
                </li>
            </ul>
        </div>
    </nav>
  