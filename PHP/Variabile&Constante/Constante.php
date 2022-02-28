<?php
    define("LANGUAGE","PHP");
    $lang=LANGUAGE;

    echo "$lang <br>";//PHP
    //aici ia LANGUAGE ca fiind string si nu constanta
    echo "LANGUAGE <br>";
    echo LANGUAGE. " <br>";//PHP

    //constantele pot fi definite doar 1 sg data
    //pot fi accesate de oriunde- au global scope

    //aici e variabila
    $name="denisa";

    //aici e constanta
    define("name", "denisa naica");
    echo $name . name . "<br>";

    //reguli de definire
    //mereu upperCASE
    define('VERSION', 7.3);
    echo VERSION."<br>";