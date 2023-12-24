<?php


//thats not working
session_start();
if(isset($_SESSION['id']) && ($_SESSION['mail'])){
    session_destroy();
    header("location: login.php");
}

?>