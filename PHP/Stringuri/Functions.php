<?php
    $content="you can do string operations easily with string functions";
    $findWord="operations";
    $position=false;

    echo $content."<br>";
    //nr of words
    echo "Nr of word:  ".str_word_count($content)."<br>";

    //replace string
    echo "Find and replace op with manipulation: ".
        str_replace("operation","manipulation",$content)."<br>";

    //reverse
    echo "Reverse the string:  ".str_shuffle($content)."<br>";

    //uppercase and lowercase
    echo strtolower($content)."<br>";
    echo strtoupper($content)."<br>";

    //eimina spatiile in plus
    $content1="ana      are        mere";
    echo trim($content1)."<br>";

