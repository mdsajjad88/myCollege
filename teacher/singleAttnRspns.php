<?php
error_reporting(0);
include "dbConnec.php";

if(isset($_POST['myRoll'])){
    $id = $_POST['myRoll'];
    $studentSelect = $connection->prepare("SELECT * FROM attendence WHERE student_id = '$id'");
    $studentSelect->execute();
    while($row = $studentSelect->fetch(PDO::FETCH_ASSOC)){
    $mr = "<tr>
        <td>".$row['student_id']."</td>
        <td> ".$row['date']." </td>
        <td>".$row['daily_status']."</td>
    </tr>";
    
    }
   echo "okay";
}



?>