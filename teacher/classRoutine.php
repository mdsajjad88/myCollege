<?php
include "dbConnec.php";
?>

<div class="container">
   <div class="row">
    <div class="col">
        <h4 class="text-center bg-secondary text-light" > Regular Class Routine </h4>

            <div class="row">
                <table class="table table-striped text-center" border="1">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>9.00-9.45</th>
                            <th>9.45-10.30</th>
                            <th>10.30-11.15</th>
                            <th>11.15-12.00</th>
                            <th>12.00-12.45</th>
                            <th>12.45-1.30</th>
                        </tr>
                        <?php
                        $allday = $connection->prepare("SELECT * FROM class_schedule");
                        $allday->execute();
                        while($routine = $allday->fetch(PDO::FETCH_ASSOC)){
                        
                        ?>
                            <tr>
                                <td>
                                    <?= $routine["days"] ?>
                                </td>
                                <td>
                                    <p><?= $routine["firstTeacher"] ?>(T) </p><hr>
                                    <p> <?= $routine["firstSubject"] ?>(S)</p>
                                </td>
                                <td>
                                    <p><?= $routine["seconTeacher"] ?>(T) </p><hr>
                                    <p> <?= $routine["secondSubject"] ?>(S)</p>
                                </td>
                                <td>
                                    <p><?= $routine["thirdTeacher"] ?>(T) </p><hr>
                                    <p> <?= $routine["thirdSubject"] ?>(S)</p>
                                </td>
                                <td>
                                    <p><?= $routine["fourthTeacher"] ?> (T)</p><hr>
                                    <p> <?= $routine["fourthSubject"] ?>(S)</p>
                                </td>
                                <td>
                                    <p><?= $routine["fivthTeacher"] ?>(T) </p><hr>
                                    <p> <?= $routine["fivthSubject"] ?>(S)</p>
                                </td>
                                <td>
                                    <p><?= $routine["sixTeacher"] ?>(T) </p><hr>
                                    <p> <?= $routine["sixSubject"] ?>(S)</p>
                                </td>
                               
                            </tr>
                           

                        <?php } ?>

                    </thead>
                </table>

            </div>
    </div>
   </div> 
</div>
       