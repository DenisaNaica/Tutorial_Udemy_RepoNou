<HTML>
<head>
    <title>String functions</title>
</head>
<body>
    <h1>Ex1: String functions</h1>
    <h2>Find the given word in the string (case insensitive)</h2>
    <?php
        $content="you can do string operations easily with string functions";
        $findWord="operations";
        $position=false;
        $position=strpos($content,$findWord);
        if($position !==false){
            echo $position."<br>";
        }
    ?>
    <h2>Calculate the length of the string</h2>
    <?php
        echo "Lungimea stringului este: ".strlen($content)."<br>";
    ?>
    <h2>Remove white spaces from left in the string</h2>
    <?php
        $new_string="          d  i  d  i     ";
        echo ltrim($new_string)."<br>";
    ?>
    <h2>Reverse the string</h2>
    <?php
        echo str_shuffle($content)."<br>";
    ?>
    <h2>Word Wrap the Long String</h2>
    <?php
        echo wordwrap($content, 15);
    ?>
    <h2>Replace find word</h2>
    <?=
    str_replace($findWord, strtoupper($findWord), $content);
    ?>

    <h2>Nr of words</h2>
    <?php
        echo str_word_count($content);
    ?>
</body>
</HTML>
