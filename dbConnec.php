<?php
try{
    $connection = new PDO("mysql:host=localhost;dbname=myschool", "root", "");
}
catch(PDOException $e){
  echo  $e->getMessage();
}

?>