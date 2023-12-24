<?php
include "dbConnec.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Payment Riquest</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .btn{
            height: 40px;
            width: 110px;
            border-radius: 10px;
            background-color: rgb(10, 200, 200);
            color: black;
            font-family: 'Courier New', Courier, monospace;
        }
        .src{
            height: 50px;
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;

        }
        table{
            width: 100%;
        }
    </style>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
               <u> <h2 class="text-center"> All Payment Riquest </h2> </u> 
                </div>
            </div>
            <input type="search" name="search " id="search" class="src" placeholder="Search a payment history input student id">
            <table id="showdata" class="table table-striped">
             <thead class="bg-secondary text-light">
             <tr>
                <td> Student ID</td>
                <td>Student Name</td>
                <td>Fee Reason</td>
                <td>Pay Amount</td>
                <td>Payment Date</td>
                <td>Pay Method</td>
                <td>Account</td>
                <td>Update Status</td>
            </tr>
             </thead>  
            
            <!-- <tr id="showdata">

            </tr> -->
        <?php
        $payRiqu = $connection->prepare("SELECT * FROM payment_history WHERE payment_status = 'pending'");
        $payRiqu->execute();
        while($row = $payRiqu->fetch(PDO::FETCH_ASSOC)){
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
            <td>
               <button onclick="updating(<?= $row['voucher_no']?>)" class="btn" > <?= $row['payment_status'] ?></button> 
            </td>
            
        </tr>
       <?php } ?>
      
        </table>


        </div>
    </div>
   </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#search").keyup(function(){
            var id = $(this).val();
            $.ajax({
                url: "searchpay.php",
                method: "POST",
                data: {id:id},
                success:function(data){
                    $("#showdata").html(data);
                }
            })
        })
    })
    function updating(uid){
            var studentid = uid ;
        $.ajax({
            url: "searchpay.php",
            method: "POST",
            data: {mainid: studentid},
            success:function(){
                location.reload();
            }
        })
    }
</script>