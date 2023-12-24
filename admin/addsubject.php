<?php
include "dbConnec.php";

$select = $connection->prepare("SELECT * FROM department");
$select->execute();

if(isset($_POST['subbtn'])){
    $sub = $_POST['subject'];
    $dept = $_POST['dept'];
    if(empty($sub) && empty($dept)){
        echo "<script> alert('Please input first, then press submit button') </script>";
    }
    $subSelect = $connection->prepare("SELECT subject_name FROM subject WHERE subject_name = '$sub'");
    $subSelect->execute();
    $count = $subSelect->rowCount();
    if($count > 0){
        echo "<script> alert('sorry ! this subject already added, Please Choose another one') </script>";
    }
    else{
        $insert = $connection->prepare("INSERT INTO subject(subject_name, dept_id)VALUES ('$sub','$dept')");
        if($insert->execute()){
            echo "<script> alert('Succefully added.') </script>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject add to admin panel </title>
     <!-- CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css link end -->
    <!-- jQuery Link start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery end -->
    <style>
        form{
            width: 650px;
            margin: auto;
            margin-top: 70px;
            background: burlywood;
            padding: 30px;
        }
        label{
            width: 200px;
        }
        .sub{
            background: blue;
            font-weight: bold ;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <fieldset>
            <legend style="text-align: center;"> Add New Subject  </legend>
            <div class="row">
                <label class="form-control col-4 ml-4" for="">Subject Name:</label>
                <input class="form-control col-6 ml-4" type="text" name="subject" placeholder="Enter Subject Name">
            </div>
            <div class="row">
                <label class="form-control col-4 ml-4" for="">Select Department</label>
                <select class="form-control col-6 ml-4" name="dept" id="">
                    <option value="">Choose Your Department</option>
                    <?php
                    while($row = $select->fetch(PDO::FETCH_ASSOC)){

                    
                    ?>
                    <option value="<?= $row['id']; ?>"><?= $row['dept_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="row">
                <div class="col-11">
                    <input class="form-control ml-2 mb-4 sub" type="submit" name="subbtn" value="Submit">
                </div>
            </div>
        </fieldset>
    </form>
    </div>
    
</body>
</html>