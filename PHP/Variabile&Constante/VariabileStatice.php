<?php

    echo "<h1> Variabile statice </h1>";

    function counter(){
        //var statica nu "moare" la finalul functiei
        //nu se reinitializeaza la apel
        static $counter=1;

        echo $counter . "<br>";
        $counter=$counter+1;
    }
    counter();//1
    counter();//2