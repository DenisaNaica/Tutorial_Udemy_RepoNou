<?php
    function is_integer1($a){
        if(!is_integer($a)){
            throw new Exception("Inputul nu e integer !!");
        }
        else{
            echo 'Inputul e integer'. "<br>";
        }
    }
    try{
        is_integer1("ana");
    }catch(Exception $e){
        echo $e->getMessage();
    }

    is_integer1(1);
