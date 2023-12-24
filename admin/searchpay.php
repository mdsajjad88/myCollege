<?php
include "dbConnec.php";
date_default_timezone_set("Asia/Dhaka");
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $select = $connection->prepare("SELECT * FROM payment_history WHERE student_id LIKE '%{$id}%' ");
    $select->execute();
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
        $result = "<tr><td>".$row['student_id']."</td> <td>".$row['name'].
                    "</td>
                    <td>"
                        .$row['fee_reason'].
                    "</td>
                    <td>
                        ".$row['payment_ammount']."
                    </td>
                    <td>
                        ".$row['payment_date']."
                    </td>
                    <td>
                        ".$row['payment_methode']."
                    </td>
                    <td>
                        ".$row['account_no']."
                    </td>
                    <td>
                    <button onclick='updating(".$row['student_id'].")' class='btn'>".$row['payment_status']."</button> 
                    </td> </tr>";
                    
                    echo $result;
    }
   
  
}

if(isset($_POST['mainid'])){
    $nowAmnt = $row['payment_ammount'];
    $amount = $row['today_collection'];
    $todayCollection = $amount + $nowAmnt;
    $time = date("Y-m-d h:i:sa");
    $date = date("Y-m-d");
    $mainid = $_POST['mainid'];
    $update = $connection->prepare("UPDATE payment_history SET payment_status = 'paid', accepting_date = '$time', accpt_date='$date' WHERE voucher_no = '$mainid'");
   $update->execute();   
}

?>
    