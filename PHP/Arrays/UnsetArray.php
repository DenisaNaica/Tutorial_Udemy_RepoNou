<?php
    $arr=[1,2,3,4,5];
    print_r($arr);
    echo "<br>";
    //se sterge ultimul element
    unset($arr[4]);
    print_r($arr);

    //se adauga 5 la final
    $arr[]=5;
    echo "<br>";
    print_r($arr);
