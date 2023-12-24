<?php
error_reporting(0);
include "dbConnec.php";

if(isset($_POST['myData'])){
    $id = $_POST['myData'];
    $sel = $connection->prepare("SELECT * FROM marksheet WHERE student_id = '$id'");
    $sel->execute();
    $count = $sel->rowCount();


    if($count > 0 ){
        echo "<b class='alert alert-warning text-dark form-control container-fluid'>Already added this Student data</b>";
    }
    else{
        $seldata = $connection->prepare("SELECT * FROM onlineformdata WHERE id = '$id'");
        $seldata->execute();
        $dataCount = $seldata->rowCount();
        $rowing= $seldata->fetch(PDO::FETCH_ASSOC);
        if($dataCount == 0){
            echo "<b class='alert alert-danger text-dark form-control container-fluid'>Not Student in this id</b>";
        }
        else{

            // $select = $connection->prepare("SELECT * FROM onlineformdata WHERE id = '$id'");
            // $select->execute();
            // $row =  $select->fetch(PDO::FETCH_ASSOC);
            echo $rowing['student_name'];
        }
       
    }

   

}

?>