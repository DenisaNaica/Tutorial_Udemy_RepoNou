<?php
    $arr=["a","b","c","d","e"];
    var_dump($arr);
    $counter=0;
    foreach($arr as $values){
        echo"[$counter]=>$values" ."<br>";
        $counter++;
    }