<?php
    $arr=[1,2,9,56,3,4,-6];
    var_dump($arr);
    echo "<br>";
    //copie $arr
    $arr1=$arr;
    var_dump($arr1);
    echo "<br>";
    //a doua metoda de copiere
    foreach($arr as $val){
        $arr2[]=$val;
    }
    var_dump($arr2);

    $arr3=[
        0=>'luni',
        1=>'marti',
        2=>'miercuri',
        3=>'joi',
        4=>'vineri',
        5=>'sambata',
        6=>'duminica'
    ];
    echo "<br>";
    var_dump($arr3);
    $arr4=$arr3;
    echo "<br>";
    var_dump($arr4);

    $arr5=[];
    foreach($arr4 as $key=>$val){
        $arr5[$key]=$val;
    }

    echo "<br>";
    var_dump($arr5);





