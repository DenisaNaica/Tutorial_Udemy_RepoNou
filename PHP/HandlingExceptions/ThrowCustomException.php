<?php
    function custom_exception_handler($exception){
        echo 'Caught Exception: '. $exception->getMessage()."<br>";
    }

    set_exception_handler('custom_exception_handler');
    throw new Exception("Exception is raised");
