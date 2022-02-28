<?php
    function custom_exception_handler($exception){
         echo 'Caught Exception: '. $exception->getMessage()."<br>";
    }

    set_exception_handler('custom_exception_handler');

    try {
        throw new Exception("Exception is raised");

    }finally{
        //blocu asta mereu se executa indiferent daca avem sau nu exceptii
        echo "This line is executed before exception".'<br>';
    }

    //ce se afiseaza ?
   //prima data ce e pe blocul finally, apoi ce  pe try

