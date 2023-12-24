<?php
include "dbConnec.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Pending Riquest</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css link end -->

    <!-- jquery link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery end -->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <u><h2 class="text-center">All Teacher Riquest</h2></u>
                <table class="table table-striped">
                    <thead class="bg-secondary text-light">
                        <tr>
                            <th> Teacher ID  </th>
                            <th> Teacher Name  </th>
                            <!-- <th> Teacher G-mail  </th>
                            <th> Contact   </th>
                            <th> Teacher NID </th>
                            <th> Birthday </th>
                            <th> Gender</th> -->
                            <th> Designation</th>
                            <th> Department</th>
                            <th> Subject</th>
                            <th> Status</th>
                            <th>Delete</th>
                            <th>Accept</th>
                        </tr>
                    </thead>
                    <?php
                    $tpending = $connection->prepare("SELECT * FROM teacher_regi WHERE status = 'pending'");
                    $tpending->execute();
                    while($row = $tpending->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                        <td> <?=  $row['id'] ?> </td>
                        <td> <?=  $row['teacher_name'] ?> </td>
                        <!-- <td> <?=  $row['teacher_gmail'] ?> </td>
                        <td> <?=  $row['contact'] ?> </td>
                        <td> <?=  $row['teacher_nid'] ?> </td>
                        <td> <?=  $row['birthday'] ?> </td>
                        <td> <?=  $row['gender'] ?> </td> -->
                        <td> <?=  $row['designation'] ?> </td>
                        <?php  
                            $did = $row['department'] ;
                         $dept = $connection->prepare("SELECT * FROM department WHERE id = '$did'");
                         $dept->execute();
                         $road = $dept->fetch(PDO::FETCH_ASSOC);

                        ?>
                        <td> <?= $road['dept_name'] ?> </td>
                            <?php
                            $subID = $row['subject'];
                            $sub = $connection->prepare("SELECT * FROM subject WHERE id = '$subID'");
                            $sub->execute();
                            $subrow = $sub->fetch(PDO::FETCH_ASSOC);
                            ?>

                        <td> <?= $subrow['subject_name'];  ?> </td>
                        <td><button class="btn btn-warning"><?=  $row['status'] ?></button></td>
                        <td> <button onclick="deleteid(<?=  $row['id'] ?>)" class="btn btn-danger"> Delete</button>  </td>
                        <td> <button onclick="acceptme(<?=  $row['id'] ?>)" class="btn btn-success"> Accept </button>  </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<script>
   function deleteid(uid){
   $okay =  confirm("Are your sure want To Delete?")
   if($okay == true){
    var studentid = uid;
    $.ajax({
        url: "deletetech.php",
        type: "POST",
        data: {id:studentid},
        success:function(){
            location.reload();
        }
    })

   }
    
   }
   function acceptme(tid){
    var techid = tid;
    $.ajax({
        url: "deletetech.php",
        type: "POST",
        data: {ttid:techid},
        success:function(){
            location.reload();
        }
    })
   }
</script>