<?php
    $name="denisa, naica";
    echo strlen($name). "<br>";
    $name="";
    echo strlen($name). "<br>";
    //daca o variabila nu e definita avem warning
    //SI AFISEAZA 0
    echo strlen($name1). "<br>";
    //afiseaza 0
    $name=null;
    echo strlen($name). "<br>";
    //concluzie: null, empty, var nedef lungimea e 0

    $name="aaaa";
    if(strlen($name)>0){
        echo $name."<br>";
    }else{
        echo "EMPTY". "<br>";
    }

    if(!empty($name)>0){
        echo $name."<br>";
    }else{
        echo "EMPTY". "<br>";
    }
