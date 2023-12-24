<?php
include "dbConnec.php";

$allpending = $connection->prepare("SELECT * FROM onlineformdata WHERE status = 'admitted'");
$allpending->execute();
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
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- cdnjs -->
    <title>New Admitted Student</title>
    <style>
      
    </style>
</head>
<body>






    <div class="container">
        <div class="row">
            <div class="col">
            <h2 style="text-align: center;"> <u>New Admitted Student</u>   </h2>
            </div>
        </div>
    </div>
       
            <table class="table table-striped" >
                <thead class="bg-info text-light">
                <tr>
           
           <th>Student Name</th>
           <th>Father Name</th>
           <th>Mother Name</th>
           <th>Birth Day </th>
           <th>Gender</th>
           <th>NID No.</th>
           <th>Past School </th>
           <th>Blood Group
           </th>
           <th>Choice Department</th>
<!-- 
           <th>Contact Number </th>
           <th>Last GPA</th>
           <th>Religion</th>
           <th>Country</th>
           <th>Marrital Status</th>
           <th>Hometown</th>
           <th>Email</th>
           -->
           
       </tr>
                </thead>
        
        <?php 
        while($row = $allpending->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                    
                    <td><?php echo  $row['student_name']?></td>
                    <td><?php echo  $row['father_name']?></td>
                    <td><?php echo  $row['mother_name']?></td>
                    <td><?php echo  $row['birthday']?></td>
                    <td><?php echo  $row['gender']?></td>
                    <td><?php echo  $row['nidno']?></td>
                    <td><?php echo  $row['past_school']?></td>
                    <td><?php echo  $row['blood']?></td>
                    <td><?php echo  $row['choice_department']?></td>
                    <!-- <td><?php echo  $row['contact']?></td>
                    <td><?php echo  $row['last_gpa']?></td>
                    <td><?php  echo $row['religion']?></td>
                    <td><?php  echo $row['country']?></td>
                    <td><?php  echo $row['marrital_status']?></td>
                    <td><?php  echo $row['hometown']?></td>
                    <td><?php  echo $row['email']?></td> -->
                    
                    </tr> ;
        <?php } ?>
     

    </table>
    <a id="showdata" href="" target="_blank"></a>
</body>
</html>
<script>   
        function deleteme(userid){
           $alert = confirm("are your sure Want to delete?");
          if($alert == true) {
            $.ajax({
                url: "deleteriqu.php",
                method: "POST",
                data: {userid:userid},
                success:function(){
                    location.reload();
                }
            });
          };
          
        };
        function acceptme(uid){
            $.ajax({
                url: "acceptriqu.php",
                method: "POST",
                data: {uid:uid},
                success:function(){
                       
                    location.reload();
                }
            })
        }
   
</script>