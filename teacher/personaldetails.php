<?php
error_reporting(0);
include "dbConnec.php";
$tid =  $_SESSION['accountID'];
$selectall = $connection->prepare("SELECT * FROM teacher_regi WHERE id = '$tid'");
$selectall->execute();
$row = $selectall->fetch(PDO::FETCH_ASSOC);


?>
<div class="container">
    <div class="row">
        <div class="col ">
            <h2 class="text-center bg-secondary text-light">Teacher Personal information</h2>
            <div class="p-5">
            <div class="row">
                <div class="col-6">
                    <h5>Teacher Name :</h5>
                </div>
                <div class="col-6">
                <h5><?= $row['teacher_name']?></h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h5> Teacher ID :</h5>
                </div>
                <div class="col-6"> 0000<?= $row['id']?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h5>Teacher G-mail</h5>
                </div>
                <div class="col-6">
                    <h5> <?= $row['teacher_gmail']?></h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h5>Contact No </h5>
                </div>
                <div class="col-6">
                <h5> <?= $row['contact']?></h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                <h5>Teacher nid No</h5>
                </div>
                <div class="col-6">
                <h5> <?= $row['teacher_nid']?></h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h5>Birthday</h5>
                </div>
                <div class="col-6">
                <h5> <?= $row['birthday']?></h5>    
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h5>Gender</h5>
                </div>
                <div class="col-6">
                <h5> <?= $row['gender']?></h5>    
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h5>Designation</h5>
                </div>
                <div class="col-6">
                <h5> <?= $row['designation']?></h5>    
                </div>
            </div>
            <hr>
            </div> 
            
        </div>
    </div>
</div>
