<?php
error_reporting(0);
include "dbConnec.php";

if(isset($_POST['dept'])){
    $time = date("Y-m-d");
    $dept = $_POST['dept'];
    $select = $connection->prepare("SELECT * FROM all_student WHERE department = '$dept'");
    $select->execute();
 
    while($row= $select->fetch(PDO::FETCH_ASSOC)){
      $mid =  $row['application_id'];
        $attnSlct = $connection->prepare("SELECT * FROM attendence WHERE student_id = '$mid' AND date = '$time' ");
        $attnSlct->execute();
        $count = $attnSlct->rowCount();
        if($count == 0){
         
        $msg =  "<tr>
                    <td>".$row['application_id']."</td>
                    <td>".$row['name']."</td>
                    <td><button  onclick= 'present(".$row['application_id'].")' class='btn btn-success'>Present </td>
                    <td><button id='feed' onclick= 'absent(".$row['application_id'].")' class='btn btn-warning'>Absent </td>
                </tr>";
          
        echo $msg;
    }
}
}


?>
