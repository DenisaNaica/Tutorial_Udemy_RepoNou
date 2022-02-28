<?php
/*
    $result=0;
    function add($a,$b,$result=null):int{
        $adition=$a+$b;
        return $adition;
    }

    echo $result."<br>";
    $result=add(1,2);
    echo $result."<br>";
*/
$result=0;
function add($a,$b,&$result=null){
    $result=$a+$b;

}

echo $result."<br>";//0
add(1,2,$result);
//acum e 3
echo $result."<br>";


