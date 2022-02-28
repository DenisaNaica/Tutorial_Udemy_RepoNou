<?php
    //ternary operator
    $flag=(true) ? "corect" : "wrong";
    echo $flag . "<br>";

    $flag=(false) ? "corect" : "wrong";
    echo $flag . "<br>";

    //operatori de comparare

    $php_version=8;
   // echo PHP_MAJOR_VERSION;
    $php_system_version=PHP_MAJOR_VERSION;
    echo ($php_version==$php_system_version) ? "versiunea buna" : "versiunea nu se potriveste";
    echo "<br>";
    $name1="10";
    $name2=10;
    //valorile sunt la fel, dar tipul de date e diferit
    //string vs integer
    echo ($name1===$name2) ? "matched":"does not mached";

    //== equal operator
    //===identical operator
    echo "<br>";
    $name3="10";
    echo ($name1===$name3) ? "matched":"does not mached";

    echo "<br>";
    $specialFruit="oranges";
    $fruit1="apple";
    $fruit2="oranges";
    echo "<br>";
    echo ($specialFruit!=$fruit1) ? "oranges" : "altceva";
    echo "<br>";
    echo ($specialFruit!==$fruit2) ? "oranges" : "altceva";
    echo "<br>";
    $c1="john";
    $c2="walter";
    $c3="ajit";
    $agelimit=60;
    $a1=40;
    $a2=60;
    $a3=80;
    echo ($a1>$agelimit)? "da" : "nu";
    echo"<br>";
    echo ($a2>=$agelimit)? "da" : "nu";






