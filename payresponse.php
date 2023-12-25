<?php
include "dbConnec.php";
$output = " ";
if(isset($_POST['uid'])){
    $studentid = $_POST["uid"];
    $select = $connection->prepare("SELECT * FROM onlineformdata WHERE id LIKE '$studentid'");
    $select->execute();
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
        $output .= "
       
               <div class='col-4'>
                   <b class='form-control bg-dark text-light'> Student name : </b>  
                </div>
                <div class='col-8'>
                
                  <p class='form-control'>{$row['student_name']}</p> 
                </div>
                <div class='col-4'>
                   <b class='form-control bg-dark text-light'> Student G-mail : </b>  
                </div>
                <div class='col-8'>
                  <p class='form-control'>{$row['email']}</p> 
                </div>
                <div class='col-4'>
                <b class='form-control bg-dark text-light'> Payment Amount </b>  
             </div>
             <div class='col-8'>
               <p > <input type = 'number' class='form-control bg-dark text-light' id='amount' name='amount' placeholder='Enter Amount'> </p> <span id='amnt'></span>
             </div>
             <div class='col-4'>
                <b class='form-control bg-dark text-light'> Select Methode </b>  
             </div>
             <div class='col-8'>
               <select id='method' name='method' class='form-control bg-dark text-light'>
               <option value = ''>Select a Option</option>
                    <option value = 'Bkash'>Bkash</option>
                    <option value = 'Nagad'>Nagad</option>
                    <option value = 'Rocket'>Rocket</option>
               </select>
             </div>
             
        <div class='col-4 mt-2'>
             <b class='form-control bg-dark text-light'> Account No. </b>  
          </div>
          <div class='col-8 mt-2'>
            <p > <input type = 'number' class='form-control bg-dark text-light' id='account' name='account' placeholder='Enter Account No'> </p> 
          </div>
          <div class='col-4'>
             <b class='form-control bg-dark text-light'> Enter Password </b>  
          </div>
          <div class='col-8'>
            <p > <input type = 'password' class='form-control bg-dark text-light' name='pass' placeholder='Enter your Password'> </p> 
          </div>



             <div class='col'>
                <div class='row'>
                <div class='col-12'>
                <input type = 'submit' id='submit' name='subbtn' value='Payment' class='col-12 btn btn-primary'> 
                </div>
                </div>   
             </div>

                ";

         
    }
    echo $output;     
}


?>
<?php
$result = '';
if(isset($_POST['amnt'])){
    $amount = $_POST["amnt"];
    $student = $row['id'];
    $paymentHistory = $connection->prepare("SELECT * payment_history WHERE student_id = '$student'");
    $paymentHistory->execute();
    while($row2 = $paymentHistory->fetch(PDO::FETCH_ASSOC)){
        $mainFee = $row2['total_fee'];
       $currentTOTAl =  $row2['payment_ammount']+$amount ;

    }
    $result = "
    <div class='col'>
                <div class='row'>
                <div class='col-12'>
                <h2>{$row['student_name']} Payment Details</h2>
                </div>
                </div>   
             </div>
                <div class='col-6 mt-2'>
                <b class='form-control'> Total Fee  </b>  
            </div>
            <div class='col-6 mt-2'>
            <b> {$mainFee}</b> 
            </div>";
            }
            echo $result;
?>