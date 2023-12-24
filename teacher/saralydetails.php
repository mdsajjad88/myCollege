<?php

error_reporting(0);
include("dbConnec.php");

$teacherID = $_SESSION['accountID'];
$select = $connection->prepare("SELECT * FROM salarysheet WHERE teacher_id = '$teacherID'");
$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container">
    <div class="row">
        <div class="col-2"></div>
       
        <div class="col-8">
        <table class="table table-striped">
    <thead class="bg-secondary text-light">
        <tr>
        <th>
            Category
        </th>
        <th>Amount</th>
        </tr>
       
    </thead>
    <tbody>
        <tr>
            <td>
                Basic Salary
            </td>
            <td> <?= $row['basic']?>/- </td>
        </tr>
        <tr>
            <td>
               House Rent Fee
            </td>
            <td> <?= $row['houserent']?>/- </td>
        </tr>
        <tr>
            <td>
               Medical Allowncement
            </td>
            <td> <?= $row['medical']?>/- </td>
        </tr>
        <tr>
            <td>
            Coveyance Fee
            </td>
            <td> <?= $row['coveyance']?>/- </td>
        </tr>
        <tr>
            <td>
              Monthly Bonus
            </td>
            <td> <?= $row['bonus']?>/- </td>
        </tr>
        <tr>
            <td class='bg-info text-light'>
               Total Salary
            </td>
            <td class="bg-dark text-light"> <b>  <?= $row['total']?>/- </b>  </td>
        </tr>
    </tbody>
</table>
</div>
<div class="col-2"></div>
       
    </div>
</div>
