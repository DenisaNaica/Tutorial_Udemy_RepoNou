<?php
    $arr=[1,2,3,4,5];
    var_dump($arr);
    //indexul urmator dupa 4 e 100
    $arr[100]=100;
    var_dump($arr);
    //se pune automat adica ultimul index=1
    $arr[]=101;
    var_dump($arr);
    echo "<br>";
    //se pierd datele anterioare
    $arr=['luni','marti','miercuri','joi','vineri','sambata','duminica'];
    var_dump($arr);