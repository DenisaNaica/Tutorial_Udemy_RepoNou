<?php
    $arr=[1,2,9,56,3,4,-6];
    print_r($arr);
    echo "<br>";
    //ordonare cresc
    sort($arr);
    print_r($arr);
    echo "<br>";
    //ordonare descresc
    rsort($arr);
    print_r($arr);
    echo "<br>";

    $arr1=["3"=>"john","1"=>"ajit","2"=>"roger"];
    print_r($arr1);
    echo "<br>";
    //ordonare cresc in functie de val
    asort($arr1);
    print_r($arr1);
    echo "<br>";
    //ordonare descresc in functie de val
    arsort($arr1);
    print_r($arr1);
    echo "<br>";

    //sortare in functie de key
    ksort($arr1);
    print_r($arr1);
    echo "<br>";
    //ordonare descresc in functie de key
    krsort($arr1);
    print_r($arr1);
    echo "<br>";

