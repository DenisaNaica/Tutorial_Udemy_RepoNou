<?php
    try{
        throw new Exception("Raise an exception");
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        echo "this block can be used as a cleanup section";
    }
