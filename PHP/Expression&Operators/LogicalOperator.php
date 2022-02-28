<?php
    $permission=true;
    $loggedin=true;
    $user="Denisa Naica";
    echo ($permission and $loggedin) ? "hello, $user" : "hello, guest";
    echo "<br>";


    $student="daria";
    //$math=true;
    //$science=false;
    $math=false;
    $science=false;
    echo ($math or $science) ? "studenta a  trecut materiile" : "studenta a picat";
    echo "<br>";
    //$result1=true && false;//false
    //$result2=true and false;//true

    $result1=true || false;//true
    $result2=true or false;//true

    echo ($result1)?"true" : "false";
    echo "<br>";
    echo ($result2)?"true" : "false";
    echo "<br>";

    $total=36;
    $passing=35;
    $isPassed=($total >$passing) ? true :false;
    echo $isPassed;//1
    echo "<br>";
    echo (!$isPassed) ?"not passed":"passed";




