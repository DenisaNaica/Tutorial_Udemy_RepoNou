<?php
    $addFunction=function($a,$b){
        return $a + $b;
    };

    echo $addFunction(2,5)."<br>";

    $content="This is a string message";
    //asa nu putem accesa variabila content
    $printContent=function(){

        echo $content;
    };
    $printContent();
    $printContent=function() use($content){

         echo $content;
    };
    $printContent();


