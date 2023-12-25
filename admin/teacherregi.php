<?php
error_reporting(0);
include "dbConnec.php";

if (isset($_POST["subbtn"])) {

    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $contact = $_POST["contact"];
    $nid = $_POST['nid'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['sex'];
    $designation = $_POST['designation'];
    $department = $_POST['depart'];
    $subjet = $_POST['subject'];

    $folder = "teacheIMG/";
    $pic = $_FILES["photo"];
    $photo = $_FILES['photo']['name'];
    $path = $_FILES['photo']['tmp_name'];
    $size = $_FILES['photo']['size'];

    if (empty($gmail) || empty($contact) || empty($nid) || empty($birthday) || empty($gender) || empty($department) || empty($subjet) || empty($pic)) {
        $msg = "<div class='alert alert-danger text-dark'>Please Select all field and then press submit button </div>";
    } else {
        copy($_FILES['photo']['tmp_name'], $folder . $photo);
        $insert = $connection->prepare("INSERT INTO teacher_regi(teacher_name, teacher_gmail, contact, teacher_nid, birthday, gender, designation, department,subject , photo_folder, photo_rename) VALUES ('$name', '$gmail', '$contact', '$nid', '$birthday', '$gender', '$designation', '$department', '$subjet', '$folder', '$photo')");

        if ($insert->execute()) {

            $msg = "<script>
       alert('Registration Successfull')
       
      
       </script>";
        } else {
            $msg = "<div class='alert alert-danger'>Something wrong, please check your information and  try again. </div>";
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration Form</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css link end -->

    <!-- jquery link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery end -->
    <style>
        tr {
            width: 100%;
        }

        .bgc {
            background: blueviolet;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-secondary">
                <form method="post" enctype="multipart/form-data" class="form">
                    <h2 class="text-center text-light m-4">Employee Registration Form</h2>
                    <?php
                    if (isset($msg)) {
                        echo $msg;
                        exit;
                    }
                    ?>
                    <div class="row">
                        <div class="col-4"><label for="" class="form-control">Employee Name</label></div>
                        <div class="col-8"><input class="form-control " type="text" name="name"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">G-Mail</label></div>
                        <div class="col-8"><input class="form-control" type="gmail" name="gmail"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">Contact No.</label></div>
                        <div class="col-8"><input class="form-control" type="number" name="contact"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for=""> NID no.</label> </div>
                        <div class="col-8"><input class="form-control" type="number" name="nid"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">Birthday</label></div>
                        <div class="col-8"><input class="form-control" type="date" name="birthday"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">Gender</label></div>
                        <div class="col-8">
                            <div class="form-control">
                                <input type="radio" name="sex" value="Male">Male &nbsp; &nbsp;
                                <input type="radio" name="sex" value="Female">Female &nbsp; &nbsp;
                                <input type="radio" name="sex" value="Others"> &nbsp; Others
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">Designation</label></div>
                        <div class="col-8">
                            <select name="designation" class="form-control" id="">
                                <option value="">Select your Designation </option>
                                <option value="senior teacher">Senior Teacher</option>
                                <option value="junior teacher">Junior Teacher</option>
                                <option value="resigter">Register</option>
                                <option value="accountant">Accountant</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">Department</label></div>
                        <div class="col-8">
                            <select class="form-control" name="depart" id="dept">
                                <option value="">Choose Your Department</option>
                                <?php


                                $select = $connection->prepare("SELECT * FROM department");
                                $select->execute();
                                while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                    $deptid = $row['id'];
                                ?>
                                    <option id="<?= $row['id']; ?>" value="<?= $row['id']; ?>"><?= $row['dept_name']; ?></option>
                                <?php } ?>
                                <hr>
                                <hr>
                                <option value="register"><i>Register</i></option>
                                <option value="accountant"><b>Accountant</b></option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">Subject</label></div>
                        <div class="col-8">
                            <select class="form-control" name="subject" id="showsub">
                                <option value="">Select Your Subject</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="form-control" for="">Choose Photo</label></div>
                        <div class="col-8"><input class="form-control " type="file" name="photo"></div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12"><input class="form-control bg-dark text-white" type="reset" name="resetbtn" value="Reset All"></div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col-12">
                            <input type="submit" name="subbtn" value="Submit" class="form-control bg-primary text-light">
                        </div>
                    </div>
                </form>
                <div class="col-1"></div>
            </div>
        </div>
    </div>


</body>

</html>
<script>
    $(document).ready(function() {
        $("#dept").change(function() {
            var depid = $(this).val();
            $.ajax({
                url: "teacherRegiRespons.php",
                method: "POST",
                data: {
                    depid: depid
                },
                success: function(data) {

                    $("#showsub").html(data);
                }
            });
        });
    });
</script>