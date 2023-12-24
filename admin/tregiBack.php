<?php 

error_reporting(0);
include "dbConnec.php";

if(isset($_POST["subbtn"])){

    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $contact = $_POST["contact"];
    $nid = $_POST['nid'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['sex'];
    $department = $_POST['depart'];
    $subjet = $_POST['subject'];

    $folder = "teacheIMG/";
    $pic = $_FILES["photo"];
    $photo = $_FILES['photo']['name'];
    $path = $_FILES['photo']['tmp_name'];
    $size = $_FILES['photo']['size'];

 if(empty($name) || empty($gmail) || empty($contact) || empty($nid) || empty($birthday)|| empty($gender)|| empty($department) || empty($subjet) || empty($pic)){
    $msg = "<div class='alert alert-danger'>Please Select all field and then press submit button </div>";
 }  

    $insert = $connection->prepare("INSERT INTO teacher_regi(teacher_name, teacher_gmail, contact, teacher_nid, birthday, gender, department,subject , photo_folder, photo_rename) VALUES ('$name', '$gmail', '$contact', '$nid', '$birthday', '$gender', '$department', '$subjet', '$folder', '$photo')");

    if($insert->execute()){
        copy($_FILES['photo']['tmp_name'], $folder.$photo);
       $msg = "<div class='alert alert-success'>Registration successfull</div>";
    }
    else{
        $msg = "<div class='alert alert-danger'>Something wrong, please check your information and  try again. </div>";
    }
}

?>