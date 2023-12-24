<?php
error_reporting(0);
sleep(2);
include "dbConnec.php";

if(isset($_GET['roll'])){
    $myRoll = $_GET['roll'];
    $select = $connection->prepare("SELECT * FROM marksheet WHERE student_id = '$myRoll'");
    $select->execute();
    $row = $select->fetch(PDO::FETCH_ASSOC);

    $selectdata = $connection->prepare("SELECT * FROM onlineformdata WHERE id = '$myRoll'");
    $selectdata->execute();
    $dataRow = $selectdata->fetch(PDO::FETCH_ASSOC); 
}
?>
<!-- google font-family -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    /* #myLogo{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 50px;
    } */
    .design{
        width: fit-content;
        height: fit-content;
        border: 15px double gray;
        background: white;
        
    }
#txtchng{
    font-family: 'Ephesis', cursive;
    font-size: 26px;
    font-weight: bold;
}

.newtbl td{
    padding: 5px;
}
.slno{
    margin-top: 100px;
}
#bord{
    border: 3px solid lightblue;
}
#myresult{
    background-color: darkgray;

}
.main{
    background-color: lightblue;
}
</style>
<div class="container-fluid main">
    <div class="row">
        <div class="col">
          
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2"><button class="form-control btn-success mt-2" onclick="window.print()">Print this page</button>  </div>
        </div>
    
<div class="container  design mt-2">  
    <div class="row">
        <div class="col" style="text-align:center;">
            <h3>BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, DINAJPUR</h3>
            <h4>BANGLADESH</h4>
            <hr id="bord">
            <h3 style="text-transform: uppercase;">Higher Secondary Certificate eXAMINATION-2023</h3>
        </div>
    </div>
    <div class="row" >
        <div class="col-4 slno">
        <h5>Serial No : 75DF7GS4D4FA</h5>
        <h5>1ADF2ASD 45ASDFAD5</h5>
        <h5>Result Grade: <?= $row['avgGrade'] ?></h5>
        </div>
        <div class="col-4">
            <img src="all_image/logo.jpeg" alt="Logo" height="200px" id="myLogo" width="100%">
            <u style="text-transform: uppercase;"> <h5 class="text-center">academic transcription</h5> </u>

        </div>
        <div class="col-4">
            <table border="1"  style="text-align: center;">
                <thead>
                    <tr>
                    <th>Letter Grade</th>
                    <th>Class Interval</th>
                    <th>Grade Point</th>
                    </tr>
                   
                </thead>
                <tbody>
                    <tr>
                        <td>A+</td>
                        <td>80-100</td>
                        <td>5.00</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>70-79</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td>60-69</td>
                        <td>3.50</td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>50-69</td>
                        <td>3.00</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>40-49</td>
                        <td>2.00</td>
                    </tr>
                    <tr>
                        <td>D</td>
                        <td>33-39</td>
                        <td>1.0</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>0-32</td>
                        <td>0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">    
                <div class="col-4 "><b>Student Name</b></div>
                <div class="col-8" id="txtchng"><?php echo $dataRow['student_name'] ?></div>
            </div>
            <div class="row">
                <div class="col-4 "><b>Father Name</b></div>
                <div class="col-8" id="txtchng"><?php echo $dataRow['father_name'] ?></div>
            </div>
            <div class="row">
                <div class="col-4 "><b>Mother Name</b></div>
                <div class="col-8" id="txtchng"><?php echo $dataRow['mother_name'] ?></div>
            </div>
            <div class="row">
                <div class="col-4 "><b>Name Of College</b></div>
                <div class="col-8" id="txtchng">Rangpur Government College, Rangpur.</div>
            </div>
            <div class="row">
                <div class="col-8">
                        <div class="row">
                            <div class="col-6"><b>Name Of Center</b></div>
                            <div class="col-6" id="txtchng">Carmichael College, Rangpur</div>
                        </div>
                </div>
                <div class="col-4">
                        <div class="row">
                            <div class="col-6"><b>Type</b></div>
                            <div class="col-6" id="txtchng">Regular</div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                        <div class="row">
                            <div class="col-6"><b>Roll No</b> </div>
                            <div class="col-6"><b>0000<?= $dataRow['id']?></b> </div>
                        </div>
                </div>
                <div class="col-4">
                        <div class="row">
                            <div class="col-6"><b>Registration No</b></div>
                            <div class="col-6"> <b>6DFS7ASDFA</b></div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                        <div class="row">
                            <div class="col-6"><b>Group</b></div>
                            <div class="col-6" id="txtchng"><?= $dataRow['choice_department']?></div>
                        </div>
                </div>
                <div class="col-4">
                        <div class="row">
                            <div class="col-6"><b>Date Of Birth</b></div>
                            <div class="col-6"><b><?= $dataRow['birthday']?></b></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table style="width: 100%; text-align:center" border="1" class="mb-4 newtbl">
                <thead>
                    <tr>
                    <th>Sl No</th>
                    <th>Name Of Subject</th>
                    <th>Mark</th>
                    <th>Letter Grade</th>
                    <th>Grade Point</th>
                    <th>GPA <br><small>(without additional subject)</small></th>
                    <th>GPA</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Bangla</td>
                        <td> <?= $row['bangla'] ?></td>
                        <td><?= $row['banglaGrade'] ?></td>
                        <td><?= $row['banglaPoint'] ?></td>
                        <td rowspan="6"><?php echo round(($row['GPAwithOutFourth']), 2); ?></td>
                        <td rowspan="9"><?php
                        if($row['totalGPA'] > 5.00){
                            $oorg = "5.00";
                        }
                        else{
                            $oorg = round(($row['totalGPA']), 2);
                        }
                        echo $oorg;
                        ?></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>English</td>
                        <td> <?= $row['english'] ?></td>
                        <td><?= $row['englishGrade'] ?></td>
                        <td><?= $row['englishPoint'] ?></td>
                       
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Mathematics </td>
                        <td> <?= $row['math'] ?></td>
                        <td><?= $row['mathGrade'] ?></td>
                        <td><?= $row['mathPoint'] ?></td>
                       
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Physics Or Accounting Or History</td>
                        <td> <?= $row['phyORaccoutORhist'] ?></td>
                        <td><?= $row['phyORaccORhisGrade'] ?></td>
                        <td><?= $row['phyORaccORhisPoint'] ?></td>
                       
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Biology Or Finance Or Sociology</td>
                        <td> <?= $row['bioORfinanORsoci'] ?></td>
                        <td><?= $row['bioORfinanORsociGrade'] ?></td>
                        <td><?= $row['bioORfinanORsociPoint'] ?></td>
                       
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>Chemistry Or Economics Or Geography</td>
                        <td> <?= $row['chemiORechoORgeo'] ?></td>
                        <td><?= $row['cheORechoORgeoGrade'] ?></td>
                        <td><?= $row['cheORechoORgeoPoint'] ?></td>
                       
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align: left;"><b>Additional Subject</b></td>
                    </tr>
                    <tr>
                        <td rowspan="2">07</td>
                        <td rowspan="2">Fourth Subject</td>
                        <td rowspan="2"> <?= $row['fourth_sub'] ?></td>
                        <td rowspan="2"><?= $row['fourthGrade'] ?></td>
                        <td rowspan="2" ><?= $row['fourthPoint'] ?></td>
                        <td> GP Above 2</td>
                    </tr>
                    <tr>
                        <td><?php
                        $new = $row['fourthPoint']-2;
                        echo $new; ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-8 mb-0">
            <p></p>
            <p></p>
            <p class="mt-5"  style="font-family: cursive; font-size: 18px;">
              The Date of Publication of Result, September 20 , 2023  
            </p>
        </div>
        <div class="col-4 text-center">
        <p id="txtchng">
              Fokhruddin
            </p>
            <b>Control Of Examination</b>
        </div>
    </div>
</div>

</div>
    </div>
</div>