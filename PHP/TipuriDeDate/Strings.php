<?php
    $name1= "denisa adelina";
    $name2="naica";
    echo "$name1 and $name2" . '<br>';

    $name3=$name1 . " " . $name2;
    echo $name3 . "<br>";
    echo "dimensiunea stringului este " . strlen($name3). "<br>";
    //pt diferite functii + info : php.net !!!

    //empty
    $name=null;
    echo $name . "<br>";
    echo ($name) ? "has value":"emply";
    echo "<br>";

    //empty
    $name="0";
    echo ($name) ? "has value": "empty";
    $name="denisa";

    unset($name);//face variabila sa si piarda valoarea si sa fie nedefinita
    echo $name;