<?php
error_reporting(0);
include "dbConnec.php";

if(isset($_POST['roll'])){
    $roll = $_POST['roll'];

    $encRoll = base64_encode($roll);

    if(empty($roll)||empty($regi)){
        echo  "<script>alert('Plase input roll and Registration.')</script>";
    }
    elseif(isset($roll)&& isset($regi)){
        $markTable = $connection->prepare("SELECT * FROM marksheet WHERE student_id = '$roll'");
        $markTable->execute();
        $count = $markTable->rowCount();
        if($count == 0){
            echo "<script> alert('Result not found')</script>";
            header("refresh:5 url = notfoundresult.php");
           
        }
        else{
            echo "<script>alert('Successfull !! Wait Few seconds') </script>";  

            header("refresh:3 url= myResult.php?roll=$encRoll");
        }
}
}
?>