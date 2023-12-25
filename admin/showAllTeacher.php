<?php
include "dbConnec.php";
$allSelect =  $connection->prepare("SELECT * FROM teacher_regi WHERE status='active'");
$allSelect->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Teacher </title>
    <!-- CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css link end -->

    <!-- jquery link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery end -->
    <style>
        table {
            width: 100%;
        }

        .container {
            background: gainsboro;
        }

        th,
        td {
            border: 1px dashed black;
        }
        #teacher:hover{
            transform: scale(1.1);
        }
        #techId{
            box-shadow: 0 4px 8px 0 rgba(10, 10, 10, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <div class="container shadow mt-5">
        <div class="row">
            <div class="col">
                <u>
                    <h1 class="mt-5 text-center">All Teacher Information</h1>
                </u>

                <div class="row mt-4" id="teacher">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/principle.jpg" height="200px" width="200px" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body ml-5 mt-5">
                                        <h5 class="card-title">M.C.K Mohammad</h5>
                                        <p class="card-text">He is The Principle of this school.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
                    <div class="container">
                        <div class="row">
                        <div class="col-1"></div>
                            <div class="col-10">
                            <input type="text" name="teacher" id="techId" placeholder="Search teacher Id" class="form-control">
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <?php
                    $count = $allSelect->rowCount();

                    ?>
                <div class="row " id="searchshow">
                    <div class="col-4"></div>
                    <div class="col-4"> <h3> All Teacher Count  <?= $count?></h3> </div>
                    <div class="col-4"></div>
                    <?php

                    while ($row = $allSelect->fetch(PDO::FETCH_ASSOC)) {

                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-3 mb-3">

                        <div class="card " id="teacher"        style="width: 18rem;">
                            <img src="<?php echo $row['photo_folder'] . $row["photo_rename"]; ?>" class="card-img-top" height="150px" width="80px" alt="Loading">
                            <div class="card-body">
                                <center>

                               
                                <p>
                                    <b style="text-align: center;">

                                        <?php echo  $row['teacher_name'] ?>

                                    </b>
                                </p>


                                <p>
                                    <?php
                                    $dept = $row['department'];
                                    $depselect = $connection->prepare("SELECT * FROM department WHERE id = '$dept'");
                                    $depselect->execute();
                                    $row3 = $depselect->fetch(PDO::FETCH_ASSOC);

                                    ?>
                                    <b style="text-align: center;">
                                        <?php echo $row3["dept_name"]; ?>
                                    </b>
                                </p>
                                <p>
                                    <b style="text-align: center;">
                                        <?php echo $row['designation']; ?>
                                    </b>
                                </p>
                                <p>
                                    <b style="text-align: center;"><?php echo $row['contact']; ?></b>
                                </p>
                                </center>
                            </div>
                        </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
</body>

</html>
<script>
    $(document).ready(function(){
        $("#techId").keyup(function(){
            var techer = $(this).val();
            $.ajax({
                url: "searchteacher.php",
                method: "POST",
                data:{id: techer},
                success:function(data){
                    $("#searchshow").html(data)
                }
            })
        })
    })
</script>