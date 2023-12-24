<?php
include "dbConnec.php";
if(isset($_POST['id'])){
    $uid = $_POST['id'];
    $select = $connection->prepare("DELETE FROM teacher_regi WHERE id = '$uid'");
    $select->execute();
}
if(isset($_POST['ttid'])){
    $userID = $_POST['ttid'];
    $update = $connection->prepare("UPDATE teacher_regi SET status = 'active'  WHERE id = '$userID'");
    $update->execute();
}


?>