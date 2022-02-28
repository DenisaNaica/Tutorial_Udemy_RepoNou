<html>
<head>
    <title>Exercitiul 1</title>
</head>
<body>
    <h1>Ex1: How to use the Operators</h1>
    <h2>Add two number using Arithmetic op</h2>
    <?php
        $nr1=3;
        $nr2=56;
        $sum= $nr1 + $nr2;
        echo "REZULTAT: $sum <br>"
    ?>
    <h2>Find student passed or failed using conditional operators</h2>
    <?php
       $nota1=3.5;
       $nota2=8;
       $nota3=7.5;
       $media=($nota1 + $nota2 +$nota3)/3;
       echo ($media >=5) ? "admis" : "respins";
    ?>
    <h2>Verificare nr impar sau par</h2>
    <?php
        $number=10;
        $result=$number % 2;
        echo($result ==0) ? "par": "impar";
    ?>
    <h2>Verificare daca un user are drept de login </h2>
    <?php
        $hasLogin=true;
        $hasAcces=true;
        echo($hasLogin && $hasAcces) ? 'User acces':'User does not acces';
    ?>
</body>
</html>