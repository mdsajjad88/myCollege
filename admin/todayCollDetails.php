<?php
include "dbConnec.php";

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
    table{
        width: 100%;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
               <u> <h2 class="text-center"> Today Payment History </h2> </u> 
                </div>
            </div>
            <table class="table table-striped">
             <thead class="bg-info text-light">
             <tr>
                <td> Student ID</td>
                <td>Student Name</td>
                <td>Fee Reason</td>
                <td>Pay Amount</td>
                <td>Payment Date</td>
                <td>Pay Method</td>
                <td>Account</td>
               
            </tr>
             </thead>  
            
            <!-- <tr id="showdata">

            </tr> -->
            <?php
  $time = date("Y-m-d");
  $selt =  $connection->prepare("SELECT * FROM payment_history WHERE payment_status ='paid' AND accpt_date = '$time'");
  $selt->execute();
 
 while($row = $selt->fetch(PDO::FETCH_ASSOC)){
?>
        <tr>
            <td>
                <?= $row['student_id']?>
            </td>
            <td>
                <?= $row['name']?>
            </td>
            <td>
                <?= $row['fee_reason']?>
            </td>
            <td>
                <?= $row['payment_ammount']?>
            </td>
            <td>
                <?= $row['payment_date']?>
            </td>
            <td>
                <?= $row['payment_methode']?>
            </td>
            <td>
                <?= $row['account_no']?>
            </td>
            
        </tr>
       <?php } ?>
      
        </table>


        </div>
    </div>
   </div>
