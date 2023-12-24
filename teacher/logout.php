<?php
session_start();
if(isset($_SESSION['accountID']) ||  ($_SESSION['tgmail'])){
    session_destroy();
    header("location: login.php");
}

?>