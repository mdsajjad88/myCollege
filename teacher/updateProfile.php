<?php
error_reporting(0);
include "dbConnec.php";

$tid = $_SESSION['accountID'];

if(isset($_POST['updateGmail'])){
    $gmail = $_POST['newGmail'];
    if(empty($gmail)){
        echo "<script> alert(' Please input gmail id')</script>";
     
    }
    else{
        $upGmail = $connection->prepare("UPDATE teacher_regi SET teacher_gmail = '$gmail' WHERE id = '$tid'" );
        if($upGmail->execute()){
            echo "<script> alert('Gmail Updated Successfully')</script>";
        }
    }
}
if(isset($_POST['updateContact'])){
    $contact = $_POST["contact"];
    if(empty($contact)){
        echo "<script> alert(' Please input Contact no ')</script>";
    }
    else{
        $upContact = $connection->prepare("UPDATE teacher_regi SET contact = '$contact' WHERE id = '$tid'" );
        if($upContact->execute()){
            echo "<script> alert('Contact No Updated Successfully')</script>";
        }
    }

}

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--  -->
<div class="container">
    <div class="row">
        <div class="col">
        
<h3 class="bg-info text-light text-center" id="result">Update Personal Information</h3>
                <div class="editing p-5">
               
                
                <form action="" method="post">
                <div class="row mt-2">
                        <div class="col-6 ">
                            Update G-mail
                        </div>
                        <div class="col-6" >
                            <input type="gmail" name="newGmail" class="form-control" placeholder="Input new G-mail">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="submit" name="updateGmail" value="Update" class="form-control bg-secondary text-white">
                        </div>
                    </div>  
                </form>
                 <form action="" method="post"> 
                    <div class="row mt-2">
                        <div class="col-6" class="form-control">
                            Update Contact No
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control" name="contact" placeholder="Input New Contact">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="submit" name="updateContact" value="Update" class="form-control bg-secondary text-white">
                        </div>
                    </div>
                </form>
                </div>
    
                </div>
    </div>
</div>