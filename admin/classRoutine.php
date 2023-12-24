<?php
include "dbConnec.php";
if(isset($_POST['sundaySubmit'])){
    $day = $_POST['day'];
    $dept = $_POST['dept'];
    $firstTeacher = $_POST['sunFirts'];
    $secondT = $_POST['sunSecond'];
    $thirT = $_POST['sunThird'];
    $fourthT = $_POST['sunFourth'];
    $fiveT = $_POST['sunfivth'];
    $sixT = $_POST['sunSix'];
    $firstSub = $_POST['FirtsSub'];
    $secondSub = $_POST['SecondSub'];
    $thirdSub = $_POST['ThirdSub'];
    $fourthSub = $_POST['FourthSub'];
    $fiveSub = $_POST['fivthSub'];
    $sixSub = $_POST['SixSub'];

    if(empty($day)|| empty($dept)||empty($firstTeacher)|| empty($secondT)|| empty($thirT)|| empty($fourthT)|| empty($fiveT)|| empty($sixT)|| empty($firstSub)||empty($secondSub)||empty($thirdSub)||empty($fourthSub)||empty($fiveSub)||empty($sixSub)){
        echo "<script> alert('Input all fields and then press submit button')</script>";
    }
    else{
        $routine  = $connection->prepare("SELECT * FROM class_schedule WHERE dept = '$dept' AND days = '$day'");
        $routine->execute();
        $count = $routine->rowCount();
        if($count > 0){
            echo "<script>alert('This Days class schedule already created')</script>";
        }
        else{
            $insert = $connection->prepare("INSERT INTO class_schedule(dept, days, firstTeacher, seconTeacher, thirdTeacher, fourthTeacher, fivthTeacher, sixTeacher, firstSubject, secondSubject, thirdSubject, fourthSubject, fivthSubject, sixSubject)VALUES('$dept' , '$day' , '$firstTeacher' , '$secondT', '$thirT' , '$fourthT' , '$fiveT' , '$sixT' , '$firstSub' , '$secondSub' , '$thirdSub' , '$fourthSub' , '$fiveSub' , '$sixSub')");
            $insert->execute();
            echo "<script>alert('Added Successfully')</script>";
        }
    }
   


}
                        
                      

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!--  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--  -->

<style>
    table{
        width: 100%;
        text-align: center;
    }
    th, td{
        border: 1px solid black;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col mt-5">
           <div>
            <u><h2 class="text-center">Daily Class Routine</h2></u>
            <?php
            if(isset($msg)){
                echo $msg;
            }
            
            ?>
           </div>
           <form action="" method="post">
            <table class="table table-striped " style="text-align: center;">
                <thead class="bg-secondary text-light">
                    <tr>
                        <th>Day</th>
                        <th>9.00-9.45</th>
                        <th>9.45-10.30</th>
                        <th>10.30-11.15</th>
                        <th>11.15-12.00</th>
                        <th>12.00-12.45</th>
                        <th>12.45-1.30</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr class="bg-info">
        <td class="text-light"> 
            <select name="day" id="" class="form-control">
                <option value="">Select Day</option>
                <option  value="sunday">Sunday</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
            </select>

        </td>
                        
                        
        <td>
            <input type="text" name="sunFirts" class="form-control" placeholder="Input Teacher Name">
        </td>
        <td>
            <input type="text" name="sunSecond" class="form-control" placeholder="Input Teacher Name">
        </td>
        <td>
            <input type="text" name="sunThird" class="form-control" placeholder="Input Teacher Name">
        </td>
        <td>
            <input type="text" name="sunFourth" class="form-control" placeholder="Input Teacher Name">
        </td>
        <td>
            <input type="text" name="sunfivth" class="form-control" placeholder="Input Teacher Name">
        </td>
        <td>
            <input type="text" name="sunSix" class="form-control" placeholder="Input Teacher Name">
        </td>   
                                           
        </tr>
        
        <tr class="bg-info">
        <td> 
            <select name="dept" id="" class="form-control">
                <option value="">Select Department</option>
                <option value="science">Science</option>
                <option value="business">Business</option>
                <option value="humanitys">Humanitys</option>
            </select>
        </td>
            <td>
                <input type="text" name="FirtsSub" class="form-control" placeholder="Input  Subject">
            </td>
            <td>
                <input type="text" name="SecondSub" class="form-control" placeholder="Input  Subject">
            </td>
            <td>
                <input type="text" name="ThirdSub" class="form-control" placeholder="Input  Subject">
            </td>
            <td>
                <input type="text" name="FourthSub" class="form-control" placeholder="Input  Subject">
            </td>
            <td>
                <input type="text" name="fivthSub" class="form-control" placeholder="Input Subject">
            </td>
            <td>
                <input type="text" name="SixSub" class="form-control" placeholder="Input Subject">
            </td>      
        </tr>
                    <tr>
                        <td colspan="7">
                        <input type="submit" name="sundaySubmit" value="Submit" class="form-control btn btn-dark">
                        </td>
                    </tr>
                   
                    
                </tbody>

            </table>
            </form>
        </div>
    </div>
</div>