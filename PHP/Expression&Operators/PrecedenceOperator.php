<?php
    $val=10;
    echo $val++;
    echo "<br>";
    $counter=$val++;
    echo "<br>";
    echo $counter;
    echo "<br>";
    echo $val;

    $val=5+2*10;
    echo "<br> $val";

    $result1=true && false;//false
    //operatorul de assignare(=) are o precedenta mai mare
    $result2=true and false;//true
    echo $result1;
    echo "<br>";
    echo $result2;
