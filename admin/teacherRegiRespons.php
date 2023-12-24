<?php
include "dbConnec.php";
if(isset($_POST['depid'])){
  $dept = $_POST['depid'];



 $select = $connection->prepare("SELECT * FROM subject WHERE dept_id = '$dept'");
 $select->execute();

while($row2 = $select->fetch(PDO::FETCH_ASSOC)){

  $result = "<option value='". $row2['dept_id'] ."'>".$row2['subject_name']."</option>";

  echo $result;
  }
}




?>