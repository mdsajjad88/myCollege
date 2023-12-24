<?php
include "dbConnec.php";

                        
                      

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

<div class="container">
    <div class="row">
        <div class="col">
           
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
                <form action="" method="post">
                    <tr class="bg-info">
                        <td rowspan="2" class="text-light"> <b>Sunday</b></td>
                        
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
                            <input type="text" name="sunFirtsSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="sunSecondSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="sunThirdSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="sunFourthSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="sunfivthSub" class="form-control" placeholder="Input Subject">
                        </td>
                        <td>
                            <input type="text" name="sunSixSub" class="form-control" placeholder="Input Subject">
                        </td>      
                    </tr>
                    <tr>
                        <td colspan="7">
                        <input type="submit" name="sundaySubmit" value="Submit" class="form-control btn btn-dark">
                        </td>
                    </tr>
                   
                    </form>
                    <form action="" method="post">
                    <tr class="bg-secondary">
                        <td rowspan="2" class="text-light"><b>Monday</b> </td>
                        
                        <td>
                            <input type="text" name="monFirts" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="monSecond" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="monThird" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="monFourth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="monfivth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="monSix" class="form-control" placeholder="Input Teacher Name">
                        </td>                          
                    </tr>
                    
                    <tr class="bg-secondary">
                    <td>
                            <input type="text" name="monFirtsSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="monSecondSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="monThirdSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="monFourthSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="monfivthSub" class="form-control" placeholder="Input Subject">
                        </td>
                        <td>
                            <input type="text" name="monSixSub" class="form-control" placeholder="Input Subject">
                        </td>      
                    </tr>
                    <tr>
                        <td colspan="7">
                        <input type="submit" name="mondaySubmit" value="Submit" class="form-control btn btn-primary">
                        </td>
                    </tr>
                    </form>
                    <form action="" method="post">
                    <tr class="bg-info">
                        <td rowspan="2" class="text-light"><b>Tuesday</b></td>
                        
                        <td>
                            <input type="text" name="tuesFirts" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="tuesSecond" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="tuesThird" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="tuesFourth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="tuesfivth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="tuesSix" class="form-control" placeholder="Input Teacher Name">
                        </td>                          
                    </tr>
                  
                    
                    <tr class="bg-info">
                        <td>
                            <input type="text" name="tuesFirtsSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="tuesSecondSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="tuesThirdSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="tuesFourthSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="tuesfivthSub" class="form-control" placeholder="Input Subject">
                        </td>
                        <td>
                            <input type="text" name="tuesSixSub" class="form-control" placeholder="Input Subject">
                        </td>      
                    </tr>
                    <tr>
                    <td colspan="7">
                        <input type="submit" name="tuesdaySubmit" value="Submit" class="form-control btn btn-dark">
                        </td>
                    </tr>
                    </form>
                    <form action="" method="post">
                    <tr class="bg-secondary">
                        <td rowspan="2" class="text-light"><b>Wednesday</b></td>
                        
                        <td>
                            <input type="text" name="wednesFirts" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="wednesSecond" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="wednesThird" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="wednesFourth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="wednesfivth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="wednesSix" class="form-control" placeholder="Input Teacher Name">
                        </td>                          
                    </tr>
                    

                    <tr class="bg-secondary">
                        <td>
                            <input type="text" name="wednesFirtsSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="wednesSecondSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="wednesThirdSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="wednesFourthSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="wednesfivthSub" class="form-control" placeholder="Input Subject">
                        </td>
                        <td>
                            <input type="text" name="wednesSixSub" class="form-control" placeholder="Input Subject">
                        </td>      
                    </tr>
                    <tr>
                    <td colspan="7">
                        <input type="submit" name="wednesdaySubmit" value="Submit" class="form-control btn btn-primary">
                        </td>
                    </tr>
                    </form>
                    <form action="" method="post">
                    <tr class="bg-info">
                        <td rowspan="2" class="text-light"><b>Thursday</b></td>
                        
                        <td>
                            <input type="text" name="thursFirts" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="thursSecond" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="thursThird" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="thursFourth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="thursfivth" class="form-control" placeholder="Input Teacher Name">
                        </td>
                        <td>
                            <input type="text" name="thursSix" class="form-control" placeholder="Input Teacher Name">
                        </td>                          
                    </tr>
                    
                    <tr class="bg-info">
                    <td>
                            <input type="text" name="thursFirtsSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="thursSecondSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="thursThirdSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="thursFourthSub" class="form-control" placeholder="Input  Subject">
                        </td>
                        <td>
                            <input type="text" name="thursfivthSub" class="form-control" placeholder="Input Subject">
                        </td>
                        <td>
                            <input type="text" name="thursSixSub" class="form-control" placeholder="Input Subject">
                        </td>      
                    </tr>
                    <tr>
                        <td colspan="7">
                        <input type="submit" name="thursdaySubmit" value="Submit" class="form-control btn btn-dark">
                        </td>
                    </tr>
                    </form>
                </tbody>

            </table>
            </form>
        </div>
    </div>
</div>