<?php
    //key=>val

    //indexed array
    $arr=['luni','marti','miercuri','joi','vineri','sambata','duminica'];
    foreach($arr as $val){
        echo $val ."<br>";
    }

    //associative array
$arr=[
     0=>'luni',
     1=>'marti',
     2=>'miercuri',
     3=>'joi',
     4=>'vineri',
     5=>'sambata',
     6=>'duminica'
   ];
    var_dump($arr);
    foreach($arr as $val){
         echo $val ."<br>";
    }
    echo "<br>";
    foreach($arr as $key=>$val){
        echo $key ."=>".$val."<br>";
    }

    //print all keys
    print_r(array_keys($arr));
    echo "<br>";

    //acces only the keys
    foreach($arr as $key1=>$val1){
        echo $key1."<br>";
    }

    echo "<br>";

    //acces only the values
    foreach($arr as $key1=>$val1){
        echo $val1."<br>";
    }

    $userDetails=[
        "denisa"=>"denisa@gmail.com",
        "adelina"=>"adelina@gmail.com",
        "maria"=>"maria@gmail.com"
    ];

    var_dump($userDetails);
    echo "<br>". $userDetails["denisa"]."<br>";
    $userDetails['Andrei']="andrei@yahoo.com";
    echo "<br>";
    var_dump($userDetails);







