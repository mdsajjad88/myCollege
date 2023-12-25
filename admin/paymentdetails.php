<?php
error_reporting(0);
include "dbConnec.php";

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-dark">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                 
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1 text-light"> Admission Fee </div>
                      <?php
                      $admission = $connection->prepare("SELECT SUM(payment_ammount) AS sum FROM payment_history WHERE fee_reason = 'admission fee' AND payment_status ='paid'");
                      $admission->execute();
                      $adrow = $admission->fetch(PDO::FETCH_ASSOC);
                      $adBal = $adrow["sum"];

                     
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <b class="text-light"> <?php echo  $adBal ?></b>
                      </div>

                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-dark">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1 text-light"> Registration Fee </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $regiPay = $connection->prepare("SELECT SUM(payment_ammount) AS sum FROM payment_history WHERE fee_reason = 'registration fee' AND payment_status ='paid'");
                        $regiPay->execute();
                      
                      $payrow = $regiPay->fetch(PDO::FETCH_ASSOC);  
                      $regiBal = $payrow["sum"];
                        
                        ?>
                      <b class="text-light"><?= $regiBal; ?></b>
                      </div>

                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-dark">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1 text-light"> Monthly Fee </div>
                      <?php
                      $monthly = $connection->prepare("SELECT SUM(payment_ammount) AS monthlysum FROM payment_history  WHERE fee_reason = 'monthly fee' AND payment_status ='paid'");
                      $monthly->execute();
                      $monthlyRow = $monthly->fetch(PDO::FETCH_ASSOC);
                      $monthlyAmount = $monthlyRow['monthlysum'];
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <b class="text-light"><?= $monthlyAmount; ?></b>
                      </div>

                    </div>
                   
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card h-100 bg-dark">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1 text-light"> Total Paid Cash </div>
                      <?php
                      $total = $connection->prepare("SELECT SUM(payment_ammount) AS total FROM payment_history WHERE payment_status ='paid' ");
                      $total->execute();
                      $totalRow = $total->fetch(PDO::FETCH_ASSOC);
                      $main = $totalRow['total'];
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <b class="text-light"><?= $main;  ?></b>
                      </div>

                    </div>
                   
                    
                  </div>
                </div>
              </div>
            </div>