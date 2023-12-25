<?php 
require "../dbconnect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body>
    <div class="col-xl-8 col-lg-7 mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Our all user and status</h6>
                <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>G-mail</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $selectall = $addDB->prepare("SELECT * FROM admin");
                        $selectall->execute();
                        while ($fetch = $selectall->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <tr>
                                <td> <?php echo $fetch['id']; ?> </td>
                                <td><?php echo $fetch['username']; ?></td>
                                <td><?php echo $fetch['gmail']; ?></td>
                                <td><?php echo $fetch['user_status']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
</body>

</html>