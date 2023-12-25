<?php
error_reporting(0);
include "dbConnec.php";
if(isset($_POST['subbtn'])){
    $mydate=getdate(date("U"));


   $id = $_POST['studentid'];

   $select = $connection->prepare("SELECT * FROM onlineformdata WHERE id LIKE '$id'");
   $select->execute();
   $row = $select->fetch(PDO::FETCH_ASSOC);

   $selectpay = $connection->prepare("SELECT * FROM payment_history WHERE student_id ='$id'");
   $selectpay->execute();

   
   while($payRow = $selectpay->fetch(PDO::FETCH_ASSOC)){
        $pay = $payRow['payment_ammount'];
        $newPay = $payRow['total_pay'];
   }

   $name = $row['student_name'];
   $gmail = $row['email'];
   $payAmount = $_POST['amount'];
   $method = $_POST['method'];
   $ACno = $_POST['account'];
   $pass = $_POST['pass'];
   $reasons = $_POST['feereason'];

   $fee = 30000;
   $totalPay = $newPay + $payAmount;

   $due = $fee - $totalPay;

  
  
   if(empty($payAmount)|| empty($method)||empty($ACno)||empty($pass)){
    $msg = " <script>alert('Please select and input all data & then press payment button')</script>";
   }
   else{
    $insert = $connection->prepare("INSERT INTO payment_history(student_id, name, gmail,fee_reason, payment_ammount, total_pay, payment_methode, account_no, current_due) VALUES('$id', '$name', '$gmail','$reasons', '$payAmount','$totalPay','$method', '$ACno', '$due')");
    if($insert->execute()){
        $msg = "
        <script>alert('Payment Successfull ... Show Below Your invoice')</script>
        <div class='alert alert-light'>
        <h2> Payment Successfull</h2> 
        <div class='row'>
            <div class='col-6'>
            Student name 
            </div>
            <div class='col-6'> $name </div>
            
        </div>
        <div class='row'>
            <div class='col-6'>Total Fee </div>
            <div class='col-6'> $fee </div>
        </div>
        <div class='row'>
            <div class='col-6'>Payment Amount</div>
            <div class='col-6'> $payAmount </div>
        </div>
        <div class='row'>
            <div class='col-6'>Total Pay</div>
            <div class='col-6'> $totalPay </div>
        </div>
        <hr>
        <div class='row'>
            <div class='col-6'>Due Bil---------------------------------</div>
            <div class='col-6'> $due </div>
        </div>
        <div class='row'>
            <div class='col-6'> $mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]</div>
            <div class='col-6'> <button onclick='window.print()'>Print this page</button> </div>
        </div>
       
        
        </div>";
    }
    else{
        $msg = " <script>alert('Something Wrong Please try again.')</script>";
    }
   }
}


?>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!--  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--  -->

    <style>
        #fuldiv{
            min-height: 600px;
        }
        .profile{
            border-radius: 50%;
        }
    </style>


    <div class="container p-5 bg-secondary">
        <div class="row">
            <div class="col-1"></div>
            
           <div class="col-10 text-light">
           <h4 >Payment System: </h4> <h6> Select Fee Reason >> Search Student Id >> Check Your Details and Input Amount >> Select Methode >> Enter Account >> Enter Password and then press Payment Button</h6>
           </div>
           
           <div class="col-1"></div>
        </div>
   



 <div id="fuldiv" class="">

 
    <form action="" method="post">
        <div>
       
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h2 class="bg-secondary text-center text-light ">Student Payment Form</h2>
                    <select name="feereason" class="form-control" id="">
                        <option value="">Select Fee Reason</option>
                        <option value="admission fee">Admission Fee</option>
                        <option value="registration fee">Registration Fee</option>
                        <option value="monthly fee">Monthly Fee</option>
                        <option value="tution fee">Tution Fee</option>
                        <option value="books fee">Books Fee</option>
                    </select>
                    <input type="search" name="studentid" class="form-control" id="search" placeholder="Search your Student ID" >
                   
                    
                    <div class="row mt-3" id="showinfo">
                        <div class="col"> <?php 
                    if(isset($msg)){
                        echo $msg;
                    }
                    
                    ?> 
              
                </div>
                       
                       </div>
                    </form>
                    
                </div>
                <div class="col-3">
                    <div class="row" id="amountdetails">

                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        </div>  
        </div>
<script>
    $(document).ready(function(){
        $("#search").keyup(function(){
            var id = $(this).val();
            $.ajax({
                url: "payresponse.php",
                method: "POST",
                data: {uid: id},
                success: function(data){
                    $("#showinfo").html(data);
                }
            });
        });
    });
</script>

