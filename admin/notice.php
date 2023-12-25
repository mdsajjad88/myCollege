<?php
include "dbConnec.php";
if(isset($_POST['subbtn'])){
    $no_sub = $_POST['subject'];
    $no_desc = $_POST['description'];
    if(empty($no_sub) || empty($no_desc)){
        echo "<script> alert('Please Input all field')</script>";
    }
    else{
        $insert = $connection->prepare("INSERT INTO noticeboard(notice_subject, notice_desc)VALUES('$no_sub', '$no_desc')");
        if($insert->execute()){
            $msg = "<p class='alert alert-success text-dark'> Successfully Added This Notice</p>";
        }
    }
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!--  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<div class="container mt-5" >
    
    <div class="row">
   <div class="col-2"></div> 
        <div class="col-8">
        <form action="" method="post">
        <h4 > <?php 
    if(isset ($msg)){
        echo $msg;
    }
    ?></h4>
        <div class="row">
            <div class="col-4">
            <label class="form-control bg-primary text-white" for="">Notice Subject</label>

            </div>
            <div class="col-8">
            <input  class="form-control" type="text" placeholder="Write your notice subject" name="subject">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
            <label class="form-control bg-primary text-white" for="">Description</label>
            </div>
            <div class="col-8">
            <textarea name="description" id="" cols="30" rows="6" class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-8">
                <input type="submit" class="btn btn-success form-control mt-2" name="subbtn">
            </div>
        </div>
        </div>
        </form>
        <div class="col-2"></div>
    </div>
</div>

