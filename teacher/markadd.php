<?php
include "dbConnec.php";
error_reporting(0);
if(isset($_POST['subbtn'])){
    $stuID = $_POST['sid'];
    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $math = $_POST['math'];
    $phyORaccORhis = $_POST['PAH'];
    $bioORfinanORsoci = $_POST['BFS'];
    $cheORechoORgeo = $_POST['CEG'];
    $fourth = $_POST['fourth'];

    $bangLaGrade = " ";
    $banglaPoint = " ";

    $englishGrade = " ";
    $englishPoint = " ";

    $mathGrade = " ";
    $mathPoint = " ";

    $phyORaccORhisGrade = " ";
    $phyORaccORhisPoint = " ";

    $bioORfinanORsociGrade = " ";
    $bioORfinanORsociPoint = " ";

    $cheORechoORgeoGrade = " ";
    $cheORechoORgeoPoint = " ";


    $fourthGrade = " ";
    $fourthPoint = " ";

     if($bangla > 79){
        $bangLaGrade = "A+";
        $banglaPoint = 5;
    }
    elseif($bangla > 69){
        $bangLaGrade = "A";
        $banglaPoint= 4;
    }
    elseif($bangla > 59){
        $bangLaGrade = "A-";
        $banglaPoint= 3.5;
    }
    elseif($bangla > 49){
        $bangLaGrade = "B";
        $banglaPoint= 3;
    }
    elseif($bangla > 39){
        $bangLaGrade = "C";
        $banglaPoint= 2;
    }
    elseif($bangla > 32){
        $bangLaGrade = "D";
        $banglaPoint= 1;
    }
    elseif($bangla < 33){
        $bangLaGrade = "F";
        $banglaPoint= 0;
    }


    $englishGrade = " ";
    $englishPoint = " ";
     if($english > 79){
        $englishGrade = "A+";
        $englishPoint = 5;
    }
    elseif($english > 69){
        $englishGrade = "A";
        $englishPoint= 4;
    }
    elseif($english > 59){
        $englishGrade = "A-";
        $englishPoint= 3.5;
    }
    elseif($english > 49){
        $englishGrade = "B";
        $englishPoint= 3;
    }
    elseif($english > 39){
        $englishGrade = "C";
        $englishPoint= 2;
    }
    elseif($english > 32){
        $englishGrade = "D";
        $englishPoint= 1;
    }
    elseif($english < 33){
        $englishGrade = "F";
        $englishPoint = 0;
    }


    $mathGrade = " ";
    $mathPoint = " ";
    if($math > 79){
        $mathGrade = "A+";
        $mathPoint = 5;
    }
    elseif($math > 69){
        $mathGrade = "A";
        $mathPoint = 4;
    }
    elseif($math > 59){
        $mathGrade = "A-";
        $mathPoint= 3.5;
    }
    elseif($math > 49){
        $mathGrade = "B";
        $mathPoint= 3;
    }
    elseif($math > 39){
        $mathGrade = "C";
        $mathPoint= 2;
    }
    elseif($math > 32){
        $mathGrade = "D";
        $mathPoint = 1;
    }
    elseif($math < 33){
        $mathGrade = "F";
        $mathPoint = 0;
    } 

    
    $phyORaccORhisGrade = " ";
    $phyORaccORhisPoint = " ";
     if($phyORaccORhis > 79){
        $phyORaccORhisGrade = "A+";
        $phyORaccORhisPoint = 5;
    }
    elseif($phyORaccORhis > 69){
        $phyORaccORhisGrade = "A";
        $phyORaccORhisPoint= 4;
    }
    elseif($phyORaccORhis > 59){
        $phyORaccORhisGrade = "A-";
        $phyORaccORhisPoint= 3.5;
    }
    elseif($phyORaccORhis > 49){
        $phyORaccORhisGrade = "B";
        $phyORaccORhisPoint= 3;
    }
    elseif($phyORaccORhis > 39){
        $phyORaccORhisGrade = "C";
        $phyORaccORhisPoint= 2;
    }
    elseif($phyORaccORhis > 32){
        $phyORaccORhisGrade = "D";
        $phyORaccORhisPoint= 1;
    }
    elseif($phyORaccORhis < 33){
        $phyORaccORhisGrade = "F";
        $phyORaccORhisPoint = 0;
    }

    
    $bioORfinanORsociGrade = " ";
    $bioORfinanORsociPoint = " ";
     if($bioORfinanORsoci > 79){
        $bioORfinanORsociGrade = "A+";
        $bioORfinanORsociPoint = 5;
    }
    elseif($bioORfinanORsoci > 69){
        $bioORfinanORsociGrade = "A";
        $bioORfinanORsociPoint= 4;
    }
    elseif($bioORfinanORsoci > 59){
        $bioORfinanORsociGrade = "A-";
        $bioORfinanORsociPoint= 3.5;
    }
    elseif($bioORfinanORsoci > 49){
        $bioORfinanORsociGrade = "B";
        $bioORfinanORsociPoint= 3;
    }
    elseif($bioORfinanORsoci > 39){
        $bioORfinanORsociGrade = "C";
        $bioORfinanORsociPoint= 2;
    }
    elseif($bioORfinanORsoci > 32){
        $bioORfinanORsociGrade = "D";
        $bioORfinanORsociPoint= 1;
    }
    elseif($bioORfinanORsoci < 33){
        $bioORfinanORsociGrade = "F";
        $bioORfinanORsociPoint = 0;
    }


    $cheORechoORgeoGrade = " ";
    $cheORechoORgeoPoint = " ";
     if($cheORechoORgeo > 79){
        $cheORechoORgeoGrade = "A+";
        $cheORechoORgeoPoint = 5;
    }
    elseif($cheORechoORgeo > 69){
        $cheORechoORgeoGrade = "A";
        $cheORechoORgeoPoint= 4;
    }
    elseif($cheORechoORgeo > 59){
        $cheORechoORgeoGrade = "A-";
        $cheORechoORgeoPoint= 3.5;
    }
    elseif($cheORechoORgeo > 49){
        $cheORechoORgeoGrade = "B";
        $cheORechoORgeoPoint= 3;
    }
    elseif($cheORechoORgeo > 39){
        $cheORechoORgeoGrade = "C";
        $cheORechoORgeoPoint= 2;
    }
    elseif($cheORechoORgeo > 32){
        $cheORechoORgeoGrade = "D";
        $cheORechoORgeoPoint= 1;
    }
    elseif($cheORechoORgeo < 33){
        $cheORechoORgeoGrade = "F";
        $cheORechoORgeoPoint = 0;
    }


    $fourthGrade = " ";
    $fourthPoint = " ";
     if($fourth > 79){
        $fourthGrade = "A+";
        $fourthPoint = 5.00;
    }
    elseif($fourth > 69){
        $fourthGrade = "A";
        $fourthPoint= 4.00;
    }
    elseif($fourth > 59){
        $fourthGrade = "A-";
        $fourthPoint= 3.5;
    }
    elseif($fourth > 49){
        $fourthGrade = "B";
        $fourthPoint= 3;
    }
    elseif($fourth > 39){
        $fourthGrade = "C";
        $fourthPoint= 2;
    }
    elseif($bioORfinanORsoci > 32){
        $fourthGrade = "D";
        $fourthPoint= 1;
    }
    elseif($fourth < 33){
        $fourthGrade = "F";
        $fourthPoint = 0;
    }

    $withOutFouthTotalPoint = $banglaPoint + $englishPoint + $mathPoint +
    + $phyORaccORhisPoint + $bioORfinanORsociPoint + $cheORechoORgeoPoint;

    $GPAwithOutFourth = $withOutFouthTotalPoint/6;

        $totalPoint = $banglaPoint + $englishPoint + $mathPoint +
    + $phyORaccORhisPoint + $bioORfinanORsociPoint + $cheORechoORgeoPoint + $fourthPoint ;

    $totalGPA = ($totalPoint - 2)/6;

    $avgGrade = " ";
    if($totalGPA > 4.99){
        $avgGrade = "A+";
    }
    elseif($totalGPA > 3.99){
        $avgGrade = "A";
    }
    elseif($totalGPA > 3.49){
        $avgGrade = "A-";
    }
    elseif($totalGPA > 2.99){
        $avgGrade = "B";
    } 
    elseif($totalGPA > 1.99){
        $avgGrade = "C";
    }
    elseif($totalGPA > 0.99){
        $avgGrade = "D";
    }
    
    if(($bangLaGrade == "F") || ($englishGrade == "F") || ($mathGrade == "F")|| ($phyORaccORhisGrade == "F")|| ($bioORfinanORsociGrade == "F") || ($cheORechoORgeoGrade == "F")){
        $avgGrade = "F";
        $totalPoint = "0.00";
        $totalGPA = "0.00";

    }

    $total = $bangla+$english+$math+$phyORaccORhis+$bioORfinanORsoci+$cheORechoORgeo;
    if(empty($stuID)||empty($bangla)||empty($math)||empty($phyORaccORhis)||empty($bioORfinanORsoci)||empty($cheORechoORgeo)){
        $msg = "<script>alert('Please input all Fields and then press submit button'); </script>";
    }
    else{
        $select = $connection->prepare("SELECT * FROM marksheet WHERE student_id = '$stuID'");
        $select->execute();
        $count = $select->rowCount();
        if($count > 0){
            $msg = "<script>alert('This Student Marksheet already submitted'); </script>";
        }
        else{
            $insert = $connection->prepare("INSERT INTO marksheet(student_id, bangla, english, math, phyORaccoutORhist, bioORfinanORsoci, chemiORechoORgeo, fourth_sub, total, banglaGrade, englishGrade, mathGrade, phyORaccORhisGrade, bioORfinanORsociGrade, cheORechoORgeoGrade, fourthGrade, banglaPoint, englishPoint, mathPoint, phyORaccORhisPoint, bioORfinanORsociPoint, cheORechoORgeoPoint, fourthPoint, withOutFouthTotalPoint, GPAwithOutFourth, totalPoint, totalGPA, avgGrade) VALUES('$stuID', '$bangla', '$english', '$math', '$phyORaccORhis', '$bioORfinanORsoci','$cheORechoORgeo','$fourth','$total', '$bangLaGrade', '$englishGrade','$mathGrade', '$phyORaccORhisGrade','$bioORfinanORsociGrade','$cheORechoORgeoGrade','$fourthGrade','$banglaPoint', '$englishPoint','$mathPoint', '$phyORaccORhisPoint','$bioORfinanORsociPoint', '$cheORechoORgeoPoint', '$fourthPoint', '$withOutFouthTotalPoint', '$GPAwithOutFourth', '$totalPoint', '$totalGPA', '$avgGrade')");
            if($insert->execute()){
                $msg = "<script>alert('Submitted Successfully'); </script>";
            }
        }
    }

}
?>


<!-- bootstrap link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- bootstrap link -->
<!-- jQuery Link start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jquery end -->

<div class="container">
    <div class="row">
        <div class="col">
           <?php
           if(isset($msg)){
            echo $msg;
           }
           ?>
            <form action="" method="post">
                <table style="width: 70%; margin: auto; text-align:center">
                <tr>
                    <td colspan="2">
                    <h3 >Student Marksheet Input Form</h3>
                    </td>
                </tr>
                    <tr>
                        <td> <label class="form-control bg-info text-white"  for="">Input Student ID</label> </td>
                        <td> <input class="form-control" id="student" type="number" name="sid"></td>
                    </tr>
                    <tr>
                        <td> <label class="form-control bg-info text-white"  for="">Student Name</label> </td>
                        <td> <div class="form-control" id="studentName"></div></td>
                    </tr>
                    <tr>
                        <td> <label  class="form-control bg-info text-white" for="">Bangla</label></td>
                        <td><input class="form-control"  type="number" name="bangla"></td>
                    </tr>
                    <tr>
                        <td><label class="form-control bg-info text-white"  for="">English</label></td>
                        <td><input  class="form-control" type="number" name="english"></td>
                    </tr>
                    <tr>
                        <td><label class="form-control bg-info text-white"  for="">Math</label></td>
                        <td><input class="form-control"  type="number" name="math"></td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control bg-info text-white"  for="">Physics Or Accounting Or History</label>
                        </td>
                        <td>
                            <input  class="form-control"  type="number" name="PAH">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control bg-info text-white"  for="">Biology Or Finance Or Sociology</label>
                        </td>
                        <td> <input class="form-control" type="number" name="BFS"></td>
                    </tr>
                    <tr>
                        <td> <label class="form-control bg-info text-white" for="">Chemistry Or Economics Or Geography</label></td>
                        <td><input class="form-control" type="number" name="CEG"></td>
                    </tr>
                    <tr>
                        <td> <label class="form-control bg-info text-white" for="">Fouth Subject </label></td>
                        <td><input class="form-control" type="number" name="fourth"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input type="submit" name="subbtn" value="Submit" class="form-control btn btn-success"></td>
                   
                    </tr>
                   
                </table>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#student").keyup(function(){
        var myID = $(this).val();
        $.ajax({
            url: "takeStuName.php",
            type: "POST",
            data:{myData: myID},
            success:function(data){
                console.log(data);
                $("#studentName").html(data);
            }
        })
    })

})
</script>