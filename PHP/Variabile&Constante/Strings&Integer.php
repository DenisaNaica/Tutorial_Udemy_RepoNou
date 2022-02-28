<html>
<head>
    <title>Stringuri si Integeri</title>

</head>
    <?php
        $name="John, Smith";
        $message="This is a String Message";
        //concatenare stringuri
        echo $name. ": " . $message. "<br>";
        echo "$name: $message";
    ?>
    <h1>Define Integers</h1>
    <?php
        $version=8.1;
        echo "Php version is $version";
    ?>
    <h1>Combine String and Integer</h1>
    <?php
        echo "$name: $message <br>";
        echo "name: $name <br>";
        $language="PHP";
        echo $language . " version is: ". $version;
    ?>
    <h1>Add 2 values</h1>
    <?php
        $firstvalue=10;
        $secondvalue=20;
        $total=$firstvalue +$secondvalue;
        echo "Total: " . $total;

    ?>
</html>
