<?php
    //definire
    $name="Naica Denisa";

    //variailele pot fi atat stringuri cat si integeri
    $message=1;
    $message="Hello world";
    echo $message . "<br>";

    //print
    echo "Name: $name <br>";

    //convertire
    $a="10";
    $b=20;
    $i=$a * $b;
    echo "$i <br>";

    //variable scope;
    $counter=1;
    function show(){
        $counter=2;
        echo $counter;
    }
    show();
    echo "$counter <br>";

    //variabile globale
   global  $count;
   $count=1;

    function show1(){
       $count=2;
        echo $count;
    }
    show1();
    echo "$count <br>";

    //var statice
    function counter_static(){
        static $count=1;
        $count=$count+1;
        echo $count;
    }
    counter_static();
    counter_static();
    counter_static();

