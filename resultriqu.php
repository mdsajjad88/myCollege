<?php
include "dbConnec.php";
?>
 <?php
if(isset($_POST['subbtn'])){
    $roll = $_POST['roll_no'];
    $regi = $_POST['regi_no'];
    if(empty($roll) || empty($regi)){
        $msg =  "<p class='alert text-center mt-3 resl'> Please input all field and then press submit button <p>";
    }
    else{
        $markTable = $connection->prepare("SELECT * FROM marksheet WHERE student_id = '$roll'");
        $markTable->execute();
        $count = $markTable->rowCount();
        if($count > 0){
            $msg = "<p class='alert text-center mt-3 sccs'> Success!! wait few seconds <p>";  
            header("refresh:2; url= myResult.php?roll=$roll");
        }
        else{
            echo "<script> alert('Result not found')</script>";
        }
}
}
?> 

<!-- jQuery Link start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jquery end -->
<style>
    #head{
        border-radius: 10px;
    }
    #logo{
        border-radius: 20px;
    }
    .infor{
        border: 1px solid black;
        border-radius: 10px;
    }
    #linking{
        color: white;
    }
    .maindiv{
        background-color: lightgray;
    }
    .inhead{
        border-radius: 5px;
        border-style: none;
    }
    .resl{
        background-color: darkred;
        color: white;
    }
    .sccs{
        background: green;
        color: white;
    }
</style>

<?php
include "topbar.php";
include "navbar.php"
?>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
        <div class="container mt-5 p-5 mb-4 maindiv">
    <div class="row " >
        
        <div class="col bg-success" id="head">
            <div class="row">
                <div class="col-2">
                    <img src="all_image/logo.jpeg" height="70px" width="100%" id="logo" alt="">
                </div>
                <div class="col-10 text-center">
                    <h6 class="mt-2 text-light">WEB BASED RESULT PUBLICATION SYSTEM FOR EDUCATION BOARDS</h6>
                    <h6 class="text-light">JSC/JDC/SSC/DAKHIL/HSC/ALIM AND EQUIVALENT EXAMINATION</h6>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-12" id="show">
                <?php 
                if(isset($msg)){
                    echo $msg;
                }
                
                ?>
        </div>
    </div>
    <div class="row">
        
        <div class="col mt-5">
            <div class="container infor">
                <div class="row">
                    <div class="col bg-secondary text-light inhead p-3">
                    Please provide information for result <a id="linking" href="#">(User Guide)</a> <a id="linking" href="#">(Home) </a> <a id="linking" href="#">(Statistics)</a>
                    </div>
                </div>
                <form action="" method="post" id="myForm">

                <div class="row mt-5 p-3">
                    <div class="col-6">Student Roll No.</div>
                    <div class="col-6"><input type="number" id="roll" class="form-control" name="roll_no"></div>
                </div>
                <div class="row p-3">
                    <div class="col-6">Student Regi No.</div>
                    <div class="col-6"><input type="number" class="form-control" name="regi_no"></div>
                </div>
                <div class="row p-3">
                    <div class="col-6"></div>
                    <div class="col-6"><input type="submit" class="form-control btn btn-primary" name="subbtn" id="submitBTN" value="Submit"></div>
                </div>
                </form>
            </div>
        </div>
        
       
    </div>
</div>

        </div>
        <div class="col-2"></div>
    </div>
</div>








<?php
include "footer.php";

?>

<!-- <script>
    $(document).ready(function(){
        $("#submitBTN").click(function(){
            var roll = $("#roll").val();
        $.ajax({
        url: "resultGPA.php",
        method : "POST",
        data: {roll:roll},
        success:function(data){
            $("#show").html(data)
        }

    }); 
})
       

 });
   
   
</script> -->
