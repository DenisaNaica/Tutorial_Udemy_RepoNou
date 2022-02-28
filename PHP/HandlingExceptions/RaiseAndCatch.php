<?php

    function divide($x,$y):int{
        if($y==0){
                throw new Exception("Divide BY zero !");
        }
        $result=$x/$y;
        return $result;

    }
    try{
        //daca aici intalnim o exceptie
        $result=divide(1,0);


    }catch(Exception $e){
        //se sare in acest block
        echo 'Caught Exception: '. $e->getMessage(). '<br>';
    }

