<?php
    function printEvenNumbers($limit){

        for($i=0;$i<=$limit;$i++){
            if($i%2==0){
                echo "even nr: $i"."<br>";
            }

        }
    }

    printEvenNumbers(20);
    echo "<br>";
    printEvenNumbers("20");

    function add($a,$b){
        return $a +$b;
    }
    echo  add(4,7);
    echo "<br>";
