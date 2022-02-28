<?php

    //string to array
    $students="john,parker,amit,jacob,jim";
    $studentArr=explode(",",$students);
    var_dump($studentArr);
    echo "<br>";

    //array to string
    $studentList=implode(',',$studentArr);
    var_dump($studentArr);
    echo "<br>".$studentList;

