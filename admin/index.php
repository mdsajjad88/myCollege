<?php
session_start();
if(!isset($_SESSION["admin"])){
  header("location:login.php");
}
include "dbConnec.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../all_image/logo.jpeg" rel="icon">
  <title>RGCR - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
    #logo{
      border-radius: 50px;
    }
   .side{
    position: inherit;
   }
   .myBar{
    position: fixed;
   }
   .tpanel{
      margin-right: 280px;
      margin-top: 20px;
      color: white;
    }
    .maindivv{
      min-height: 400px;
    }
  </style>
</head>

<body id="page-top">
  <div id="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
      <div class="container-fluid">
        
    <ul class="navbar-nav sidebar sidebar-light myBar accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="../all_image/logo.jpeg" id="logo">
        </div>
        <div class="sidebar-brand-text mx-3">RGC, Rangpur</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>All Details Here</span></a>
      </li>
      <hr class="sidebar-divider ">
      
      <li class="nav-item">
        <a href="../index.php" class="nav-link"> User Veiw </a>
      </li>
      <li class="nav-item">
        <a href="index.php?allstudent" class="nav-link">All Student</a>
      </li>
      
      <li class="nav-item">
        <a href="index.php?showteacher" class="nav-link"> All Teacher</a>
      </li>
      <li class="nav-item">
        <a href="index.php?addteacher" class="nav-link">Add new Teachers</a>
      </li>
      <li class="nav-item">
        <a href="index.php?addPayment" class="nav-link">Add a Payment</a>
      </li>
      <li class="nav-item">
        <a href="index.php?pdetails" class="nav-link">Payment Details</a>
      </li>
      <li class="nav-item">
        <a href="index.php?salary" class="nav-link">Salary Sheet Creat </a>
  </li>
      
      <li class="nav-item">
        <a href="index.php?routine" class="nav-link"> Class Routine</a>
      </li>
      <li class="nav-item">
        <a href="index.php?notice" class="nav-link"> Result & Notice</a>
      </li>
      <li class="nav-item">
        <a href="index.php?subject" class="nav-link"> Add Subject</a>
      </li>
      
      <li class="nav-item">
        <a href="index.php?addphoto" class="nav-link">Add new Photo to Gallery </a>
      </li>
    </ul>
    </div>


      </div>
      <div class="col-10">
      <div class="container">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars text-light"></i>
          </button>
          <ul class="navbar-nav ml-auto">
          <h3 class="tpanel">Admin Panel</h3>
            
          <div class="topbar-divider d-none d-sm-block"></div>
         
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin Profile</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid maindivv" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
           
            </ol>
          </div>

          <div class="row mb-3 ">
            <!-- Admission Selected -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <a href="index.php?newad">
                    <div class="col mr-2">
                     
                      <div class="text-xl font-weight-bold text-uppercase mb-1">
                      Admission Selected 
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php 
                      $selectedStu = $connection->prepare("SELECT * FROM onlineformdata WHERE status = 'admitted'");
                      $selectedStu->execute();
                     $countS = $selectedStu->rowCount();
                      ?>
                      <b> <?= $countS ?></b>
                      </div>
                      </a>
                    </div>
                   
                    <div class="col-auto">
                      <i class="fas fa-check-double fa-2x text-primary"></i>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> -->
            <!-- All Student -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="index.php?student">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">All Student</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                      <?php 
                       $allstudent = $connection->prepare("SELECT * FROM all_student");
                       $allstudent->execute();
                       $sCount = $allstudent->rowCount();
                       ?> 
                       <b><?= $sCount; ?></b>
                      </div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- New User Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="index.php?showteacher">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">All Teacher </div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                       <?php 
                       $allteacher = $connection->prepare("SELECT * FROM teacher_regi");
                       $allteacher->execute();
                       $tCount = $allteacher->rowCount();
                       ?> 
                       <b><?= $tCount; ?></b>
                      </div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  <a href="index.php?pending">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">Pending Student</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php 
                      
                      $pendingS = $connection->prepare("SELECT * FROM onlineformdata WHERE status = 'pending'");
                      $pendingS->execute();
                     $count = $pendingS->rowCount();
                     ?>
                      <b><?= $count ?></b>
                      </div>

                    </div>
                    </a>
                    <!-- <div class="col-auto">
                      <i class="fas fa-bell fa-2x text-secondary"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  <a href="index.php?pendingteacher">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">Pending Teacher </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php 
                      
                      $pendT = $connection->prepare("SELECT * FROM teacher_regi WHERE status = 'pending'");
                      $pendT->execute();
                     $tcount = $pendT->rowCount();
                     ?>
                      <b><?= $tcount ?></b>
                      </div>

                    </div>
                    </a>
                    <!-- <div class="col-auto">
                      <i class="fas fa-exclamation fa-2x text-info"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  <a href="index.php?payriqu">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1"> Payment Riquest</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $payRiqu = $connection->prepare("SELECT * FROM payment_history WHERE payment_status = 'pending'");
                        $payRiqu->execute();
                        $count = $payRiqu->rowCount();
                        echo $count;
                        ?>
                      </div>

                    </div>
                    </a>
                    <!-- <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-info"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  <a href="index.php?todayDetails">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">Today Collection</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php 
                              
                              $time = date("Y-m-d");
                            $selt =  $connection->prepare("SELECT SUM(payment_ammount) AS sum FROM payment_history WHERE payment_status ='paid' AND accpt_date = '$time'");
                            $selt->execute();
                            $row = $selt->fetch(PDO::FETCH_ASSOC);
                            $result = $row['sum'];
                          
                            ?>
                           <b><?= $result ?></b>
                          </div>

                      </div>
                   
                      <!-- <div class="col-auto">
                        <i class="fas fa-cannabis fa-2x text-secondary"></i>
                      </div> -->
                    </div>
                    </a>
                </div>
              </div>
              </div>
             
        
           

            <?php
            if (isset($_GET['ad'])) {
              include "admindetails.php";
            }
          if(isset($_GET['showteacher'])){
            include "showAllTeacher.php";
          }
          if(isset($_GET['subject'])){
            include "addsubject.php";
          }
          if(isset($_GET['addteacher'])){
            include "teacherregi.php";
          }
          if(isset($_GET['pending'])){
            include "pendingRiqu.php";
          }
          if(isset($_GET['newad'])){
            include "newAdmission.php";
          }
          if(isset($_GET['student'])){
            include "allstudent.php";
          }
          if(isset($_GET['allstudent'])){
            include "allstudent.php";
          }
          if(isset($_GET['payriqu'])){
            include "showpayriqu.php";
         }
         if(isset($_GET['pendingteacher'])){
          include "teacherPending.php";
         }

         if(isset($_GET['addphoto'])){
          include "photogallery.php";
         }
         if(isset($_GET['salary'])){
          include "salarysheet.php";
         }
         if(isset($_GET['todayDetails'])){
          include "todayCollDetails.php";
         }
         if(isset($_GET['showsalary'])){
          include "showAllSalary.php";
         }
         if(isset($_GET['addPayment'])){
          include "payfee.php";
         }
         if(isset($_GET["pdetails"])){
          include "paymentdetails.php";
         }
         if(isset($_GET['notice'])){
          include "notice.php";
         }
         if(isset($_GET["routine"])){
          include "classRoutine.php";
         }
            ?>

          </div>
          <!--Row-->



          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
       
       
      </div>
      <!-- Footer -->
      <footer class="sticky-footer  bg-light">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                document.write(new Date().getFullYear());
              </script> - developed by <a href="https://www.facebook.com/catloversajjad/"> @SAJJAD</a>

            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>

      </div>
    </div>
    <!-- Sidebar -->
    
  
    <!-- Sidebar -->
    
    </div>
  </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>