<?php
error_reporting(0);
require  "dbConnec.php";
include "gmailsend.php";

if(isset($_POST['subbtn'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $studentName = $fname.''.$lname;
    $s_father = $_POST['fathername'];
    $s_mother = $_POST['mothername'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['sex'];
    $nidNo = $_POST['nid'];
    $past_school = $_POST['pastscl'];
    $passingYear = $_POST['passing_year'];
    $blood = $_POST['blood'];
    $department = $_POST['dept'];
    $contact = $_POST['contact'];
    $lastGPA = $_POST['lastresult'];
    $religion = $_POST['religion'];

    $folder = "studentIMG/";
    $profilePic = $_FILES['photo']['name'];
    $picPath = $_FILES['photo']['tmp_name'];
    $size = $_FILES['photo']['size'];

    $country = $_POST['country'];
    $marrital = $_POST['marrital_status'];
    $hometown = $_POST['town'];
    $email = $_POST['mail'];
    $otp = md5($birthday);
    $selectForm = $connection->prepare("SELECT * FROM onlineformdata WHERE email = '$email' ");
    $selectForm->execute();
    $count = $selectForm->rowCount();
    if(empty($fname) || empty($lname)||empty($s_father)||empty($s_mother)||empty($birthday)||empty($gender)||empty($nidNo)||empty($past_school)||empty($passingYear) ||empty($blood)||empty($department)||empty($contact)||empty($lastGPA)||empty($religion)||empty($profilePic)||empty($country)||empty($marrital)||empty($hometown)||empty($email)){
        $msg = "<div class='alert alert-danger'>Please input all fields</div>";
    }
    else if($count > 0){
        $msg = "<script>
        alert('Ooopps !! This G-mail already used. Please Chose another Gmail.');
    </script>";
    }
    else{

        move_uploaded_file($_FILES['photo']['tmp_name'], $folder.$profilePic);

        $insert = $connection->prepare("INSERT INTO onlineformdata(	student_name, father_name, mother_name, birthday, gender, nidno, past_school, passing_year,	blood, choice_department, contact, last_gpa, religion, photo_folder, photo_rename, country, marrital_status, hometown, email, OTP)VALUES ('$studentName', ' $s_father', '$s_mother', '$birthday', '$gender', '$nidNo', '$past_school', '$passingYear', '$blood', '$department', '$contact', '$lastGPA', '$religion', '$folder', '$profilePic', '$country', '$marrital', '$hometown', '$email', '$otp')");
        if($insert->execute()){
            $msg = "<div class='alert alert-success'> Thank you, $studentName . Your Data has been Submitted. We will verify you and then we have to confirmed by you. </div>";         
        }
        else{
            $msg = "<script>
                    alert('Something is illigal !! Please check your information.');
                    </script>";
        }
    }
   
}   


?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>
    
    <!-- CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css link end -->
    <style>
.clogo{
    border-radius: 50px;
}
    </style>
    
</head>

<body>
    <!-- Top start -->
    
    <?php 
    
    include "topbar.php";
    include "navbar.php"; ?>
    
    <div class="container bg-info shadow mt-3 mb-4">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-1">
                        <img class="mt-4 ml-5 clogo" src="all_image/logo.jpeg" height="60px" width="70px" alt="LOGO">
                    </div>
                    <div class="col-10">
                        <h1 class="mt-4 text-center" style=" font-size: 40px; font-family:arial">Rangpur Govt. College, Rangpur.</h1>

                        <h6 class="text-center">School Code : 127506 | College Code : 127508 | EIIN: 127511</h6>
                        <div class="row">
                            <div class="col">
                            <?php
                                if(isset($msg)){
                                    echo $msg;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="all_image/logo.jpeg" class="mt-4 mr-5 clogo" height="60px" width="70px" alt="LOGO">
                    </div>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row mt-2">
                        <div class="col-6">
                            Student First Name:
                            <input type="text" class="form-control" placeholder="Student First Name" name="fname" required>
                        </div>
                        <div class="col-6">
                            Student Last name:
                            <input class="form-control" type="text" placeholder="Input last Name" name="lname" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            Student Father Name:
                            <input type="text" class="form-control" placeholder="Father Name" name="fathername" required>
                        </div>
                        <div class="col-6">
                        Student Mother Name:
                            <input class="form-control" type="text" placeholder="Mother Name" name="mothername" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div>
                                Select your Birthday:
                                <input type="date" class="form-control" placeholder="Student Date of Birth" name="birthday" required>
                            </div>
                        </div>
                        <div class="col-6">
                        Choose Gender :
                            <div class="form-control" > &nbsp; &nbsp;
                                <input type="radio" name="sex" value="male"> &nbsp;Male  &nbsp; &nbsp;
                                <input type="radio" name="sex" value="female">  &nbsp; Female &nbsp; &nbsp;
                                <input type="radio" name="sex" value="others"> &nbsp; Others
                            </div>

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div>
                             NID/Birth Cirtificate no:
                                <input type="number" class="form-control" placeholder="Ex ... 548752159" name="nid" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                Past School Name:
                                <input type="text" class="form-control" placeholder="Student Past School" name="pastscl" required>
                                </div>
                                <div class="col-6">
                                    Passing Year:
                                    <input type="text" class="form-control" name="passing_year">
                                </div>
                            </div>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <div>
                            Select Blood Group
                            <select class="form-control" name="blood" id="">
                                <option value="">Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                <option value="O-">O-</option>

                            </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div>
                                Choose Your Department:
                                <select class="form-control" name="dept" id="">
                                <option value="">Select Department</option>
                                    <option value="science">Science</option>
                                    <option value="business">Business</option>
                                    <option value="humanitys">Humanitys</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                        <div>
                               Student Contact No:
                                <input type="number" class="form-control" placeholder="Student Contact" name="contact" required>
                            </div>
                        </div>
                        <div class="col-3">
                        <div>
                              SSC Result :
                                <input type="text" class="form-control" placeholder="Ex... (4.50)" name="lastresult" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                Enter Your Religion:
                                <input type="text" class="form-control" placeholder="Ex... Islam" name="religion" required>
                                </div>
                                <div class="col-6">
                                    Chose Your Photo:
                                    <input type="file" name="photo" class="form-control">
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-3">
                        <div>
                              Country:
                                <input type="text" class="form-control" placeholder="Ex...Bangladesh"  name="country" required>
                            </div>
                        </div>
                        <div class="col-3">
                        <div>
                              Marrital Status:
                               <select class="form-control" name="marrital_status" id="">
                                <option value=""> Select Marrital Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div>
                            Hometown:
                                <input type="text" class="form-control" placeholder="Ex ... Rangpur" name="town" required>
                            </div>
                        </div>
                        <div class="col-6">
                        <div>
                            E-mail Address:
                                <input type="gmail" class="form-control" placeholder="Student G-gmail" name="mail" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                     <div class="col-12">
                     <input type="submit" name="subbtn" value="Submit" class="btn btn-dark form-control">
                     </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include "footer.php"; ?>
    <!-- script link start -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!-- script link End -->
</body>

</html>