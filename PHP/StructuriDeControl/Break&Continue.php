<?php
    $exit=0;
    while(true){
        echo $exit."<br>";
        $exit++;
        if($exit==6)
        {
        //fortare iesire din loop infinit
        break;
        }
    }
    $value=1;
    while(true){
        $result=$value%2;
        if($result==1){
            $value++;
             continue;
             //ignora urmatoarele randuri
        }
        if($value>10){
            break;
        }
        echo "Even nr ".$value. "<br>";
        $value++;
    }