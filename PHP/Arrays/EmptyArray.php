<?php
    //empty array
    $arr=[];
    echo count($arr)."<br>";
    var_dump($arr);
    echo "<br>";
    if(empty($arr)){
        echo "Array ul e empty"."<br>";
    }else{
        echo "Arrayul nu e empty". "<br>";
    }
    var_dump($arr);
    $arr=0;//aici e interpretat ca integer nu array
    var_dump($arr);
    $arr=[10];
    var_dump($arr);
    $arr[0]=[10];
    var_dump($arr);

