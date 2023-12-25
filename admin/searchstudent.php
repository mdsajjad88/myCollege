<?php
include "dbConnec.php";
$profile = "";
if(isset($_POST['stuid'])){
    $id = $_POST['stuid'];
    $select = $connection->prepare("SELECT * FROM onlineformdata WHERE id LIKE '%{$id}%'");
    $select->execute();
    while($row = $select->fetch(PDO::FETCH_ASSOC)){             
        
     $profile .=   "<div class='card-deck col-4'>
          <div class='card'>
            <img src='../{$row['photo_folder']}{$row['photo_rename']}' class='card-img-top' height='100px' width='75px' alt='Photo Not Loading'>
            <div class='card-body'>
              <h5 class='card-title'>{$row['student_name']}</h5>
              <p class='card-text'>{$row['id']}</p>
            </div>
          
        </div>
  </div>";

    } 
} 
echo $profile;
?>

