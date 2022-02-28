 <?php
    //ex 1
     global $message;
     $message="Welcome to PHP";
     echo $GLOBALS['message'] . "<br>";
     //linia 4 si 6sunt echivalente
     echo $message . "<br>";

     //ex 2
    //calea spre fisierul php
     echo "Filename: " . $_SERVER['PHP_SELF'] . "<br>";

     //ex3
    global $name ;
    $name="Denisa Naica";

    function print_name(){
        echo $GLOBALS['name'];
    }

    print_name();

