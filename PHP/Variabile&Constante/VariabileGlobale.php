<?php

    //declarare variabila globala;
    global $name;
    $name="Denisa";
    //nici var globala nu e vizibila in interiorul functiei
    function print_name(){
        $name="php";
        echo $name;
    }
    print_name();
    echo $name;
    global $message ;
    $message= 'Welcome to php';
    function print_message(){
        //ca sa fie accesata in interiorul functiei
        //tb declarata si aici (folosind global)
        global $message;
        echo $message;
    }
    //eroare variabila nedefinita !
    print_message();
    echo $message;



