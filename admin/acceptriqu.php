<?php
include "dbConnec.php";

if(isset($_POST['uid'])){
    $id = $_POST['uid'];
    $select = $connection->prepare("UPDATE onlineformdata SET status = 'admitted' WHERE id = '$id'");
    $select->execute();
    echo $id;
}

?>