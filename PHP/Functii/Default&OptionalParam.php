<?php

declare(strict_types=1);
function printOddNumbers(int $limit,$skipNumber=-1){
    for($i=0;$i<=$limit;$i++){
        if($i==$skipNumber){
            continue;
        }
        if($i%2!=0){
            echo "odd number: $i"."<br>";
        }
    }
}

printOddNumbers(20);//$skipNumber e optional
printOddNumbers(10,5);