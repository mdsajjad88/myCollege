<?php
include "dbConnec.php";
if($_POST['uid']){
    
    $id = $_POST['uid'];  
    $time = date("Y-m-d");
    // $attnSelect = $connection->prepare("SELECT * FROM attendence WHERE student_id = '$id' AND date = '$time' AND daily_status LIKE '%Present%' OR daily_status LIKE '%Absent%'");
    // $attnSelect->execute();
    // $count = $attnSelect->rowCount();
    // if($count > 0){
    //     echo "<script>alert('SORRY!! This id Already submitted his today status')</script>";
    // }
    // else{
        $insert = $connection->prepare("INSERT INTO attendence(student_id, daily_status, date)VALUES ('$id', 'Present', '$time')");
        if($insert->execute()){
            echo "<script> 
            alert('Today status successfully submitted.');
          window.location.reload()
            </script>"; 
        }
     
}


?>
