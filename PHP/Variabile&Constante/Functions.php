<?php
    function add(){
         $firstValue=10;
         $secondValue=20;
         $total=$firstValue+$secondValue;
         echo $total;
    }
    //apel
    add();
    //nu putem avea functii cu nume duplicate
    //o sa avem eroare fatala
/*
    function add(){
        echo "Duplicated function";
    }
*/
    //mu conteaza zona unde a fost apelata
    // poate fi oriunde apelul, spre deosebire de c/c++ si java
    // unde apelul trebuia sa fie neaparat dupa ce a fost definita functia
    welcome_message();
    function welcome_message(){
        echo "Welcome to php functions!";
    }

