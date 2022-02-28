<?php
    $name="Denisa";
    function print_name(){
        //var locala
        $name="PHP!";
        echo $name;
    }
    print_name();
    //in afara functiei   $name nu mai e PHP!
    //ci Denisa
    echo $name;
    $message="Welcome to php";
    function print_message(){
        echo $message;
    }
    //variabila $message nu e vizibila in interiorul functiei
    print_message();