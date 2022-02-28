<?php
    $arr=[1,2,3];
    //print v1
    var_dump($arr);
    echo "<br>";
    //print 2
    print_r($arr);
    echo "<br>";
   // echo $arr;//error
    //acces
    echo $arr[0]."<br>";
    echo $arr[1]."<br>";
    echo $arr[2]."<br>";

    //length array
    echo "Lungime array: ".count($arr)."<br>";

    for($count=0;$count<count($arr);$count++){
        echo $arr[$count]."<br>";
    }

    //schimbare valori array
    print_r($arr);
    $arr[0]=5;
    $arr[1]=9;
    $arr[2]=3;
    print_r($arr);

    $arr=[1,
        "String",
        false,
        23.4
    ];
    var_dump($arr);
