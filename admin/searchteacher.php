<?php
error_reporting(0);
include "dbConnec.php";
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $allselect = $connection->prepare("SELECT * FROM teacher_regi WHERE id = '$id'");
    $allselect->execute();
    $row = $allselect->fetch(PDO::FETCH_ASSOC);

    $output =  " <div class='col-lg-4 col-md-4 col-sm-6 mt-3 mb-3'>
    <div class= 'card ' id='teacher' style='width: 18rem;'>
    <img src=".$row['photo_folder'].$row["photo_rename"]." class='card-img-top' height='150px' width='80px' alt='Loading'>
    <div class='card-body'>
        <h3>
            {$row['teacher_name']}
        </ht>
    
    </div>
    </div>
    </div>
    ";
}

echo $output;
?>