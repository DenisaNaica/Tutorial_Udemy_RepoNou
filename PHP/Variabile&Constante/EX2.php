<html>
<head>
    <title>
        Exercitiul 2
    </title>
</head>
<body>
    <h1>Define and Display Constants</h1>

    <?php
        define("PROGRAM_INFO", "CONSTANTE");
        echo PROGRAM_INFO;
    ?>
    <h2>String Constant:</h2>
    <?=
    PROGRAM_INFO
    ?>
    <h2>Integer Constant</h2>
    <?PHP
        define("VERSION", 8.1);
        echo VERSION;
    ?>

    <h2>Print Constant from Function:</h2>
    <?php
        function print_version(){
            echo VERSION;
        }
        print_version();
    ?>

    <h2>Display Magic Constant:</h2>
    <?php
        echo __LINE__;
    ?>
</body>
</html>