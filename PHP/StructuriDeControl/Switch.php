<?php
    $nr=23;
    $result=$nr%2;
    switch($result){
        case 1:
            echo "nr impar "."<br>";
            break;
        case 0:
            echo "nr par". '<br>';
            break;
        default:
            echo "invalid input "."<br>";
    }

    $weekDay="fri";
    switch($weekDay){
        case "mon":
            echo "monday"."<br>";
            break;
        case "fri":
            echo "friday". "<br>";
            break;
        default:
            echo "others" ."<br>";
    }
