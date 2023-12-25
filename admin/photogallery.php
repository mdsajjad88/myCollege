<?php
error_reporting(0);
require "dbConnec.php";

if (isset($_POST['subbtn'])) {
    $folder = "photoGallery/";
    $filename = $_FILES['upPhoto']['name'];
    $path = $_FILES['upPhoto']['tmp_name'];
    $size = $_FILES['upPhoto']['size'];
    if(empty($filename)){
        $msg = "<div class='alert alert-danger text-dark'>Please Choose Photo and then press upload button</div>"; 
    }
    else{
    move_uploaded_file($path, $folder.$filename);

    $insert = $connection->prepare("INSERT INTO gallery(file_name, folder_name, file_size)VALUES('$filename', '$folder', '$size')");
    $insert->execute();
    $msg = "<div class='alert alert-success text-dark'>Uploaded Successfully</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        #card{
            float: left;
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <h2 class="text-center">Upload a new photo</h2>
            </div>
        </div>
        
           
               
                    
                    <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?>
                    <div class="row">
                        <div class="col">
                        <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="upPhoto">
                        <input type="submit" name="subbtn" class="btn btn-primary" id="" value="Upload">
                        </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <h2 class="text-center">Your All Photo</h2>    
                        </div>
                    </div>

                    
                 
                    <div class="row">   
                         
                    <?php
                    $selectAll = $connection->prepare("SELECT * FROM gallery");
                    $selectAll->execute();
                    while ($row = $selectAll->fetch(PDO::FETCH_ASSOC)) {

                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 mt-3 mb-3 ">
                                    <div class="card" id="card" style="width: 18rem;">
                                        <img src="<?php echo $row['folder_name'] . $row['file_name'] ?>" class="card-img-top" height="200px" width="200px" alt="...">
                                        <div class="card-body">
                                           
                                        </div>
                                    </div>
                                    </div>


                    <?php } ?>
                    </div>
                            </div>
                        </div>
               
            </div>
        </div>
    </div>


</body>

</html>