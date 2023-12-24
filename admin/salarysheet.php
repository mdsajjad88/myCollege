<?php
include "dbConnec.php";
error_reporting(0);
// Some problem in this page and salaryinset page..........check me let

if(isset($_POST['subbtn'])){
    $techer_id = $_POST['techer_id'];
    $basic = $_POST['basic'];
    $houserent = $_POST['house'];
    $medical = $_POST['medical'];
    $coveyance = $_POST['coveyance'];
    $monthly = $_POST['monthly'];
    $total = $basic + $houserent + $medical + $coveyance + $monthly ;   

    if((empty($techer_id)) || (empty($basic)) || (empty($houserent)) || (empty($medical)) || (empty($coveyance))){
        $msg = "<script> alert('Input All field and then press Submit button')</script>"; 
        
    }
    else{
       
        $sel = $connection->prepare("SELECT * FROM salarysheet WHERE teacher_id = '$techer_id'");
        $sel->execute();
        $cnnt = $sel->rowCount();
        if($cnnt > 0){
            $msg =  "<script> alert('Already Submitted this Employee Salary')</script>";
        } 
        else{
            $insert = $connection->prepare("INSERT INTO salarysheet(teacher_id, basic, houserent, medical,coveyance, bonus, total) VALUES ('$techer_id', '$basic', '$houserent', '$medical', '$coveyance', '$monthly', '$total')");
            if($insert->execute()){
                    $msg = "<div class='alert alert-success text'> Salary Inserted Successsfully; </div>"; 
                }
                else{
                $msg =  "<script> alert('Somthing Wrong Please Try Again')</script>"; 
                }
            }
            
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    #star{
        color: red;
    }
</style>

</head>
<body>
    <div class="container">
<div class="row">

        <div class="col-2"></div>
        
            <div class="col-8">
            <u> <h2 class="text-center mb-5">Employee Salary Sheet</h2></u>
            <p >
    <?php
    
    if(isset($msg)){
        echo $msg;
    }
    
    
    ?>
                 </p>
                <form action="" method="post" id="salary">
                   
                        <div class="row">
                            <div class="col-6">
                            <label class="form-control bg-secondary text-light" for="">Input Employee Id<span id="star">*</span></label>
                            </div>
                            <div class="col-6">
                          <input type="number" id="teacher_id" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <label class="form-control bg-secondary text-light" for="">Employee Name<span id="star">*</span></label>
                            </div>
                            <div class="col-6">
                          <div id="empName" class="form-control"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <label class="form-control bg-secondary text-light" for="">Basic Salary<span id="star">*</span>
                            </div></label>
                            <div class="col-6">
                            <input type="number" name="basic" class="form-control" placeholder="Input Basic Salary">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <label class='form-control bg-secondary text-light'  for="">House Rent<span id="star">*</span></label>
                            </div>
                            <div class="col-6">
                            <input  class='form-control ' type="number" name="house" placeholder="Input House Rent">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <label class='form-control bg-secondary text-light'  for="">Medical Allowance<span id="star">*</span></label>
                            </div>
                            <div class="col-6">
                            <input class='form-control'  type="number" name="medical" placeholder="Input Medical Allowance">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                           
                            <label  class='form-control bg-secondary text-light' for="">Coveyance Allowance <span id="star">*</span></label>
                            </div>
                            <div class="col-6">
                            <input class='form-control'  type="number" name="coveyance" placeholder="Input Coveyance Allowance">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <label  class='form-control bg-secondary text-light' for="">Monthly Bonus </label>
                            </div>
                            <div class="col-6">
                            <input class='form-control'  type="number" name="monthly" placeholder="Input Monthly Bonus">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input  type="submit" class="btn btn-success form-control" name="subbtn" id="subbtn">
                            </div>
                        </div>
                  
                </form>
            </div>
        <div class="col-2"></div>
    
        </div>
    </div> 

    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#teacher_id").keyup(function(){
            var tid = $(this).val();
            $.ajax({
                url: "salaryinsert.php",
                method: "POST",
                data:{myData:tid},
                success:function(result){
                    
                    $("#empName").html(result);
                }
            })
        })
    })
</script>