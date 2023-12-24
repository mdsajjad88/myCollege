<?php
include "dbConnec.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in </title>

<!-- bootstrap link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- bootstrap link -->
 <!-- jQuery Link start -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jquery end -->
</head>
<body>

<div class="container">
    <div class="row">
    <div id="absnt">

</div>
        <div id="respnse">

        </div>
        <div class="col">
           
            <table border="1px solid black" style="width: 100%; text-align:center">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th colspan="2">Status</th>
                    </tr>
                </thead>
                <tbody id="showresult">

                </tbody>
            </table>
           
        </div>
    </div>
</div>
</body>
</html>
<script>
   
   

 $(document).ready(function(){
        
            var dept = "humanitys";
            $.ajax({
                url: "attnrespnse.php",
                method: "POST",
                data: {dept:dept},
                success:function(data){
                    
                    $("#showresult").html(data);
                   
                }
            });
            
        });
    // });


    function present(sid){
        $.ajax({
            url: "present.php",
            type: "POST",
            data: {uid:sid},
            success:function(data){
              $("#respnse").html(data);
            }
        })
    }
   
    function absent(stuId){
        $.ajax({
            url: "absent.php",
            type: "POST",
            data: {abid:stuId},
            success:function(data){
                $("#absnt").html(data);
            }
        })
    }

</script>