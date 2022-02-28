<html>
<head>
    <title>
        Exercitii variabile
    </title>
</head>
<body>
    <h1>Exercitiul 1: Create and display variables</h1>
    <?php
    $age=23;
    $name="denisa";
    echo "Name: $name , age: $age <br>";
    ?>
    <h2>String Variable:</h2>
    <?php

        echo "Name: $name <br>";
    ?>

    <h2>Integer Variable:</h2>
    <?php

    echo "Age: $age <br>";
    ?>
    <h2>Print variable from function:</h2>
    <?php
        function show_var()
        {
            $name="denisa naica";
            $age=24;
            echo $name .' ' .$age . "<br>";
        }
        show_var();
    ?>
    <h2>Static variable:</h2>
    <?php
    function show_staticVar1()
    {
        static $flag=0;
        $flag=$flag+1;
        echo $flag . "<br>";
    }
    show_staticVar1();//1
    show_staticVar1();//2
    show_staticVar1();//3
    ?>
    <h2>Global variable:</h2>
    <?php
        global $age;
        $age=2;
       echo  $GLOBALS['age']."<br>";
    ?>

    <h2>Super global variable:</h2>

    <?php
        echo $GLOBALS['age'];
    ?>
    <h2>Variables of Variables</h2>
    <?php
       $name="denisa naica";
       $student="name";
       echo "Student name: ${$student} <br>";
       //same output
       echo "Student name: " . $$student. "<br>";
    ?>
</body>
</html>
