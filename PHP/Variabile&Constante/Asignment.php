<html>
<head>
    <title>Assignment sectiune constante si variabile</title>
</head>
<body>
    <h1>Assignment variabile si constante</h1>
    <h2>Define variable</h2>
    <?php
        $firstname="denisa";
        $lastname="naica";
    ?>
    <h2>Print variable using echo/print</h2>
    <?php
        echo "Firstname: " . $firstname . " lastname: ". $lastname ."<br>";
    ?>
    <h2>Embed the variable inside quotes</h2>
    <?php
        echo "Firstname: $firstname <br> Lastname: $lastname <br>";
    ?>
    <h2>Define a function to print the name + Define same var inside the function</h2>
    <?php
        function print_name(){
            $firstname="denisa-adelina";
            $lastname="naica";
            echo "Firstname: $firstname <br> Lastname: $lastname <br>";

        }
        print_name();
         echo "Firstname: $firstname <br> Lastname: $lastname <br>";

    ?>
    <h2>Variabile globale</h2>
    <?php
        global $age;
        $age=23;
        echo $GLOBALS['age'];
    ?>
    <h2>Variabile statice</h2>
    <?php
        function staticVar(){
            static $counter=0;
            $counter++;
            echo $counter . "<br>";
        }
        staticVar();
        staticVar();
        staticVar();
    ?>
    <h2>CONSTANTE</h2>

    <?php
        define("FRANMEWORK","REACT");
        echo FRANMEWORK. "<br>";
        function show_const(){
            echo FRANMEWORK;
        }
        show_const();
    ?>

</body>
</html>
