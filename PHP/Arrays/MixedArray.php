<?php
    $arr=[];
    $arr[0]=1;
    $arr[1]="string";
    $arr[4]=true;
    $arr[10]=14.5;

    $arr[]="new string";
    $arr[]="new string 2";
    var_dump($arr);

    foreach($arr as $i){
        echo $i."<br>";
    }

