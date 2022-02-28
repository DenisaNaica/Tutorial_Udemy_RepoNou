<?php

    //integer variable
    $marks=87;
    echo $marks . "<br>";
    //decimal var
    $marks=0x19F2D7C1;//435345345 in decimal
    //in browser se pune valoarea in zecimal
    echo $marks . "<br>";
    //string to integer addition
    $marks=10;
    //observam ca se poate abauga string cu integer
    // => conversia la integer din string se face automat
    $total="1000" + $marks;
    echo $total. "<br>";//1010

    //negative nr
    $finalMarks=5-20;
    echo $finalMarks . "<br>";

    $finalMarks=-20+20;
    echo $finalMarks . "<br>";

    echo PHP_INT_SIZE . "<br>";//8
    echo PHP_INT_MAX . "<br>";//8






