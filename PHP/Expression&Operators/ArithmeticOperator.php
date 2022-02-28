<?php
    //calculate the student total marks
    $maths=70;
    $science=30;
    $english=80;
    $totalMarks=$maths+$science+$english;
    echo "Student total marks: " . $totalMarks . "<br>";

    $totalSubjects=300;
    $totalDifference=$totalSubjects- $totalMarks;
    echo "Diference: ". $totalDifference ."<br>";

    //calculate the area
    $length=10;
    $breath=20;
    $area=$length*$breath;
    echo "Aria: $area <br>";

    $percentage=($totalMarks/$totalSubjects)*100;
    echo "Procent: $percentage % <br>";

    //use the modulus operator
    $a=100%5;
    echo $a ."<br>";

    $b=101%5;
    echo $b ."<br>";

    //exponential operator
    $a=2;
    $b=3;
    $rez=($a **2) +($b**2);
    echo "$rez <br>";
