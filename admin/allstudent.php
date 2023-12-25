<?php
error_reporting(0);
include "dbConnec.php";
$regifrm = $connection->prepare("SELECT * FROM all_student");
$regifrm->execute();
$fetch = $regifrm->fetch(PDO::FETCH_ASSOC);
$mailid =  $fetch['gmail'];

$selectall = $connection->prepare("SELECT * FROM onlineformdata WHERE status = 'admitted' ");
$selectall->execute();
$count = $selectall->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <!-- CSS link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css link end -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- cdnjs -->
<title>All Student</title>
<style>
  #search{
    box-shadow: 10px 10px 5px lightblue;
  }
</style>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-6"> <h3>All Student Count No. <?= $count; ?></h3> </div>
        <div class="col-6"> <input type="search" name="search" id="search" class="form-control mr-4" placeholder="Search a Student ID"></div>
      </div>   
      <div class="row" id="onlyonestudent">
        <?php
             
              while($row = $selectall->fetch(PDO::FETCH_ASSOC)){    
                $uid = base64_encode($row['id'])         
              ?>
              <a href="../studenthome.php?id=<?= $uid ?>">
              <div class="col-lg-4 col-md-4 col-sm-6 mt-3 mb-3">
              <div class="card">
                    <div class="card">
                      <img src="../<?php echo $row['photo_folder'].$row['photo_rename'];  ?>" class="card-img-top" height="120px" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $row['student_name'];?></h5>
                        <p class="card-text"><?= $row['id']; ?></p>
                      </div>
                    
                  </div>
                  </div> 
              </a>
        </div>
        <?php   } ?>
    </div>
    </div>

</body>
</html>
<script>
  $(document).ready(function(){
    $("#search").keyup(function(){
      var stuid = $(this).val();
      $.ajax({
        url: "searchstudent.php",
        method: "POST",
        data:{stuid:stuid},
        success:function(data){
            $("#onlyonestudent").html(data);
        }
      })
    })
  })
</script>