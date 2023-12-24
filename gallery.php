<?php
include "dbConnec.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gellery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .cards-wrapper{
            column-gap: 20px;
        }
    </style>
</head>
<body>
  
<?php
include "topbar.php";
include "navbar.php";

?>
<div class="container cards-wrapper">
    <div class="row">
        
        <div class="col">
            <div class="row">
            <!-- <h3 class="text-center">Rangpur Govt. College Photo Gallery</h3> -->
            <?php
                    $selectAll = $connection->prepare("SELECT * FROM gallery");
                    $selectAll->execute();
                    while ($row = $selectAll->fetch(PDO::FETCH_ASSOC)) {

                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-3 mb-3">
                                    <div class="card" id="card" style="width: 18rem;">
                                        <img src="admin/<?php echo $row['folder_name'] . $row['file_name'] ?>" class="card-img-top" alt="..." height="200px" width="200px">
                                       
                                    </div>
                               
                                    </div>

                    <?php } ?>
                
                
                
            </div>
        </div>
    </div>
</div>




<?php
include "footer.php";

?>
</body>
</html>


