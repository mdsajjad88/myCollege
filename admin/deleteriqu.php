<?php
include "dbConnec.php";
if(isset($_POST['userid'])){
    $id = $_POST['userid'];
    $dataSelect = $connection->prepare("DELETE FROM onlineformdata WHERE id = '$id'");
    $dataSelect->execute();
   
}

?>