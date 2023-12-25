<?php
$bangla = 50;
$eng = 70;
$math = 59;


switch ($bangla) {
    case (100 >79) :
      $bangla = 5;
      break;
    case (80>69) :
        $bangla = 4;
        break;
    case (70>59) :
        $bangla = 3.5;
         break;
    case (60>49) :
        $bangla = 3;
        break;
    case (50>39) :
        $bangla = 2;
        break;
    case (40>32) :
         $bangla = 1;
         break;
    default:
      $bangla = "Fail";
      echo $bangla;
  }

?>