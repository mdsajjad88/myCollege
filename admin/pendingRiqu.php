<?php
include "dbConnec.php";

$allpending = $connection->prepare("SELECT * FROM onlineformdata WHERE status = 'pending'");
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
    <title>Pending Riquest</title>
   
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 style="text-align: center;"> New Pending Student Riquest </h2>
            </div>
        </div>
      
        <div class="row">
            <div class="col">
                <table  class="table table-striped">
                                            <thead class="bg-secondary text-light">
                                                <tr>
                                                <th>ID</th>
                                                <th>G-mail</th>
                                                <th>Student Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Birth Day </th>
                                                <th>Gender</th>
                                                <!-- <th>NID No.</th>
                                                <th>Past School </th>
                                                <th>Blood Group</th>
                                                <th>Choice Department</th>
                                                <th>Contact Number </th>
                                                <th>Last GPA</th>
                                                <th>Religion</th> -->
                                                <th>Accept</th>
                                                <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            while($row = $allpending->fetch(PDO::FETCH_ASSOC)){

                                         
                                            
                                            ?>
                                                <tr>
                                                   
                                                    <td><?php echo  $row['id'] ?></td>
                                                
                                                    <td><?php echo $row['email'] ?></td>
                                               
                                                    
                                                    <td><?php echo  $row['student_name'] ?></td>
                                               
                                                
                                                <td><?php echo  $row['father_name'] ?></td>
                                               
                                                <td><?php echo  $row['mother_name'] ?></td>
                                               
                                                
                                                <td><?php echo  $row['birthday'] ?></td>
                                            
                                                <td><?php echo  $row['gender'] ?></td>
<!--                                             
                                                
                                                <td><?php echo  $row['nidno'] ?></td>
                                            
                                                
                                                <td><?php echo  $row['past_school'] ?></td>
                                            
                                                
                                                <td><?php echo  $row['blood'] ?></td>
                                            
                                                
                                                <td><?php echo  $row['choice_department'] ?></td>
                                               
                                                <td><?php echo  $row['contact'] ?></td>
                                               
                                                <td><?php echo  $row['last_gpa'] ?></td>
                                               
                                                <td><?php echo $row['religion'] ?></td> -->
                                                <td> <button class="btn btn-danger" onclick="deleteme(<?php echo $row['id'] ?>)">Delete</button></td>
                                                <td> <button class="btn btn-success" onclick= "acceptme(<?php echo $row['id'] ?>)">Accept</button></td>
                                                </tr>
                                               <?php } ?>
                                            </tbody>
                                               
                                        </table>
            </div>
           
        </div>

    <a id="showdata" href="" target="_blank"></a>
</div>

</body>

</html>
<script>
    function deleteme(userid) {
        $alert = confirm("are your sure Want to delete?");
        if ($alert == true) {
            $.ajax({
                url: "deleteriqu.php",
                method: "POST",
                data: {
                    userid: userid
                },
                success: function() {
                    location.reload();
                }
            });
        };

    };

    function acceptme(uid) {
        $.ajax({
            url: "acceptriqu.php",
            method: "POST",
            data: {
                uid: uid
            },
            success: function() {

                location.reload();
            }
        })
    }
</script>