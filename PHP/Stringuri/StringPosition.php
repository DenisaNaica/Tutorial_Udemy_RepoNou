<?php
    $content="this is a very long content and it is a string";
    $findContentWord="content";
    $position=strpos($content, $findContentWord);
    echo $position . "<br>";
    //null
    $findContentWord="content1";
    $position=strpos($content, $findContentWord);
    echo $position . "<br>";
    //null
    $findContentWord="This";
    $position=strpos($content, $findContentWord);
    echo $position . "<br>";
    //0
    $findContentWord="this";
    $position=strpos($content, $findContentWord);
    echo $position . "<br>";